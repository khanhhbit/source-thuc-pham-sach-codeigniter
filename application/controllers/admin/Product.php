<?php
/**
* 
*/
Class Product extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}
	function check_name()
	{
		$name = $this->input->post('name');
		$where = array('name' =>$name);
        // kiểm tra name đã tồn tại chưa
		if ($this->product_model->check_exists($where)) 
		{
			$this->form_validation->set_message(__FUNCTION__,'Tên sản phẩm đã tồn tại');
			return false;
		}
		return true;
	}
	function index()
	{
		$total_rows = $this->product_model->get_total();
		$this->data['total_rows'] = $total_rows;
		// load ra thư viện phân trang
		$this->load->library('pagination');
		$config = array();
		$config['total_rows'] = $total_rows;
		$config['base_url'] = admin_url('product/index');
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
		// lấy danh sách sp
		$list = $this->product_model->get_list($input);
		$this->data['list']  =$list;
		// lấy nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = "admin/product/index";
		$this->load->view('admin/main', $this->data);
	}
	function add()
	{
		// lấy danh sách danh mục sp
		$this->load->model('catalog_model');
		$input = array();
		$input['where'] = array('parent_id'=>0);
		$catalogs = $this->catalog_model->get_list($input);
		foreach ($catalogs as $row) 
		{
			$input['where'] = array('parent_id'=> $row->id);
			$subs = $this->catalog_model->get_list($input);
			$row->subs = $subs;
		}
		$this->data['catalogs'] = $catalogs;
        
       

		$this->load->library('form_validation');
		$this->load->helper('form');
       
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('name','Tên','required|callback_check_name');
			$this->form_validation->set_rules('catalog','Thể Loại','required');
			$this->form_validation->set_rules('price','Giá','required');

			if ($this->form_validation->run()) 
			{
				$name       = $this->input->post('name');
				$catalog_id = $this->input->post('catalog');
				$price      = $this->input->post('price');
				$price      = str_replace(',', '', $price);
				$discount   = $this->input->post('discount');
				$discount   = str_replace(',', '', $discount);

			// lay file anh minh hoa can upload len
				$this->load->library('upload_library');
				$upload_path = './upload/product';
				$upload_data = $this->upload_library->upload($upload_path,'image');

				$image_link = '';
				if (isset($upload_data['file_name'])) 
				{
					$image_link = $upload_data['file_name'];
				}
                // upload cac anh kem theo
				$image_list = array();
				$image_list = $this->upload_library->upload_file($upload_path,'image_list');
				$image_list = json_encode($image_list);
			    // dữ liệu cần lưu
				$data        = array(
					'name'       =>$name,
					'catalog_id' => $catalog_id,
					'price'      => $price,
					'discount'   => $discount,
					'image_link' => $image_link,
					'image_list' => $image_list,
					'site_title' => $this->input->post('site_title'),
					'meta_desc'  => $this->input->post('meta_desc'),
					'video'      => $this->input->post('video'),
					'made_in'    => $this->input->post('made_in'),
					'weight'     => $this->input->post('weight'),
					'content'    => $this->input->post('content'),
					'created'    => now(),

					);
				if ($this->product_model->create($data)) 
				{
					$this->session->set_flashdata('message','Thêm dữ liệu thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Sửa dữ liệu thành công');
				}
				redirect(admin_url('product'));

			}
		}
		$this->data['temp'] = "admin/product/add";
		$this->load->view('admin/main',$this->data);
	}

	// sửa product
	function edit()
	{
		// lấy danh sách danh mục sp
		$this->load->model('catalog_model');
		$input = array();
		$input['where'] = array('parent_id' =>0);
		$catalogs = $this->catalog_model->get_list($input);
		foreach($catalogs as $row)
		{
			$input['where'] = array('parent_id'=>$row->id);
			$subs = $this->catalog_model->get_list($input);
			$row->subs = $subs;
		}
		$this->data['catalogs'] = $catalogs;


        $id = $this->uri->rsegment(3);
		$id = intval($id);
         // lấy thông tin sản phẩm
		$info = $this->product_model->get_info($id);
		if (!$info) 
		{
			$this->session->set_flashdata('message','Không tồn tại sản phẩm này');
			redirect(admin_url('product'));
		}
		$this->data['info'] = $info;


		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên','required|callback_check_name');
			$this->form_validation->set_rules('catalog','Thể Loại','required');
			$this->form_validation->set_rules('price','Giá','required');
			if($this->form_validation->run())
			{
				$name       = $this->input->post('name');
				$catalog_id = $this->input->post('catalog');
				$price      = $this->input->post('price');
				$price      = str_replace(',','', $price);
				$discount   = $this->input->post('discount');
				$discount   = str_replace(',','', $discount);
			
			//ấy file ảnh minh họa cần up lên
			$this->load->library('upload_library');
			$upload_path = "./upload/product";
			$upload_data = $this->upload_library->upload($upload_path,'image');
			$image_link = '';
			if(isset($upload_data['file_name']))
			{
				$image_link = $upload_data['file_name'];
			}
			// upload các ảnh kèm theo
			$image_list = array();
			$image_list = $this->upload_library->upload_file($upload_path,'image_list');
			$image_list_json = json_encode($image_list);
			// lưu  dũ liệu cần thêm
			$data = array(
				    'name'       =>$name,
				    'catalog_id' => $catalog_id,
					'price'      => $price,
					'discount'   => $discount,
					'site_title' => $this->input->post('site_title'),
					'meta_desc'  => $this->input->post('meta_desc'),
					'video'      => $this->input->post('video'),
					'made_in'    => $this->input->post('made_in'),
					'weight'     => $this->input->post('weight'),
					'content'    => $this->input->post('content'),
					'created'    => now(),
				);
			if ($image_link !='') 
			{
				$data['image_link'] = $image_link;
			}
			if (!empty($image_list)) 
			{
				$data['image_list'] = $image_list_json;
			}
			if($this->product_model->update($info->id,$data))
			{
				$this->session->set_flashdata('message','Cập nhập dữ liệu thành công');
			}
			else
			{
				$this->session->set_flashdata('message','Cập nhập  liệu thất bại');
			}
			redirect(admin_url('product'));
		    }
        }

		$this->data['temp'] = "admin/product/edit";
		$this->load->view('admin/main',$this->data);
	}

	function delete()
	{
		$id=$this->uri->rsegment(3);
		$this->del($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('product'));
	}

	private function del($id)
	{
       $info = $this->product_model->get_info($id);
       if (!$info) 
       {
       	$this->session->set_flashdata('message','Không tồn tại sản phẩm này');
       	redirect(admin_url('product'));
       }
       $this->product_model->delete($id);
       // xóa ảnh sp
       $image_link = "./upload/product/".$info->image_link;
       if (file_exists($image_link)) 
       {
       	 unlink($image_link);
       }
       // xóa ảnh kèm theo
       $image_list = json_decode($info->image_list);
       if (is_array($image_list)) 
       {
       	foreach($image_list as $img)
       	  {
       		$image_link = "./upload/product/".$img;
       		if (file_exists($image_link)) 
       		{
       			unlink($image_link);
       		}
       	  }
       }

	}
}