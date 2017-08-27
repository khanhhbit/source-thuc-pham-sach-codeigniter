<?php
/**
* 
*/
Class Video extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	function index()
	{
		$total_rows = $this->video_model->get_total();
		$this->data['total_rows'] = $total_rows;

        //load ra thu vien phan trang
		$this->load->library('pagination');		
		$config= array();
		$config['total_rows'] = $total_rows;//tong tat ca cac website
        $config['base_url'] = admin_url('catalog/index');// link hien thi ra danh sach san pham
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
        $video_list = $this->video_model->get_list($input);
        $this->data['video_list'] = $video_list;

        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $this->data['temp'] = "admin/video/index";
        $this->load->view('admin/main',$this->data);
    }

    function add()
    {
    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if ($this->input->post()) 
    	{
    		$this->form_validation->set_rules('name','Tên','required');
    		if ($this->form_validation->run()) 
    		{
    			$name = $this->input->post('name');
    			$data = array(
    				'name'    => $name,
    				'intro'   => $this->input->post('intro'),
    				'link'    => $this->input->post('link'),
    				'created' => now(),
    				);
    			if ($this->video_model->create($data)) 
    			{
    				$this->session->set_flashdata('message','Thêm dữ liệu thành công');
    			}
    			else
    			{
    				$this->session->set_flashdata('message','Thêm dữ liệu thất bại');
    			}
    			redirect(admin_url('video'));
    		}
    	}

    	$this->data['temp'] = "admin/video/add";
    	$this->load->view('admin/main',$this->data);
    }
    function edit()
    {
    	$id = $this->uri->rsegment(3);
    	$id = intval($id);
    	$info = $this->video_model->get_info($id);
    	if (!$info) 
    	{
    		$this->session->set_flashdata('message','Không tồn tại video này');
    		redirect(admin_url('video'));
    	}
    	$this->data['info'] = $info;
    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if ($this->input->post()) 
    	{
    		$this->form_validation->set_rules('name','Tên','required');
    		if ($this->form_validation->run()) 
    		{
    			$name = $this->input->post('name');
    			$data = array(
    				'name'    => $name,
    				'intro'   => $this->input->post('intro'),
    				'link'    => $this->input->post('link'),
    				'created' => now(),
    				);
    			if ($this->video_model->update($id,$data)) 
    			{
    				$this->session->set_flashdata('message','Chỉnh sửa liệu thành công');
    			}
    			else
    			{
    				$this->session->set_flashdata('message','Chỉnh sửa liệu thất bại');
    			}
    			redirect(admin_url('video'));
    		}
    	}
    	$this->data['temp'] = "admin/video/edit";
    	$this->load->view('admin/main',$this->data);
    }
    function delete()
    {
    	$id = $this->uri->rsegment(3);
    	$info = $this->video_model->get_info($id);
    	if (!$info) 
    	{
    		$this->session->set_flashdata('message','không tồn tại id này');
    		redirect(admin_url('video'));
    	}
    	$this->video_model->delete($id);
    	$this->session->set_flashdata('message','Xóa dữ liệu thành công');
    	redirect(admin_url('video'));

    }
}