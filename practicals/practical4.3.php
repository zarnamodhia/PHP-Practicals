<html>
<body>
<form method='POST'>
<table align='center' border='1'>
<th colspan='2'><h1 align='center'>Fibonacci Series Printer</h1></th>
<tr>
<td>Enter n for printing series till nth term:</td>
<td><input type='number' name='n'></td>
</tr>
<tr>
<td>Result:</td>
<td>
<?php
$first=0;
$second=1;
if ($_POST['n']==0)
{
echo $first;
}
else if ($_POST['n']==1)
{
echo $first.' '.$second;
}
else
{
for($x = 1; $x<=$_POST['n']; $x++)
{
echo $first.' '.'</br>';
$temp = $first;
$first = $second;
$second = $temp+$first;
}
}
?>
</td>
</tr>
</table>
</form>
</body>
</html>