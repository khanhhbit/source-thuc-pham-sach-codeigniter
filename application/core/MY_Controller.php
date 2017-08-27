<?php 
/**
* 
*/
class MY_Controller extends CI_Controller
{
	public $data = array();
	function __construct()
	{
		parent::__construct();
		$controller = $this->uri->segment(1);
		switch ($controller) 
		{
			case 'admin':
      {
                    $this->load->helper('language');
                    $this->lang->load('admin/common');
                    
                    //xu ly cac du lieu khi truy cap vao trang admin
                    $this->load->helper('admin');
                    $this->_check_login();
                    
                    //kiem tra xem thanh vien da dang nhap hay chua
                    $login = $this->session->userdata('login');
                    $this->data['login'] = $login;
                    //neu da dang nhap thi lay thong tin cua thanh vien
                    if($login)
                    {
                        $this->load->model('admin_model');
                        $admin_info = $this->admin_model->get_info($login);
                        $this->data['admin_info'] = $admin_info;
                    }
                    
                    break;
                }								
      default:
      {
        // xu ly trang ngoai
        // lấy ra danh sách danh mục sp
        $this->load->model('catalog_model');
        $input = array();
        $input['where'] = array('parent_id'=>0);
        $catalog_list=$this->catalog_model->get_list($input);
        foreach ($catalog_list as $row) {
          $input['where'] = array('parent_id'=>$row->id);
          $subs= $this->catalog_model->get_list($input);
          $row->subs = $subs;
        }
        $this->data['catalog_list'] = $catalog_list;
        

        // load ra thư viện cart
        $this->load->library('cart');
        $this->data['total'] = $this->cart->total();
        $this->data['total_items'] = $this->cart->total_items();
        //kiểm tra thành viên đã đăng nhập hay chưa
        $user_id_login = $this->session->userdata('user_id_login');
        $this->data['user_id_login'] = $user_id_login;
        //nếu đã đăng nhập thành công thì lấy thông tin của thành viên
        if ($user_id_login) 
        {
          $this->load->model('user_model');
          $user_info = $this->user_model->get_info($user_id_login);
          $this->data['user_info'] = $user_info;
        }
        
        $id = $this->uri->rsegment(3);
        $this->load->model('product_model');
        $product = $this->product_model->get_info($id);
        $this->data['product'] = $product;
      }				
    }
  }

    // kiểm tra trạng thái đăng nhập của admin
  private function _check_login()
 {
       $controller = $this->uri->rsegment('1');
       $controller = strtolower($controller);
       $login = $this->session->userdata('login');
       // nếu mà chưa đăng nhập , mà truy cấp 1 controller khác login 
      if(!$login && $controller!='login') 
       {
        redirect(admin_url('login'));
       }

      if($login && $controller=='login') 
       {
        redirect(admin_url('home'));
       }
  }
}
