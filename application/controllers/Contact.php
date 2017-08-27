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
		$this->load->model('news_model');
		$input = array();
		$input['limit'] = array(5,0);
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;
		 //lấy nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->load->library('form_validation');
		$this->load->helper('form');
		// kiểm tra xem đã post dữ liệu chưa
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('title','Tiêu đề','required');
			$this->form_validation->set_rules('email','Email ','required');
			$this->form_validation->set_rules('name','Họ tên','required');
			$this->form_validation->set_rules('address','Địa chỉ','required');
			$this->form_validation->set_rules('phone','Điện thoại','required');

			

			// nhập lại mật khẩu chính xác
			if ($this->form_validation->run()) 
			{
				// thêm vào csdl
				$title      = $this->input->post('title');
				$email      = $this->input->post('email');
				$name       = $this->input->post('name');
				$address    = $this->input->post('address');
				$phone      = $this->input->post('phone');
				

				
				$data = array(
					'title'    => $title,
					'email'    => $email,
					'name'     => $name,
					'phone'    => $phone,
					'address'  => $address,
					'content'  => $this->input->post('content'),
					'created'  => now(),
					);

				if ($this->contact_model->create($data)) 
				{
					$this->session->set_flashdata('message','Bạn đã gửi liên hệ thành công');
				}
				else
				{
					$this->session->set_flashdata('message','gửi thất bại');
				}
				// chuyển về trang quản trị
				redirect(site_url('contact'));
			}
		}

		$this->data['temp'] = "site/contact/index";
		$this->load->view('site/layout',$this->data);
	}
}