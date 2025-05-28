<html>
<body>
<form method="POST">
Enter Employee Name:<br>
<input type='text' name='ename'><br>
Enter Employee Email ID:<br>
<input type='text' name='eid'><br>
Enter Employee Salary:<br>
<input type='number' name='esal'><br>
Enter Employee Department:<br>
<input type='text' name='edept'><br>
Enter Employee Phone Number:<br>
<input type='number' name='ephone'><br>
<input type='submit' name='submit'>
</form>
<?php 
if(isset($_POST['submit'])){
$name=$_POST['ename'];
$email=$_POST['eid'];
$salary=$_POST['esal'];
$dept=$_POST['edept'];
$phone=$_POST['ephone'];
$errors=[];
if(!preg_match("/^[a-zA-Z]*$/",$name)){
	$errors[]="Invalid name format";
}
if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email)){
	$errors[]="Invalid email format";
}
if(!preg_match("/[0-9]*$/",$salary)){
	$errors[]="Invalid salary";
}
if(!preg_match("/^[a-zA-Z]*$/",$dept)){
	$errors[]="Invalid department Name";
}
if(!preg_match("/^[0-9]{10}$/",$phone)){
	$errors[]="Invalid phone format";
}
if(count($errors)==0){
echo "<table border='1'>
<th colspan='2'>Employee Details</th>
<tr>
<td>Employee Name:</td>
<td>";
echo $name;
echo"</td></tr>
<tr>
<td>Employee Email ID:</td>
<td>";
echo $email;
echo"</td></tr>
<tr>
<td>Employee Salary:</td>
<td>";
echo $salary;
echo"</td></tr>
<tr>
<td>Employee Department:</td>
<td>";
echo $salary;
echo"</td></tr>
<tr>
<td>Employee Phone Number:</td>
<td>";
echo $phone;
echo"</td></tr></table>";
}
else{
	foreach($errors as $e){
		echo $e."<br>";
	}
}
}
?>
</body>
</html>