<?php
	session_start();
?>
<html>
<title>Session Example Page 2</title>
<body>
	<h1>Session Example Page 2</h1>
	<h2>Welcome to Page 2!</h2>
	<p>Username = <?php echo $_SESSION['username']??'GUEST'; ?></p>
	<p>Password = <?php echo $_SESSION['password']??'Not set'; ?> </p>
	<a href='z4.php'>LOG OUT</a>
</body>
</html>
	