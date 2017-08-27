<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/**
* 
*/
Class News extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index(){
		$total_row = $this->news_model->get_total();
		$this->data['total_row'] = $total_row;

        //load ra thu vien phan trang
		$this->load->library('pagination');		
		$config= array();
		$config['total_rows'] = $total_row;//tong tat ca cac website
        $config['base_url'] = base_url('news/index/');// link hien thi ra danh sach san pham
        $config['per_page'] = 4;// so luong sp hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan thien thi ra so trang tren url
        $config['text_link'] = "Trang Kế Tiếp";
        $config['prev_link'] = "Trang Trước";

        // khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment= $this->uri->segment(3);
        $segment = intval($segment);
        $input['limit'] = array($config['per_page'], $segment);

        $news_list = $this->news_model->get_list($input);
        $this->data['news_list'] = $news_list;

		// hiển thị ra view
        $this->data['temp'] = "site/news/list";
        $this->load->view('site/layout',$this->data);
    }

    public function chitietnews(){
    	$id = $this->uri->rsegment(3);
    	$id = intval($id);
    	$info = $this->news_model->get_info($id);
    	if (!$info) {
    		$this->session->set_flashdata('flash_message','Không tồn tại bài viết này');
    		redirect();
    	}
    	$this->data['info'] = $info;
    	
        $input = array();
        $input['limit'] = array(5,0);
        $list = $this->news_model->get_list($input);
        $this->data['list'] = $list;

        // cập nhập lượt xem cho bài viết
    	$data = array();
    	$data['count_view'] = $info->count_view + 1;
    	$this->news_model->update($id,$data);

	    // hiển thị ra view
    	$this->data['temp'] = "site/news/chitietnews";
    	$this->load->view('site/layout',$this->data);
    }

}