<?php
//	session_destroy();
	session_start();
	session_unset();
	session_destroy();
//	unset( $_SESSION['name']);
	?>
	You have logged out successfully.	<br />
    <a href="index.php"><input type="button" value="Proceed Forward" /></a>