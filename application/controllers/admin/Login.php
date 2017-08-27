<?php
/**
* 
*/
Class Login extends MY_Controller
{
	
	function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');
        if ($this->input->post()) 
        {
        	$this->form_validation->set_rules('login','login','callback_check_login');
        	if ($this->form_validation->run()) 
        	{
        		//sau khi đăng nhập thành công lấy ra thông tin ad theo id
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $password = md5($password);
                $this->load->model('admin_model');                
                $where = array('username' => $username , 'password' => $password);
                $admin = $this->admin_model->get_info_rule($where);
                //sau khi lấy ra thông tin admin đăng nhập gắn session cho nó
                // $this->session->set_userdata('lv', $admin->id);
                $this->session->set_userdata('login', $admin->id);
                redirect(base_url('admin/home'));
        	}
        }         
		$this->load->view('admin/login/index');
	}
	//kiểm tra username và password có chính xác không
	function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);
		$this->load->model('admin_model');
		$where = array('username'=>$username,'password'=>$password);
		if ($this->admin_model->check_exists($where)) 
		{
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Đăng nhập thất bại');
		return false;
	}
 }