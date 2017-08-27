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
	function check_email()
	{
		$email = $this->input->post('email');
		$where = array('email'=>$email);
		// kiểm tra username đã tồn tại chưa
		if ($this->user_model->check_exists($where)) 
		{
			$this->form_validation->set_message(__FUNCTION__,'Email đã tồn tại');
			return false;
		}
		return true;
	}

	function register()
	{
		// nếu đăng nhập thì chuyển về trang thông tin thành viên
		if ($this->session->userdata('user_id_login')) 
		{
			redirect(site_url('user'));
		}
		// load thư viện form
		$this->load->library('form_validation');
		$this->load->helper('form');

        //nếu có dữ liệu post lên thì kiểm tra
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('name','Tên','required|min_length[8]');
			$this->form_validation->set_rules('email','Email đăng nhập','required|callback_check_email');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches[password]');
			$this->form_validation->set_rules('phone','Điện thoại','required|min_length[8]');
        	// nhập liệu chính xác
			if ($this->form_validation->run()) 
			{
        		// thêm vào csdl
				$password = $this->input->post('password');
				$password = md5($password);
				$data = array(
					'name'     => $this->input->post('name'),
					'password' => $password,
					'email'    =>$this->input->post('email'),
					'phone'    =>$this->input->post('phone'),
					'address'  =>$this->input->post('address'),
					'created'  => now(),
					);
				if ($this->user_model->create($data)) 
				{
					$this->session->set_flashdata('message','Đăng ký tài khoản thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Đăng ký tài khoản thất bại');
				}
				redirect(site_url('user'));
			}

		}

		// load view
		$this->data['temp'] = "site/user/register";
		$this->load->view('site/layout',$this->data);
	}


	function login()
	{
		// nếu đăng nhập thì chuyển về trang thông tin thành viên
		if ($this->session->userdata('user_id_login')) 
		{
			redirect(site_url('user'));
		}
		// load thư viện form
		$this->load->library('form_validation');
		$this->load->helper('form');

        //nếu có dữ liệu post lên thì kiểm tra
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('email','Email đăng nhập','required|valid_email');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			$this->form_validation->set_rules('login','Đăng nhập','callback_check_login');
        	// nhập liệu chính xác
			if ($this->form_validation->run()) 
			{
				// lấy thông tin thành viên
				$user = $this->_get_user_info();
				$this->session->set_userdata('user_id_login',$user->id);
				redirect(site_url('user'));
			}

		}

		// load view
		$this->data['temp'] = "site/user/login";
		$this->load->view('site/layout',$this->data);
	}

	//kiểm tra username và password có chính xác không
	function check_login()
	{
		$user = $this->_get_user_info();
		if ($user) 
		{
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Đăng nhập thất bại');
		return false;
	}

	private function _get_user_info()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);
		$where = array('email' => $email , 'password' => $password);
		$user = $this->user_model->get_info_rule($where);
		return $user;
	}
	function edit()
	{
		if(!$this->session->userdata('user_id_login'))
		{
			redirect(site_url('user/login'));
		}
        // lấy thông tin thành viên
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if (!$user_id) 
		{
			redirect();
		}
		$this->data['user'] = $user;


         	// load thư viện form
		$this->load->library('form_validation');
		$this->load->helper('form');

        //nếu có dữ liệu post lên thì kiểm tra
		if ($this->input->post()) 
		{  
			$password = $this->input->post('password');
			
			$this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
			if($password)
			{
				$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
				$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
			}
			
			$this->form_validation->set_rules('address','Địa chỉ','required');
			$this->form_validation->set_rules('phone','Điện thoại','required|min_length[8]');
        	// nhập liệu chính xác
			if ($this->form_validation->run()) 
			{
				// lay file anh minh hoa can upload len
				$this->load->library('upload_library');
				$upload_path = './upload/avatar';
				$upload_data = $this->upload_library->upload($upload_path,'image');

				$images = '';
				if (isset($upload_data['file_name'])) 
				{
					$images = $upload_data['file_name'];
				}
        		// thêm vào csdl
				$data = array(
					'name'     => $this->input->post('name'),
					'phone'    =>$this->input->post('phone'),
					'address'  =>$this->input->post('address'),
					);
				if($password)
				{
					$data['password'] = md5($password);
				}
				if ($images !='') 
				{
					$data['images'] = $images;
				}
				if ($this->user_model->update($user_id,$data)) 
				{
					$this->session->set_flashdata('message',' Sửa thông tin thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Sửa thông tin thất bại');
				}
				redirect(site_url('user'));
			}

		}

        // load view
		$this->data['temp'] = "site/user/edit";
		$this->load->view('site/layout',$this->data); 
		
	}

	function change_password()
	{
		if(!$this->session->userdata('user_id_login'))
		{
			redirect(site_url('user/login'));
		}
        // lấy thông tin thành viên
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if (!$user_id) 
		{
			redirect();
		}
		$this->data['user'] = $user;

         	// load thư viện form
		$this->load->library('form_validation');
		$this->load->helper('form');

        //nếu có dữ liệu post lên thì kiểm tra
		if ($this->input->post()) 
		{
			
			$password = $this->input->post('password');
			if($password)
			{
				$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
				$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
				$this->form_validation->set_rules('new_password', ' mật khẩu', 'required');
			}
        	// nhập liệu chính xác
			if ($this->form_validation->run()) 
			{
        		// thêm vào csdl
				$data = array();
				if($password='new_password')
				{
					$data['password'] = md5($new_password);
				}
				if ($this->user_model->update($user_id,$data)) 
				{
					$this->session->set_flashdata('message',' Sửa thông tin thành công');
				}
				else
				{
					$this->session->set_flashdata('message','Sửa thông tin thất bại');
				}
				redirect(site_url('user'));
			}

		}

		 // load view
		$this->data['temp'] = "site/user/change_password";
		$this->load->view('site/layout',$this->data);
	}

	function index()
	{
		if (!$this->session->userdata('user_id_login')) 
		{
			redirect();
		}
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if (!$user) 
		{
			redirect();
		}
		$this->data['user'] = $user;
    	// load view
		$this->data['temp'] = "site/user/index";
		$this->load->view('site/layout',$this->data); 
	}

    /*
     * Thuc hien dang xuat
     */
    function logout()
    {
    	if($this->session->userdata('user_id_login'))
    	{
    		$this->session->unset_userdata('user_id_login');
    	}
    	$this->session->set_flashdata('message', 'Đăng xuất thành công');
    	redirect();
    }

    
}