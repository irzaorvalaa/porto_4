<?php
class Alumni extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_alumni');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_alumni->get_all_alumni();
		$this->load->view('admin/v_alumni',$x);
	}
	
	function simpan_alumni(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
                            $angkatan = strip_tags($this->input->post('xangkatan'));
                            $jabatan = strip_tags($this->input->post('xjabatan'));



							$this->m_alumni->simpan_alumni($nama,$photo,$angkatan,$jabatan);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/alumni');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/alumni');
	                }
	                 
	            }else{
					$nama=strip_tags($this->input->post('xnama'));

					$this->m_alumni->simpan_alumni_tanpa_img($nama);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/alumni');
				}
				
	}
	
	function update_alumni(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
                            $angkatan = strip_tags($this->input->post('xangkatan'));
                            $jabatan = strip_tags($this->input->post('xjabatan'));
                            $kode=$this->input->post('kode');

							$this->m_alumni->update_alumni($nama,$photo,$kode,$angkatan,$jabatan);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/alumni');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/alumni');
	                }
	                
	            }else{
							$nama=strip_tags($this->input->post('xnama'));
                            $angkatan = strip_tags($this->input->post('xangkatan'));
                            $jabatan = strip_tags($this->input->post('xjabatan'));
                            $kode=$this->input->post('kode');
							$this->m_alumni->update_alumni_tanpa_img($nama,$kode,$angkatan,$jabatan);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/alumni');
	            } 

	}

	function hapus_alumni(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_alumni->hapus_alumni($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/alumni');
	}

}