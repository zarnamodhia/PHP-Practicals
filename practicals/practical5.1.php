<html>
<body>
<form method='Post'>
<table border='1'>
<th colspan='2'>String Length Calculator:</th>
<tr>
<td>Enter String:</td>
<td><input type='text' name='s'></td>
</tr>
<tr>
<td>Result:</td>
<td>
<?php
if(isset($_POST['s']))
{
$x = $_POST['s'];
$len=0;
$words=0;
$y=0;
while(isset($x[$y])){
if($x[$y]==' '){
$words++;
}
$len++;
$y++;
}
echo "String= ".$x."</br>Length = ".$len." </br>Words = ".$words+1;
}
?>
</td>
</tr>
</table>
</form>
</body>
</html>