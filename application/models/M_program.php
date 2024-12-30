<?php 
class M_program extends CI_Model{

	function get_all_program(){
		$hsl=$this->db->query("SELECT * FROM tbl_program");
		return $hsl;
	}

	function simpan_program($nama,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_program (program_judul,program_photo) VALUES ('$nama','$photo')");
		return $hsl;
	}
	function simpan_program_tanpa_img($nama){
		$hsl=$this->db->query("INSERT INTO tbl_program (program_judul) VALUES ('$nama')");
		return $hsl;
	}

	function update_program($kode,$nama,$photo){
		$hsl=$this->db->query("UPDATE tbl_program SET program_judul='$nama',program_photo='$photo' WHERE program_id='$kode'");
		return $hsl;
	}
	function update_program_tanpa_img($kode,$nama){
		$hsl=$this->db->query("UPDATE tbl_program SET program_judul='$nama' WHERE program_id='$kode'");
		return $hsl;
	}
	function hapus_program($kode){
		$hsl=$this->db->query("DELETE FROM tbl_program WHERE program_id='$kode'");
		return $hsl;
	}

	//front-end
	function program(){
		$hsl=$this->db->query("SELECT * FROM tbl_program");
		return $hsl;
	}
	function program_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_program limit $offset,$limit");
		return $hsl;
	}

}