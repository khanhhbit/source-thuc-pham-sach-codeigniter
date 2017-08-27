<?php
/**
* 
*/
class Gioithieu extends MY_Controller
{
	
	function __construct()
	{
	    parent::__construct();
	}
	function index()
	{  
		$this->load->model('news_model');
		$input = array();
		$input['limit'] = array(5,0);
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = "site/gioithieu/index";
		$this->load->view('site/layout',$this->data);
	}
	function cachmuahang(){
		$this->load->model('news_model');
		$input = array();
		$input['limit'] = array(5,0);
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = "site/gioithieu/cachmuahang";
		$this->load->view('site/layout',$this->data);
	}
	function thanhtoan(){
		$this->load->model('news_model');
		$input = array();
		$input['limit'] = array(5,0);
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = "site/gioithieu/thanhtoan";
		$this->load->view('site/layout',$this->data);
	}
	function map(){
		$this->load->model('news_model');
		$input = array();
		$input['limit'] = array(5,0);
		$list = $this->news_model->get_list($input);
		$this->data['list'] = $list;

		$this->data['temp'] = "site/gioithieu/map";
		$this->load->view('site/layout',$this->data);
	}
}