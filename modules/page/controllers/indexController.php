<?php 

	function construct()
	{
		load_model('index');
	}
	
	function indexAction()
	{
		load_view('home');
	}

	function Err404Action()
	{
		load_view('404');
	}

?>