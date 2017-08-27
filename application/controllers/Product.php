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
	// hiển thị danh sách sp theo danh mục
	function catalog()
	{
		// lấy ra id của thể loại
        $id = intval($this->uri->rsegment(3));
        // lấy thông tin của thể loại
        $this->load->model('catalog_model');
        $catalog = $this->catalog_model->get_info($id);
        if (!$catalog) 
        {
        	redirect();
        }
        $this->data['catalog'] = $catalog;
        $input = array();
        // kiểm tra danh mục con hay danh mục cha
        if ($catalog->parent_id ==0) 
        {
        	$input_catalog = array();
        	$input_catalog['where'] = array('parent_id' =>$id);
        	$catalog_subs = $this->catalog_model->get_list($input_catalog);
        	if (!empty($catalog_subs)) // nếu danh mục hiện tại có danh mục con
        	{
        		$catalog_subs_id = array();
        		foreach ($catalog_subs as $sub) 
        		{
        			$catalog_subs_id[] = $sub->id;
        		}
        		// lấy tất cả sp thuộc danh mục con đó
        		$this->db->where_in('catalog_id', $catalog_subs_id);
        	}
        	else
        	{
        		$input['where'] = array('catalog_id' => $id);
        	}
        }
        else
        {
        	$input['where'] = array('catalog_id' =>$id);
        }

        // lấy ds sp thuộc danh mục đó
        //lay ra tong tong so luong san pham tren website
		$total_rows= $this->product_model->get_total($input);
		$this->data['total_rows'] = $total_rows;
		//load ra thu vien phan trang
		$this->load->library('pagination');		
		$config= array();
		$config['total_rows'] = $total_rows;//tong tat ca cac website
        $config['base_url'] = base_url('product/catalog/'.$id);// link hien thi ra danh sach san pham
        $config['per_page'] = 16;// so luong sp hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan thien thi ra so trang tren url
        $config['text_link'] = "Trang Kế Tiếp";
        $config['prev_link'] = "Trang Trước";

        // khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment= $this->uri->segment(4);
        $segment = intval($segment);
        $input['limit'] = array($config['per_page'], $segment);
       
         // lay danh sach sp
        if(isset($catalog_subs_id))
        {   
        $this->db->where_in('catalog_id', $catalog_subs_id);
        }
        $list = $this->product_model->get_list($input);
        $this->data['list']= $list;

		// hiển thị ra view
		
		$this->data['temp'] = "site/product/catalog";
        $this->load->view('site/layout',$this->data);
	}

    function chitietsp()
    {
        // lấy id sản phẩm
        $id = $this->uri->rsegment(3);
        $id = intval($id);
        // lấy thông tin sản phẩm
        $view_sp = $this->product_model->get_info($id);
        // kiểm tra nếu không có $view_sp thì chuyển về trang chi tiết sp
        if(!$view_sp)
        {
            redirect();
        }
        $this->data['view_sp'] = $view_sp;//truyền dữ liệu sang view
        
        // lấy ds ảnh kèm theo
        $image_list = @json_decode($view_sp->image_list);
        $this->data['image_list'] = $image_list;
        
        // lượt xem
        $data = array();
        $data['view'] = $view_sp->view +1;
        $this->product_model->update($id,$data);
        // lượt mua
        $data['buyed'] = $view_sp->buyed +1;
        $this->product_model->update($id,$data);

        //lay thong tin cua danh mục san pham
        $this->load->model('catalog_model');
        $catalog = $this->catalog_model->get_info($view_sp->catalog_id);
        $this->data['catalog'] = $catalog;
        // lấy list danh sách bài viết
        $this->load->model('news_model');
        $input = array();
        $input['limit'] = array(5,0);// lấy 5 bài viết
        $news_list = $this->news_model->get_list($input);
        $this->data['news_list'] = $news_list;
        
        // lấy ds sp cùng loại
        $catalog_sp = $view_sp->catalog_id;
        $input = array();
        $input['where'] = array('catalog_id'=>$catalog_sp);
        $input['limit'] = array(4,0);
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;

        $this->data['temp'] = "site/product/chitietsp";
        $this->load->view('site/layout',$this->data);
    }

    public function cataloglist(){
        $total_row = $this->product_model->get_total();
        $this->data['total_row'] = $total_row;

        //load ra thu vien phan trang
        $this->load->library('pagination');     
        $config= array();
        $config['total_rows'] = $total_row;//tong tat ca cac website
        $config['base_url'] = base_url('product/cataloglist/');// link hien thi ra danh sach san pham
        $config['per_page'] = 16;// so luong sp hien thi tren 1 trang
        $config['uri_segment'] = 3;//phan doan thien thi ra so trang tren url
        $config['text_link'] = "Trang Kế Tiếp";
        $config['prev_link'] = "Trang Trước";

        // khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment= $this->uri->segment(3);
        $segment = intval($segment);
        $input['limit'] = array($config['per_page'], $segment);

        $product_list = $this->product_model->get_list($input);
        $this->data['product_list'] = $product_list;

        // hiển thị ra view
        $this->data['temp'] = "site/product/cataloglist";
        $this->load->view('site/layout',$this->data);
    }

    // tìm kiếm sp theo tên
    function search()
    {   
         if ($this->uri->rsegment(3)==1) 
         {
            $key = $this->input->get('term');
         }
         else
         {
          $key = $this->input->get('key-search');
         }
         
         $this->data['key'] = trim($key);
         $input = array();
         $input['like'] = array('name',$key);
         $search_list = $this->product_model->get_list($input);
         $this->data['search_list'] = $search_list;
         if ($this->uri->rsegment(3)==1) 
         {
            // xử lý autocomltate
            $result = array();
            foreach($search_list as $row)
            {
                $item = array();
                $item['id']    = $row->id;
                $item['label'] = $row->name;
                $item['name']  = $row->name;
                $result[]      = $item;
            }
            // dữ liệu trả về dưới dạng json
            die(json_encode($result));
         }
         else
         {
            $this->data['temp'] = "site/product/search";
            $this->load->view('site/layout',$this->data);
         } 
    }

    // tìm kiếm theo giá
    function search_price()
    {
        $price_form = intval($this->input->get('price_form'));
        $price_to   = intval($this->input->get('price_to'));
        $this->data['price_form'] = $price_form;
        $this->data['price_to'] = $price_to;
        // lọc theo giá
        $input = array();
        $input['where'] = array('price >=' => $price_form,'price <=' =>$price_to);
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;
        // load view
        $this->data['temp'] = "site/product/search_price";
        $this->load->view('site/layout',$this->data);
    }
}