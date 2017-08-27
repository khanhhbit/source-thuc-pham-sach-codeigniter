<?php
/**
* 
*/
Class Home extends MY_Controller
{
    function index()
    {   $this->load->model('slide_model');
        $slide_list = $this->slide_model->get_list();
    	$this->data['slide_list'] = $slide_list;

        $this->load->model('news_model');
        $input = array();
        $input['limit'] = array(3,0);
        $news_list = $this->news_model->get_list($input);
        $this->data['news_list'] = $news_list;

        $this->load->model('product_model');
        $input = array();
        $input['limit'] = array(10,0);
        $product_news = $this->product_model->get_list($input);
        $this->data['product_news'] = $product_news;

        $input['where'] = array('catalog_id'=>7);
        $product_sp1 = $this->product_model->get_list($input);
        $this->data['product_sp1'] = $product_sp1;

         // mua nhiều
        $input['limit'] = array(5,0);
        $input['order'] = array('buyed','DESC');
        $product_buyed = $this->product_model->get_list($input);
        $this->data['product_buyed'] = $product_buyed;
        
        // xem nhiều
        $input['limit'] = array(5,0);
        $input['order'] = array('view','DESC');
        $product_view = $this->product_model->get_list($input);
        $this->data['product_view'] = $product_view;
         //lấy nội dung của biến message
         $message = $this->session->flashdata('message');
         $this->data['message'] = $message;
         
        $this->data['temp'] = "site/home/index";
        $this->load->view('site/layout',$this->data);
    }
}