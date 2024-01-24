<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoaiPhong extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('TaiKhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$this->load->model('Model_LoaiPhong');
	}

	public function index()
	{
		$data['title'] = "Quản lý loại phòng";
		$data['list'] = $this->Model_LoaiPhong->getAll();
		return $this->load->view('View_LoaiPhong', $data);
	}

	public function add(){
		$data['title'] = "Thêm thông tin loại phòng";
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$maloaiphong = $this->input->post('maloaiphong');
			$tenloaiphong = $this->input->post('tenloaiphong');
			$mota = $this->input->post('mota');
			if(count($this->Model_LoaiPhong->getById($maloaiphong)) >= 1){
				$data['error'] = "Mã phòng đã tồn tại!";
				return $this->load->view('View_ThemPhongHoc', $data);
			}

			$this->Model_LoaiPhong->insert($maloaiphong, $tenloaiphong, $mota);
			$this->session->set_flashdata('success', 'Thêm thông tin loại phòng thành công!');
			return redirect(base_url('loai-phong/'));
		}
		return $this->load->view('View_ThemLoaiPhong', $data);
	}

	public function update($MaLoaiPhong){
		$data['title'] = "Cập nhật thông tin loại phòng";
		$data['detail'] = $this->Model_LoaiPhong->getById($MaLoaiPhong);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$maloaiphong = $this->input->post('maloaiphong');
			$tenloaiphong = $this->input->post('tenloaiphong');
			$mota = $this->input->post('mota');

			$this->Model_LoaiPhong->update($maloaiphong, $tenloaiphong, $mota);
			$data['detail'] = $this->Model_LoaiPhong->getById($MaLoaiPhong);
			$data['success'] = "Cập nhật thông tin loại phòng thành công!";
			return $this->load->view('View_SuaLoaiPhong', $data);

		}
		return $this->load->view('View_SuaLoaiPhong', $data);
	}

	public function delete($MaLoaiPhong){
		$this->Model_LoaiPhong->delete($MaLoaiPhong);
		$this->session->set_flashdata('success', 'Xóa loại phòng thành công!');
		return redirect(base_url('phong-hoc/'));
	}

}

/* End of file PhongHoc.php */
/* Location: ./application/controllers/PhongHoc.php */