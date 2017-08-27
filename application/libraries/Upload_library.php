<?php
Class Upload_library
{
	var $CI='';
	function __construct()
	{
		$this->CI = & get_instance();
	}
	// upload file
	function upload($upload_path='',$file_name='')
	{
    
        // thư mục chưa file
        $config['upload_path'] = $upload_path;
        //định dạng file đc phép tải
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        // dung lượng tối đa
        $config['max_size'] = '1200';
        // chiều rộng tối đa
        $config['max_width'] = '6153';
        // chiều rộng tối đa
        $config['max_height'] = '3460';
    
        $config = $this->config($upload_path);
        $this->CI->load->library('upload',$config);
        // thực hiện upload
        $data ='';
        if ($this->CI->upload->do_upload($file_name)) 
        {
        	$data = $this->CI->upload->data();
        }
        else
        {
        	$data = $this->CI->upload->display_errors();
        }
        return $data;
	}
    
    // upload nhiều file
    function upload_file($upload_path='',$file_name='')
    {
    	// lấy thông tin cấu hình upload
    	$config = $this->config($upload_path);
    	// lưu biến môi trường khi thực hiện upload
    	$file  = $_FILES['image_list'];
    	$count = count($file['name']);// lấy tổng số file đc upload
    	$image_list = array();// lưu các file ảnh đc upload thành công
    	for($i=0;$i<=$count-1;$i++)
    	{
    		$_FILES['userfile']['name']     = $file['name'][$i];// khai bao tên của file thứ i
    		$_FILES['userfile']['type']     = $file['type'][$i];// khai báo kiểu của file thứ i
    		$_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i];// khai báo đường dẫn tạm của file thứ i
    		$_FILES['userfile']['error']    = $file['error'][$i];// khai báo lỗi của  file thứ i
    		$_FILES['userfile']['size']     = $file['size'][$i];//khai báo kích cỡ của file thứ i
         // load thư viện upload và cấu hình
         $this->CI->load->library('upload',$config);
         // thực hiện upload từng file
         if ($this->CI->upload->do_upload()) 
         {
         	// nếu upload thành công thì lưu toàn bộ dữ liệu
         	$data = $this->CI->upload->data();
         	// in cấu trúc dữ liệu của các file
         	$images_list[] = $data['file_name'];
         }
    	}
       return $images_list;
    }

    // cấu hình upload file
	function config($upload_path='')
	{
		//khai báo biến cấu hình
		$config = array();
		// thư mục chưa file
		$config['upload_path'] = $upload_path;
		//định dạng file đc phép tải
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		// dung lượng tối đa
		$config['max_size'] = '2000';
		// chiều rộng tối đa
		$config['max_width'] = '6153';
		// chiều rộng tối đa
		$config['max_height'] = '3460';
		return $config;
	}
}