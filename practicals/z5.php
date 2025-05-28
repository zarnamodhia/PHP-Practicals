<html>
<body>
<h1>Cookie Retrieval Page</h1>
<?php 
if(isset($_COOKIE['Username'])&& isset($_COOKIE['Password'])){
	echo "Welcome ".$_COOKIE['Username']."! <br>";
	echo "Your password is ".$_COOKIE['Password']."! <br>";
}
else{
	echo "Cookie not set!";
}
?>
<a href="z6.php">Delete Cookie</a>
</body>
</html>
	