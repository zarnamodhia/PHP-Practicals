<html>
<body>
<form method="POST">
Enter employee name:<br>
<input type='text' name='name'><br>
Enter employee email:<br>
<input type='text' name='email'><br>
Enter employee phone: <br>
<input type='number' name='phone'><br>
Enter employee department:<br>
<input type='text' name='dept'><br>
Enter employee role:<br>
<input type='text' name='role'><br>
<input type='submit' name='submit'>
</form>
<?php
if(isset($_POST['submit'])){
	$server="localhost";
	$user="root";
	$pass="sgh2025";
	$db="Employee";
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dept=$_POST['dept'];
	$role=$_POST['role'];
	$conn = mysqli_connect($server,$user,$pass,$db);
	if($conn){
	echo "Connection established successfully!<br>";
	$sql = "INSERT INTO EMPLOYEE VALUES ('$name','$email','$phone','$dept','$role')";
	
	$result = mysqli_query($conn, $sql);
	echo "Data inserted successfully!<br>";
	echo $result;
	}else{
	echo "Error in establishing connection";
	}
}
?>
</BODY>
</html>