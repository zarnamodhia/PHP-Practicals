<html>
<head>
<title>Mathematical Calculator</title>
<link rel='stylesheet' href='css.css'>
</head>
<body>
<header>
<h1 align='center'><b><u>Simple Mathematical Calculator</u></b></h1>
</header>
<div id='formArea' align='center'>
<form method='POST'>
<table border='1'>
<th colspan='2'>Enter Values and Choose Operation!</th>
<tr>
<td><label for='n1' required>Enter Number 1:</td>
<td><input type='number' name='n1'></td>
</tr>
<tr>
<td><label for='n2' required>Enter Number 2:</td>
<td><input type='number' name='n2'></td>
</tr>
<tr>
<td colspan='2' align='center'>
<input type='submit' value='+' name='operation'>
<input type='submit' value='-' name='operation'>
<input type='submit' value='X' name='operation'>
<input type='submit' value='/' name='operation'>
<input type='submit' value='%' name='operation'>
<input type='submit' value='^' name='operation'>
</td>

<tr>
<td align='center'>Result = </td>
<td align='center'>
<?php
if ($_POST['operation']=='+')
{
echo $_POST['n1']+$_POST['n2'];
}
else if ($_POST['operation']=='-')
{
echo $_POST['n1']-$_POST['n2'];
}
else if ($_POST['operation']=='X')
{
echo $_POST['n1']*$_POST['n2'];
}
else if ($_POST['operation']=='/')
{
echo $_POST['n1']/$_POST['n2'];
}
else if ($_POST['operation']=='%')
{
echo $_POST['n1']%$_POST['n2'];
}
else
{
echo $_POST['n1']**$_POST['n2'];
}
?>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>