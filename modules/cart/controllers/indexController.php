<?php 

	function construct()
	{
		load('lib', 'cart_handling');
		load_model('index');
	}
	
	function indexAction()
	{
		load_view('index');
	}

	function addCartAction()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;
		if ($id) {
			$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
			$info_prodc = get_prodc_id($id);
			add_cart($id, $quantity, $info_prodc);
		}
	}