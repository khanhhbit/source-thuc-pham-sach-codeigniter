<?php
/**
* 
*/
class Contact extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}
	function index(){
		//lay ra tong tong so luong san pham tren website
		$total_rows= $this->contact_model->get_total();
		$this->data['total_rows'] = $total_rows;
		//load ra thu vien phan trang
		$this->load->library('pagination');		
		$config= array();
		$config['total_rows'] = $total_rows;//tong tat ca cac website
        $config['base_url'] = admin_url('contact/index');// link hien thi ra danh sach san pham
        $config['per_page'] = 10;// so luong sp hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan thien thi ra so trang tren url
        $config['text_link'] = "Trang Kế Tiếp";
        $config['prev_link'] = "Trang Trước";

        // khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment= $this->uri->segment(4);
        $segment = intval($segment);

        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        // end phân trang
        $list = $this->contact_model->get_list($input);
        $this->data['list'] = $list;
        

        // lấy nội dung biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = "admin/contact/index";
		$this->load->view('admin/main', $this->data);
	}
	function delete(){
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		
		if ($this->contact_model->delete($id)) {
			$this->session->set_flashdata('message','Xóa thành công liên hệ này');
			redirect(admin_url('contact'));
		}
		else
		{
           $this->session->set_flashdata('message','Xóa thất bại liên hệ này');
			redirect(admin_url('contact'));
		}
	}
}