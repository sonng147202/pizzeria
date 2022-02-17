<a href="?action=login">Login</a>
<a href="?action=register">Register</a>
<?php
    if (isset($_SESSION['user'])) {
?>
        <a href="?action=logout">Logout</a>
<?php
	    show_array($_SESSION['user']);
    }
?>
