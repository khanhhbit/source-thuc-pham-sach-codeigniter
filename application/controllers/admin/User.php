<?php
/**
* 
*/
Class User extends MY_Controller
{
	function __construct()
	{ 
		parent::__construct();
		$this->load->model('user_model');
	}
	function index()
	{
		$input = array();
		$list = $this->user_model->get_list($input);
		$this->data['list'] = $list;
		$total = $this->user_model->get_total();
		$this->data['total'] = $total;

		// lấy nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = "admin/user/index";
		$this->load->view('admin/main', $this->data);
	}

	function check_email()
	{
		$email = $this->input->post('email');
		$where = array('email'=>$email);
		// kiểm tra email đã tồn tại chưa
		if ($this->user_model->check_exists($where)) 
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
			$this->form_validation->set_rules('email','Email đăng nhập','required|callback_check_email');
			$this->form_validation->set_rules('name','Tên','required');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches[password]');
			// nhập lại mật khẩu chính xác
			if ($this->form_validation->run()) 
			{
				// thêm vào csdl
				$email = $this->input->post('email');
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
					'email'    => $email,
					'images'   => $images,
					'name'     => $name,
					'phone'    => $this->input->post('phone'),
					'address'  => $this->input->post('address'),
					'password' => md5($password),
					'created'  => now(),
					);

				if ($this->user_model->create($data)) 
				{
					$this->session->set_flashdata('message','Thêm mới thành viên thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Thêm mới thành viên thất bại');
				}
				// chuyển về trang quản trị
				redirect(admin_url('user'));
			}
		}

		$this->data['temp'] = "admin/user/add";
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
		$info  = $this->user_model->get_info($id);
		if(!$info)
		{
			$this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
			redirect(admin_url('user'));
		}
		$this->data['info'] = $info;

		if($this->input->post())
		{
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
					'phone'    => $this->input->post('phone'),
					'address'  => $this->input->post('address'),
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

				if($this->user_model->update($id, $data))
				{
                    //tạo ra nội dung thông báo
					$this->session->set_flashdata('message', 'Cập nhật thành viên thành công');
				}else{
					$this->session->set_flashdata('message', 'Không cập nhật được thành viên');
				}
                //chuyen tới trang danh sách quản trị viên
				redirect(admin_url('user'));
			}
		}
		$this->data['temp'] = "admin/user/edit";
		$this->load->view('admin/main', $this->data);
	}
	function delete()
	{
		$id=$this->uri->rsegment(3);
		$this->del($id);
		$this->session->set_flashdata('message','Xóa dữ liệu thành công');
		redirect(admin_url('user'));
	}

	private function del($id)
	{
		$info = $this->user_model->get_info($id);
		if (!$info) 
		{
			$this->session->set_flashdata('message','Không tồn tại thành viên này');
			redirect(admin_url('user'));
		}
		$this->user_model->delete($id);
       // xóa ảnh sp
		$images = "./upload/avatar/".$info->images;
		if (file_exists($images)) 
		{
			unlink($images);
		}
	}
}