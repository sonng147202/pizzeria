<?php
    get_header('auth');
?>
	<form action="?action=authCheck" method="post">
		<input type="text" name="txtName">
		<input type="password" name="txtPass">
		<button type="submit">Login</button>
	</form>
<?php
    get_footer('auth');
?>