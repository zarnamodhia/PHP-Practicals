<html>
<head>
<title>Net Salary Calculator</title>
<link rel='stylesheet' href='css.css'>
</head>
<body>
<header>
<h1 align='center'><b><u>Net Salary Calculator</u></b></h1>
</header>
<div id='formArea' align='center'>
<form method='POST'>
<table border='1'>
<th colspan='2'>Calculate Net Salary! </th>
<tr>
<td><label for='basicSalary' required>Enter Basic Salary:</td>
<td><input type='number' name='basicSalary'></td>
</tr>
<tr>
<td>Gross Salary: </td>
<td>
<?php
$DA = 0.5*$_POST['basicSalary'];
$HRA = 0.1*$_POST['basicSalary'];
$Medical = 0.04*$_POST['basicSalary'];
$Gross = $_POST['basicSalary']+$DA+$HRA+$Medical;
echo $Gross;
?>
</td>
</tr>
<tr>
<td>Deduction: </td>
<td>
<?php
$Insurance = 0.07*$Gross;
$PF = 0.05*$Gross;
$Deduction = $Insurance+$PF;
echo $Deduction;
?>
</td>
</tr>
<tr>
<td>Net Salary: </td>
<td>
<?php
echo $Gross-$Deduction;
?>
</td>
</tr>
</form>
</div>
</body>
</html>