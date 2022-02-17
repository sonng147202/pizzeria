<h1>Home đây</h1>
<?php
    if (isset($_SESSION['user'])) {
?>
        <a href="?mod=auth&action=logout">Logout</a>
<?php
	    show_array($_SESSION['user']);
    }
?>
