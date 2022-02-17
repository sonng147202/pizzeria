<?php 

	function construct()
	{
		load_model('index');
	}
	
	function indexAction()
	{
		load_view('index');
	}

	function loginAction()
	{
		load_view('login');
	}

	function authCheckAction()
	{
		$txt_name = isset($_POST['txtName']) ? trim($_POST['txtName']) : null;
		$txt_pass = isset($_POST['txtPass']) ? md5($_POST['txtPass']) : null;

		$user = fetchUser($txt_name);

		$pass = is_array($user);
		if ($pass) { $pass = $user["user_password"] == $txt_pass; }
		if (!$pass) { exit("Invalid user/password"); }

		$_SESSION["user"] = $user;
		$_SESSION["user"]["permissions"] = [];
		unset($_SESSION["user"]["user_password"]);

		$perm = registerPermissions($user["role_id"]);

		foreach ($perm as $p) { $_SESSION["user"]["permissions"][] = $p['prem_id']; }

		header('Location: /');
	}

	function logoutAction()
	{
		unset($_SESSION["user"]);
		header('Location: /');
	}
?>