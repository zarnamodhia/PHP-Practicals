<html>
<body>
<form method='POST'>
<table align='center' border='1'>
<th colspaN='2'><h1>Multiplication Table Printer</h1></th>
<tr>
<td>Enter value:</td>
<td><input type='number' name='y'></td>
</tr>
<tr>
<td>Result:</td>
<td>
<?php
if (isset($_POST['y'])){
echo "<table border='1'>";
for ($x=1;$x<=10;$x++)
{
echo '<tr><td>'.$_POST['y'].'X'.$x.'='.$_POST['y']*$x."</td></tr>";
}
echo '</table>';
}
?>
</td>
</tr>
</form>
</body>
</html>