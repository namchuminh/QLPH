<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_PhongHoc extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		return $this->db->query('SELECT phonghoc.*, loaiphong.TenLoaiPhong, vitriphong.* FROM phonghoc, vitriphong, loaiphong WHERE phonghoc.MaLoaiPhong = loaiphong.MaLoaiPhong AND phonghoc.MaViTriPhong = vitriphong.MaViTriPhong ORDER BY phonghoc.MaPhongHoc DESC')->result_array();
	}

	public function getById($MaPhongHoc){
		return $this->db->query('SELECT * FROM phonghoc WHERE MaPhongHoc = ?', array($MaPhongHoc))->result_array();
	}

	public function update($maphonghoc, $dientich, $succhua, $loaiphong, $vitri, $tinhtrang){
		return $this->db->query('UPDATE phonghoc SET MaPhongHoc = ?, DienTich = ?, SucChua = ?, MaLoaiPhong = ?, MaViTriPhong = ?, TinhTrang = ? WHERE MaPhongHoc = ?', array($maphonghoc, $dientich, $succhua, $loaiphong, $vitri, $tinhtrang, $maphonghoc));
	}

	public function insert($maphonghoc, $dientich, $succhua, $loaiphong, $vitri, $tinhtrang){
		return $this->db->query('INSERT INTO `phonghoc`(`MaPhongHoc`, `DienTich`, `SucChua`, `MaLoaiPhong`, `MaViTriPhong`, `TinhTrang`) VALUES (?, ?, ?, ?, ?, ?)', array($maphonghoc, $dientich, $succhua, $loaiphong, $vitri, $tinhtrang));
	}

	public function delete($maphonghoc){
		return $this->db->query('DELETE FROM `phonghoc` WHERE MaPhongHoc = ?', array($maphonghoc));
	}

	public function search($tenphonghoc){
		$tenphonghoc = "%".$tenphonghoc."%";
		return $this->db->query('SELECT phonghoc.*, loaiphong.TenLoaiPhong, vitriphong.* FROM phonghoc, vitriphong, loaiphong WHERE phonghoc.MaLoaiPhong = loaiphong.MaLoaiPhong AND phonghoc.MaViTriPhong = vitriphong.MaViTriPhong AND phonghoc.MaPhongHoc LIKE ? ORDER BY phonghoc.MaPhongHoc DESC', array($tenphonghoc))->result_array();
	}
}

/* End of file Model_PhongHoc.php */
/* Location: ./application/models/Model_PhongHoc.php */