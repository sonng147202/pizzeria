<?php 

	function construct()
	{
		load_model('index');
	}
	
	function indexAction()
	{
		load_view('index');
	}

	function Err404Action()
	{
		load_view('404');
	}

?>