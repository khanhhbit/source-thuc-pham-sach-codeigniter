<?php
/**
* 
*/
Class Catalog extends MY_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('catalog_model');
	}
	function index()
	{
		 
		 //lay ra tong tong so luong san pham tren website
		$total_rows= $this->catalog_model->get_total();
		$this->data['total_rows'] = $total_rows;
		//load ra thu vien phan trang
		$this->load->library('pagination');		
		$config= array();
		$config['total_rows'] = $total_rows;//tong tat ca cac website
        $config['base_url'] = admin_url('catalog/index');// link hien thi ra danh sach san pham
        $config['per_page'] = 15;// so luong sp hien thi tren 1 trang
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
        $list = $this->catalog_model->get_list($input);
        $this->data['list'] = $list;
        

        // lấy nội dung biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = "admin/catalog/index";
		$this->load->view('admin/main', $this->data);
	}
	function check_name()
	{
		$name = $this->input->post('name');
        $where = array('name' =>$name);
        // kiểm tra name đã tồn tại chưa
        if ($this->catalog_model->check_exists($where)) 
        {
        	$this->form_validation->set_message(__FUNCTION__,'Tên danh mục đã tồn tại');
        	return false;
        }
        return true;
	}
     

	function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		// kiểm tra đã post dữ liệu chưa
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('name','Tên danh mục','required|callback_check_name');
			// nhập liệu chính xác
			if ($this->form_validation->run()) 
			{
			    // thêm vào csdl
			    $name       = $this->input->post('name');
			    $site_title = $this->input->post('site_title');
			    $meta_desc  = $this->input->post('meta_desc');
			    $parent_id  = $this->input->post('parent_id');
			    $sort_order = $this->input->post('sort_order');
			    $data = array(
                'name'       => $name,
                'site_title' => $site_title,
                'meta_desc'  => $meta_desc,
                'parent_id'  => $parent_id,
                'sort_order' => intval($sort_order)
			    );
			    if ($this->catalog_model->create($data)) 
			    {
			    	$this->session->set_flashdata('message','Thêm mới dữ liệu thành công');
			    }
			    else
			    {
			    	$this->session->set_flashdata('message','Thêm mới dữ liệu thất bại');
			    }
			    redirect(admin_url('catalog'));
			}
		}
		// lấy ra danh mục cha
		$input = array();
		$input['where'] = array('parent_id'=>0);
		$list = $this->catalog_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = "admin/catalog/add";
		$this->load->view('admin/main', $this->data);
	}
	function edit()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		$this->load->library('form_validation');
		$this->load->helper('form');
		// lấy thông tin thư mục
		$info = $this->catalog_model->get_info($id);
		if (!$info) 
		{
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect(admin_url('catalog'));
		}
		$this->data['info'] = $info;
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('name','Tên danh muc','required|callback_check_name');
			if ($this->form_validation->run()) 
			{
				// thêm vào csdl
				$name       = $this->input->post('name');
				$site_title = $this->input->post('site_title');
			    $meta_desc  = $this->input->post('meta_desc');
			    $parent_id  = $this->input->post('parent_id');
			    $sort_order = $this->input->post('sort_order');
			    $data = array(
			    	'name'       =>$name,
			    	'site_title' => $site_title,
                    'site_title' => $site_title,
	                'meta_desc'  => $meta_desc,
	                'parent_id'  => $parent_id,
	                'sort_order' => intval($sort_order)
			    	);
			    if ($this->catalog_model->update($id,$data)) 
			    {
			    	$this->session->set_flashdata('message','Cập nhập dữ liệu thành công');
			    }
			    else
			    {
			    	$this->session->set_flashdata('message','Cập nhập dữ liệu thất bại');
			    }
			    redirect(admin_url('catalog'));
			}
		}
		// lấy ra danh mục cha
		$data = array();
		$input['where'] = array('parent_id'=>0);
		$list=$this->catalog_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = "admin/catalog/edit";
		$this->load->view('admin/main',$this->data);
	}
	function delete()
	{
		$id=$this->uri->rsegment(3);
		$id=intval($id);
		$info = $this->catalog_model->get_info($id);
		if (!$info) 
		{
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect(admin_url('catalog'));
		}
		$this->catalog_model->delete($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('catalog'));

	}
}