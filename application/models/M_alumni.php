<?php 
class M_alumni extends CI_Model{

	function get_all_alumni(){
		$hsl=$this->db->query("SELECT * FROM tbl_alumni");
		return $hsl;
	}

	function simpan_alumni($nama,$photo,$angkatan,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nama,alumni_photo,alumni_angkatan,alumni_jabatan) VALUES ('$nama','$photo','$angkatan','$jabatan')");
		return $hsl;
	}
	function simpan_alumni_tanpa_img($nama,$angkatan,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nama,alumni_angkatan,alumni_jabatan) VALUES ('$nama','$angkatan','$jabatan')");
		return $hsl;
	}

	function update_alumni($kode,$nama,$photo,$angkatan,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nama='$nama',alumni_photo='$photo',alumni_angkatan='$angkatan',alumni_jabatan='$jabatan' WHERE alumni_id='$kode'");
		return $hsl;
	}
	function update_alumni_tanpa_img($kode,$nama,$angkatan,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nama='$nama',alumni_angkatan='$angkatan',alumni_jabatan='$jabatan' WHERE alumni_id='$kode'");
		return $hsl;
	}
	function hapus_alumni($kode){
		$hsl=$this->db->query("DELETE FROM tbl_alumni WHERE alumni_id='$kode'");
		return $hsl;
	}

	//front-end
	function alumni(){
		$hsl=$this->db->query("SELECT * FROM tbl_alumni");
		return $hsl;
	}
	function alumni_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_alumni limit $offset,$limit");
		return $hsl;
	}

}