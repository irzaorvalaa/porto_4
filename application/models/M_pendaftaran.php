<?php
class M_pendaftaran extends CI_Model{

	function get_all_pendaftaran(){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran ORDER BY pendaftaran_id DESC");
		return $hsl;
	}
	function simpan_pendaftaran($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_pendaftaran(pendaftaran_judul,pendaftaran_isi,pendaftaran_kategori_id,pendaftaran_kategori_nama,pendaftaran_img_slider,pendaftaran_pengguna_id,pendaftaran_author,pendaftaran_gambar,pendaftaran_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_pendaftaran_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran where pendaftaran_id='$kode'");
		return $hsl;
	}
	function update_pendaftaran($pendaftaran_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_pendaftaran set pendaftaran_judul='$judul',pendaftaran_isi='$isi',pendaftaran_kategori_id='$kategori_id',pendaftaran_kategori_nama='$kategori_nama',pendaftaran_img_slider='$imgslider',pendaftaran_pengguna_id='$user_id',pendaftaran_author='$user_nama',pendaftaran_gambar='$gambar',pendaftaran_slug='$slug' where pendaftaran_id='$pendaftaran_id'");
		return $hsl;
	}
	function update_pendaftaran_tanpa_img($pendaftaran_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_pendaftaran set pendaftaran_judul='$judul',pendaftaran_isi='$isi',pendaftaran_kategori_id='$kategori_id',pendaftaran_kategori_nama='$kategori_nama',pendaftaran_img_slider='$imgslider',pendaftaran_pengguna_id='$user_id',pendaftaran_author='$user_nama',pendaftaran_slug='$slug' where pendaftaran_id='$pendaftaran_id'");
		return $hsl;
	}
	function hapus_pendaftaran($kode){
		$hsl=$this->db->query("delete from tbl_pendaftaran where pendaftaran_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_info_slider(){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran where pendaftaran_img_slider='1' ORDER BY pendaftaran_id DESC");
		return $hsl;
	}
	function get_info_home(){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran ORDER BY pendaftaran_id DESC limit 4");
		return $hsl;
	}

	function info_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran ORDER BY pendaftaran_id DESC limit $offset,$limit");
		return $hsl;
	}

	function info(){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran ORDER BY pendaftaran_id DESC");
		return $hsl;
	}
	function get_info_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran where pendaftaran_id='$kode'");
		return $hsl;
	}

	function cari_info($keyword){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(pendaftaran_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran WHERE pendaftaran_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_pendaftaran_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
