<?php 

	function construct()
	{
		load_model('index');
	}
	
	function indexAction()
	{
		$arr['arr_products'] = get_products();
		load_view('index', $arr);
	}

	function fetchAction()
	{
		$key_search = isset($_GET['key_s']) ? $_GET['key_s'] : null;
		$arr['arr_products'] = fetch_products($key_search);
		echo json_encode($arr);
	}
