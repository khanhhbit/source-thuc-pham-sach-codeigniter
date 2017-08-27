<?php
/**
* 
*/
Class Slide extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	function index()
	{
		// lấy tổng số slider
		$total_row = $this->slide_model->get_total();
		$this->data['total_row'] = $total_row;

		// lấy danh sách slider
		$list = $this->slide_model->get_list();
		$this->data['list'] = $list;
        
        // lấy nội dung biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = "admin/slide/index";
		$this->load->view('admin/main',$this->data);
	}
	function add()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        if ($this->input->post()) {
        	$this->form_validation->set_rules('name','Tên','required');
        	if ($this->form_validation->run()) {
        		$name       = $this->input->post('name');
        		$sort_order = $this->input->post('sort_order');
        		// lấy file hình ảnh
        		$this->load->library('upload_library');
        		$upload_path = './upload/slide';
        		$upload_data = $this->upload_library->upload($upload_path,'image');
        		$image_link = '';
        		if (isset($upload_data['file_name'])) {
        			$image_link = $upload_data['file_name'];
                    
        			$data = array(
        				'name'       => $name,
        				'image_link' => $image_link,
        				'link'       => $this->input->post('link'),
        				'sort_order' => intval($sort_order),
        				);
                 if ($this->slide_model->create($data)) 
                 {
                 	$this->session->set_flashdata('message','Thêm mới  dữ liệu thành công');
                 }
                 else
                 {
                 	$this->session->set_flashdata('message','Thêm mới  dữ liệu thất bại');
                 }
                redirect(admin_url('slide'));
        		}
        	}
        }
		$this->data['temp'] = "admin/slide/add";
		$this->load->view('admin/main',$this->data);
	}

	function edit()
	{
		// lấy thông tin slider
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$info = $this->slide_model->get_info($id);
		if (!$info) 
		{
			$this->session->set_flashdata('message','Không tồn tại slider này');
			redirect(admin_url('slide'));
		}
		$this->data['info'] = $info;

		$this->load->library('form_validation');
		$this->load->helper('form');
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('name','Tên','required');
			if ($this->form_validation->run()) 
			{
				$name       = $this->input->post('name');
				$sort_order = $this->input->post('sort_order');
				// lấy file hình ảnh
				$this->load->library('upload_library');
				$upload_path = './upload/slide';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if (isset($upload_data['file_name'])) 
				{
					$image_link = $upload_data['file_name'];
				}
				$data = array(
        				'name'       => $name,
        				'link'       => $this->input->post('link'),
        				'sort_order' => intval($sort_order),
        				);
				if ($image_link !='') 
				{
					$data['image_link'] = $image_link;
				}
				if ($this->slide_model->update($info->id,$data)) 
				{
					$this->session->set_flashdata('message','Cập nhập dữ liệu thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Cập nhập dữ liệu thất bại');
				}
				redirect(admin_url('slide'));
			}
		}
		$this->data['temp'] = "admin/slide/edit";
		$this->load->view('admin/main',$this->data);
	}

	function delete()
	{
		$id = $this->uri->rsegment(3);
        $this->del($id);
        $this->session->set_flashdata('message','Xóa dữ liệu thành công');
        redirect(admin_url('slide'));
	}
	private function del($id)
	{
      $info = $this->slide_model->get_info($id);
      if (!$info) 
      {
      	$this->session->set_flashdata('message','không tồn tại slider này');
      	redirect(admin_url('slide'));
      }
      $this->slide_model->delete($id);
      $image_link = './upload/slide'.$info->image_link;
      if (file_exists($image_link)) 
      {
      	unlink($image_link);
      }
	}
}