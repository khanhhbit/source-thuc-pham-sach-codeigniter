<?php
/**
* 
*/
Class Admin extends MY_Controller
{
	function __construct()
	{ 
		parent::__construct();
		$this->load->model('admin_model');
	}
	function index()
	{
		$input = array();
		$list = $this->admin_model->get_list($input);
		$this->data['list'] = $list;
		$total = $this->admin_model->get_total();
		$this->data['total'] = $total;

		// lấy nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = "admin/admin/index";
		$this->load->view('admin/main', $this->data);
	}

	function check_username()
	{
		$username = $this->input->post('username');
		$where = array('username'=>$username);
		// kiểm tra username đã tồn tại chưa
		if ($this->admin_model->check_exists($where)) 
		{
			$this->form_validation->set_message(__FUNCTION__,'Tài khoản đã tồn tại');
			return false;
		}
		return true;
	}
	function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		// kiểm tra xem đã post dữ liệu chưa
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('username','Tài khoản đăng nhập','required|min_length[6]|callback_check_username');
			$this->form_validation->set_rules('name','Tên','required');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches[password]');
			// nhập lại mật khẩu chính xác
			if ($this->form_validation->run()) 
			{
				// thêm vào csdl
				$username = $this->input->post('username');
				$name     = $this->input->post('name');
				$password = $this->input->post('password');
				// lay file anh minh hoa can upload len
				$this->load->library('upload_library');
				$upload_path = './upload/avatar';
				$upload_data = $this->upload_library->upload($upload_path,'image');

				$images = '';
				if (isset($upload_data['file_name'])) 
				{
					$images = $upload_data['file_name'];
				}
				$data = array(
					'username' => $username,
					'images'   =>$images,
					'name'     => $name,
					'password' => md5($password)
					);

				if ($this->admin_model->create($data)) 
				{
					$this->session->set_flashdata('message','Thêm mới dữ liệu thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Thêm mới dữ liệu thất bại');
				}
				// chuyển về trang quản trị
				redirect(admin_url('admin'));
			}
		}

		$this->data['temp'] = "admin/admin/add";
		$this->load->view('admin/main',$this->data);
	}


	function edit()
	{
	 //lay id cua quan tri vien can chinh sua
		$id = $this->uri->rsegment('3');
		$id = intval($id);

		$this->load->library('form_validation');
		$this->load->helper('form');

        //lay thong cua quan trị viên
		$info  = $this->admin_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
			redirect(admin_url('admin'));
		}
		$this->data['info'] = $info;

		if($this->input->post())
		{
			$this->form_validation->set_rules('username','Tài khoản đăng nhập','required|min_length[6]');
			$this->form_validation->set_rules('name','Tên','required');

			$password = $this->input->post('password');
			if($password)
			{
				$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
				$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
			}
			if($this->form_validation->run())
			{
                //them vao csdl
				$name     = $this->input->post('name');
				$username = $this->input->post('username');
                // lay file anh minh hoa can upload len
				$this->load->library('upload_library');
				$upload_path = './upload/avatar';
				$upload_data = $this->upload_library->upload($upload_path,'image');

				$images = '';
				if (isset($upload_data['file_name'])) 
				{
					$images = $upload_data['file_name'];
				}
				$data = array(
					'name'     => $name,
					'username' => $username,
					);

                //neu ma thay doi mat khau thi moi gan du lieu
				if($password)
				{
					$data['password'] = md5($password);
				}
				if ($images !='') 
				{
					$data['images'] = $images;
				}

				if($this->admin_model->update($id, $data))
				{
                    //tạo ra nội dung thông báo
					$this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
				}else{
					$this->session->set_flashdata('message', 'Không cập nhật được');
				}
                //chuyen tới trang danh sách quản trị viên
				redirect(admin_url('admin'));
			}
		}
		$this->data['temp'] = "admin/admin/edit";
		$this->load->view('admin/main', $this->data);
	}
	function delete()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$info = $this->admin_model->get_info($id);
		if (!$info) 
		{
			$this->session->set_flashdata('message','Không tồn tại quản trị viên này');
			redirect(admin_url('admin'));
		}
		$this->admin_model->delete($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('admin'));
	}
	function logout()
	{
		if ($this->session->userdata('login')) 
		{
			$this->session->unset_userdata('login');
		}
		redirect(admin_url('login'));
	}
}