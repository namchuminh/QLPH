<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ThietBi extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		return $this->db->query('SELECT thietbiphong.*, phonghoc.MaPhongHoc FROM phonghoc, thietbiphong WHERE thietbiphong.MaPhongHoc = phonghoc.MaPhongHoc ORDER BY thietbiphong.MaThietBi DESC')->result_array();
	}

	public function getById($MaThietBi){
		return $this->db->query('SELECT * FROM thietbiphong WHERE MaThietBi = ?', array($MaThietBi))->result_array();
	}

	public function update($mathietbi, $tenthietbi, $mota, $soluong, $phonghoc, $trangthai){
		return $this->db->query('UPDATE thietbiphong SET mathietbi = ?, tenthietbi = ?, mota = ?, soluong = ?, maphonghoc = ?, trangthai = ? WHERE mathietbi = ?', array($mathietbi, $tenthietbi, $mota, $soluong, $phonghoc, $trangthai, $mathietbi));
	}

	public function insert($mathietbi, $tenthietbi, $mota, $soluong, $phonghoc, $trangthai){
		return $this->db->query('INSERT INTO `thietbiphong`(`mathietbi`, `tenthietbi`, `mota`, `soluong`, `maphonghoc`, `trangthai`) VALUES (?, ?, ?, ?, ?, ?)', array($mathietbi, $tenthietbi, $mota, $soluong, $phonghoc, $trangthai));
	}

	public function delete($mathietbi){
		return $this->db->query('DELETE FROM `thietbiphong` WHERE mathietbi = ?', array($mathietbi));
	}
}

/* End of file Model_LoaiPhong.php */
/* Location: ./application/models/Model_LoaiPhong.php */