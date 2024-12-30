<?php 
class M_fasilitas extends CI_Model{

	function get_all_fasilitas(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas");
		return $hsl;
	}

	function simpan_fasilitas($nama,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitas (fasilitas_judul,fasilitas_photo) VALUES ('$nama','$photo')");
		return $hsl;
	}
	function simpan_fasilitas_tanpa_img($nama){
		$hsl=$this->db->query("INSERT INTO tbl_fasilitas (fasilitas_judul) VALUES ('$nama')");
		return $hsl;
	}

	function update_fasilitas($kode,$nama,$photo){
		$hsl=$this->db->query("UPDATE tbl_fasilitas SET fasilitas_judul='$nama',fasilitas_photo='$photo' WHERE fasilitas_id='$kode'");
		return $hsl;
	}
	function update_fasilitas_tanpa_img($kode,$nama){
		$hsl=$this->db->query("UPDATE tbl_fasilitas SET fasilitas_judul='$nama' WHERE fasilitas_id='$kode'");
		return $hsl;
	}
	function hapus_fasilitas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_fasilitas WHERE fasilitas_id='$kode'");
		return $hsl;
	}

	//front-end
	function fasilitas(){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas");
		return $hsl;
	}
	function fasilitas_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_fasilitas limit $offset,$limit");
		return $hsl;
	}

}