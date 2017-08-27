<?php
Class News extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}
	
	function index()
	{
        // load ra tổng số bài viết
		$total_rows = $this->news_model->get_total();
		$this->data['total_rows'] = $total_rows;

        //load ra thu vien phan trang
		$this->load->library('pagination');		
		$config= array();
		$config['total_rows'] = $total_rows;//tong tat ca cac website
        $config['base_url'] = admin_url('news/index');// link hien thi ra danh sach san pham
        $config['per_page'] = 5;// so luong sp hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan thien thi ra so trang tren url
        $config['text_link'] = "Trang Kế Tiếp";
        $config['prev_link'] = "Trang Trước";

        // khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment= $this->uri->segment(4);
        $segment = intval($segment);
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);

        // lấy danh sách bài viết
        $list = $this->news_model->get_list($input);
        $this->data['list'] = $list;

        // lấy nội dung biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;


        $this->data['temp'] = "admin/news/index";
        $this->load->view('admin/main', $this->data);
    }
    function check_title()
    {
    	$title = $this->input->post('title');
    	$where = array('title' =>$title);
        // kiểm tra name đã tồn tại chưa
    	if ($this->news_model->check_exists($where)) 
    	{
    		$this->form_validation->set_message(__FUNCTION__,'Tiêu đề bài viết đã tồn tại');
    		return false;
    	}
    	return true;
    }
    function add()
    {
    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if ($this->input->post()) 
    	{
    		$this->form_validation->set_rules('title','Tiêu đề','required|callback_check_title');
    		if ($this->form_validation->run()) 
    		{
    			$title = $this->input->post('title');
      	       // lấy file ảnh cần upload 
    			$this->load->library('upload_library');
    			$upload_path = './upload/news';
    			$upload_data = $this->upload_library->upload($upload_path,'image');
    			$image_link = '';
    			if (isset($upload_data['file_name'])) 
    			{
    				$image_link = $upload_data['file_name'];
    			}
      	        // dữ liệu cần lưu
    			$data = array(
    				'title'      => $this->input->post('title'),
    				'image_link' => $image_link,
    				'intro'      => $this->input->post('intro'),
    				'content'    => $this->input->post('content'),
    				'site_title' => $this->input->post('site_title'),
    				'meta_desc'  => $this->input->post('meta_desc'),
    				'created'    => now(),
    				);
    			if ($this->news_model->create($data)) 
    			{
    				$this->session->set_flashdata('message','Thêm dữ liệu thành công');
    			}
    			else
    			{
    				$this->session->set_flashdata('message','Thêm dữ liệu thất bại');
    			}
    			redirect(admin_url('news'));
    		}
    	}
    	$this->data['temp'] = "admin/news/add";
    	$this->load->view('admin/main', $this->data);
    }

    function edit()
    {
    	$id = $this->uri->rsegment('3');
    	$news = $this->news_model->get_info($id);
    	if (!$news) 
    	{
    		$this->session->set_flashdata('message','không tồn tại bài viểt này');
    		redirect(admin_url('news'));
    	}
    	$this->data['news'] = $news;
    	$this->load->library('form_validation');
    	$this->load->helper('form');
    	if ($this->input->post()) 
    	{
    		$this->form_validation->set_rules('title','Tiêu đề','required');
    		if ($this->form_validation->run()) 
    		{
    			$title = $this->input->post('title');
	      	    // lấy file ảnh cần upload 
    			$this->load->library('upload_library');
    			$upload_path = './upload/news';
    			$upload_data = $this->upload_library->upload($upload_path,'image');
    			$image_link = '';
    			if (isset($upload_data['file_name'])) 
    			{
    				$image_link = $upload_data['file_name'];
    			}
      	        // dữ liệu cần sửa
    			$data = array(
    				'title'      => $this->input->post('title'),
    				'intro'      => $this->input->post('intro'),
    				'content'    => $this->input->post('content'),
    				'site_title' => $this->input->post('site_title'),
    				'meta_desc'  => $this->input->post('meta_desc'),
    				'created'    => now(),
    				);
    			if ($image_link != '') 
    			{
    				$data['image_link'] = $image_link;
    			}
    			if ($this->news_model->update($news->id,$data)) 
    			{
                    // tao ra noi dung thong bao
    				$this->session->set_flashdata('message','Cập Nhập Thành Công');
    			}
    			else
    			{
    				$this->session->set_flashdata('message','Cập Nhập Thất Bại');
    			}
                // chuyen toi trang danh sach
    			redirect(admin_url('news'));
    		}
    	}
    	$this->data['temp'] = "admin/news/edit";
    	$this->load->view('admin/main', $this->data);
    }

    function delete()
    {
        $id=$this->uri->rsegment(3);
        $this->del($id);
        $this->session->set_flashdata('message','Xóa dữ liệu thành công');
        redirect(admin_url('news'));
    }

    private function del($id)
    {
       $info = $this->news_model->get_info($id);
       if (!$info) 
       {
        $this->session->set_flashdata('message','Không tồn tại sản phẩm này');
        redirect(admin_url('product'));
       }
       $this->news_model->delete($id);
       // xóa ảnh sp
       $image_link = "./upload/news/".$info->image_link;
       if (file_exists($image_link)) 
       {
         unlink($image_link);
       }

    }
}