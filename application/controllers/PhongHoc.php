<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PhongHoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('TaiKhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$this->load->model('Model_PhongHoc');
		$this->load->model('Model_ViTri');
		$this->load->model('Model_LoaiPhong');
	}

	public function index()
	{
		$data['title'] = "Quản lý phòng học";
		$data['list'] = $this->Model_PhongHoc->getAll();
		return $this->load->view('View_PhongHoc', $data);
	}


	public function add(){
		$data['title'] = "Thêm thông tin phòng học";
		$data['detail'] = $this->Model_PhongHoc->getAll();
		$data['vitri'] = $this->Model_ViTri->getAll();
		$data['loaiphong'] = $this->Model_LoaiPhong->getAll();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$maphonghoc = $this->input->post('tenphonghoc');
			$dientich = $this->input->post('dientich');
			$succhua = $this->input->post('succhua');
			$vitri = $this->input->post('vitri');
			$loaiphong = $this->input->post('loaiphong');
			$tinhtrang = $this->input->post('tinhtrang');

			if(count($this->Model_PhongHoc->getById($maphonghoc)) >= 1){
				$data['error'] = "Mã phòng đã tồn tại!";
				return $this->load->view('View_ThemPhongHoc', $data);
			}

			$this->Model_PhongHoc->insert($maphonghoc, $dientich, $succhua, $loaiphong, $vitri, $tinhtrang);
			$this->session->set_flashdata('success', 'Thêm thông tin phòng học thành công!');
			return redirect(base_url('phong-hoc/'));
		}
		return $this->load->view('View_ThemPhongHoc', $data);
	}

	public function update($MaPhongHoc){
		$data['title'] = "Cập nhật thông tin phòng học";
		$data['vitri'] = $this->Model_ViTri->getAll();
		$data['loaiphong'] = $this->Model_LoaiPhong->getAll();
		$data['detail'] = $this->Model_PhongHoc->getById($MaPhongHoc);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$maphonghoc = $this->input->post('tenphonghoc');
			$dientich = $this->input->post('dientich');
			$succhua = $this->input->post('succhua');
			$vitri = $this->input->post('vitri');
			$loaiphong = $this->input->post('loaiphong');
			$tinhtrang = $this->input->post('tinhtrang');

			$this->Model_PhongHoc->update($maphonghoc, $dientich, $succhua, $loaiphong, $vitri, $tinhtrang);
			$data['detail'] = $this->Model_PhongHoc->getById($MaPhongHoc);
			$data['success'] = "Cập nhật thông tin phòng thành công!";
			return $this->load->view('View_SuaPhongHoc', $data);

		}
		return $this->load->view('View_SuaPhongHoc', $data);
	}

	public function delete($MaPhongHoc){
		$this->Model_PhongHoc->delete($MaPhongHoc);
		$this->session->set_flashdata('success', 'Xóa phòng học thành công!');
		return redirect(base_url('phong-hoc/'));
	}

	public function search(){
		$tenphonghoc = $this->input->get('tenphonghoc');
		$data['title'] = "Quản lý phòng học";
		$data['list'] = $this->Model_PhongHoc->search($tenphonghoc);
		return $this->load->view('View_PhongHoc', $data);
	}

}

/* End of file PhongHoc.php */
/* Location: ./application/controllers/PhongHoc.php */