<?php 
/**
* 
*/
class User extends CI_Controller
{
	
	public function connector()
	{
		require_once"./public/ckfinder/core/connector/php/connector.php";
	}
	public function html()
	{
		$this->load->view('ckfinder/user');
	}
}