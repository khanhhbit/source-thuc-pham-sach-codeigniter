<?php

class Order extends MY_Controller {
	
	/**
	 * Ham khoi dong
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
	}
	function index()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);

        $total_rows = $this->order_model->get_total();
		$this->data['total_rows'] = $total_rows;
		// load ra thư viện phân trang
		$this->load->library('pagination');
		$config = array();
		$config['total_rows'] = $total_rows;
		$config['base_url'] = admin_url('order/index');
		$config['per_page'] = 4;
		$config['url_segment'] = 4;
		$config['next_link'] = "Trang Kế Tiếp";
		$config['prev_link'] = "Trang Trước";
		// khởi tạo cấu hình phân trang
		$this->pagination->initialize($config);
		$segment=$this->uri->segment(4);
		$segment = intval($segment);
		$input = array();
		$input['limit'] = array($config['per_page'],$segment);
		// lấy nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

        $order_info = $this->order_model->get_list($id);
        $this->data['order_info'] = $order_info;
       
        
		$this->data['temp'] = "admin/order/index";
		$this->load->view('admin/main',$this->data);
	}

	 /*
     * Xoa du lieu
     */
    function delete()
    {
        $id = $this->uri->rsegment(3);
        $order = $this->order_model->get_info($id);
        //thuc hien xoa san pham
        $this->order_model->delete($id);
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'xóa dữ liệu thành công');
        redirect(admin_url('order'));
    }
    
}