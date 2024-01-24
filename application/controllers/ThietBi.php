<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThietBi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('TaiKhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$this->load->model('Model_ThietBi');
		$this->load->model('Model_PhongHoc');
	}

	public function index()
	{
		$data['title'] = "Quản lý thiết bị phòng";
		$data['list'] = $this->Model_ThietBi->getAll();
		return $this->load->view('View_ThietBi', $data);
	}

	public function add(){
		$data['title'] = "Thêm thông tin thiết bị";
		$data['phonghoc'] = $this->Model_PhongHoc->getAll();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$mathietbi = $this->input->post('mathietbi');
			$tenthietbi = $this->input->post('tenthietbi');
			$mota = $this->input->post('mota');
			$soluong = $this->input->post('soluong');
			$phonghoc = $this->input->post('phonghoc');
			$trangthai = $this->input->post('trangthai');
			if(count($this->Model_ThietBi->getById($mathietbi)) >= 1){
				$data['error'] = "Mã thiết bị đã tồn tại!";
				return $this->load->view('View_ThemThietBi', $data);
			}

			$this->Model_ThietBi->insert($mathietbi, $tenthietbi, $mota, $soluong, $phonghoc, $trangthai);
			$this->session->set_flashdata('success', 'Thêm thông tin thiết bị phòng thành công!');
			return redirect(base_url('thiet-bi/'));
		}
		return $this->load->view('View_ThemThietBi', $data);
	}

	public function update($MaThietBi){
		$data['title'] = "Cập nhật thiết bị phòng";
		$data['detail'] = $this->Model_ThietBi->getById($MaThietBi);
		$data['phonghoc'] = $this->Model_PhongHoc->getAll();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$mathietbi = $this->input->post('mathietbi');
			$tenthietbi = $this->input->post('tenthietbi');
			$mota = $this->input->post('mota');
			$soluong = $this->input->post('soluong');
			$phonghoc = $this->input->post('phonghoc');
			$trangthai = $this->input->post('trangthai');

			$this->Model_ThietBi->update($mathietbi, $tenthietbi, $mota, $soluong, $phonghoc, $trangthai);
			$data['detail'] = $this->Model_ThietBi->getById($MaThietBi);
			$data['success'] = "Cập nhật thiết bị phòng thành công!";
			return $this->load->view('View_SuaThietBi', $data);
		}
		return $this->load->view('View_SuaThietBi', $data);
	}

	public function delete($MaThietBi){
		$this->Model_ThietBi->delete($MaThietBi);
		$this->session->set_flashdata('success', 'Xóa thiết bị thành công!');
		return redirect(base_url('thiet-bi/'));
	}

}

/* End of file PhongHoc.php */
/* Location: ./application/controllers/PhongHoc.php */