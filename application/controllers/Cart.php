<?php 
/**
* 
*/
Class Cart extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	function add()
	{
		// lấy thông tin của sản phẩm
		$this->load->model('product_model');
		$id = $this->uri->rsegment(3);
		$product_cart = $this->product_model->get_info($id);
		if (!$product_cart) 
		{
			redirect();
		}
		// tổng số sản phẩm
		$qty = 1;
		$price = $product_cart->price;
		if($product_cart->discount >0)
		{
			$price = $product_cart->price-$product_cart->price/100*$product_cart->discount;
		}
        // thông tin thêm vào giỏ hàng
		$data = array();
		$data['id'] = $product_cart->id;
		$data['qty'] = $qty;
		$data['name'] = url_title($product_cart->name);
		$data['image_link'] = $product_cart->image_link;
		$data['price'] = $price;
		$this->cart->insert($data);
		redirect(base_url('cart'));
	}

	function index()
	{
		$carts = $this->cart->contents();

        // lấy tổng số sản phẩm trong giỏ hàng
		$total_items = $this->cart->total_items();
		$this->data['carts'] = $carts;
		$this->data['total_items'] = $total_items;
		$this->data['temp'] = "site/cart/index";
		$this->load->view('site/layout',$this->data);
	}

	function update()
	{
		$carts = $this->cart->contents();
		foreach ($carts as $key => $row) 
		{
			// tổng số lượng sản phẩm
			$total_qty = $this->input->post('qty_'.$row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
			$this->cart->update($data);
		}
		// chuyển về trang giỏ hàng
		redirect(base_url('cart'));
	}

	// xóa giỏ hàng
	function delete()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		if ($id>0) 
		{
			$carts = $this->cart->contents();
			foreach ($carts as $key => $row) 
			{
				if ($row['id'] == $id) 
				{
					// lấy tổng số lượng sản phẩm
					$data = array();
					$data['rowid'] = $key;
					$data['qty']   = 0;
					$this->cart->update($data);
				}
				
			}
		}
		else
		{
			// xóa toàn bộ giỏ hàng
			$this->cart->destroy();
		}
		redirect(base_url('cart'));
	}
}