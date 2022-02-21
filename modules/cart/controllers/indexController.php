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
