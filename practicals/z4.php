<?php
	session_start();
	session_destroy();
	header("Location: practical9.1.php");
	exit();
?>