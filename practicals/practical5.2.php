<html>
<body>
<form method='POST'>
<table border='1'>
<th colspan='2'>Indexed Array Sorter:</th>
<tr>
<td>Unsorted Array:</td>
<td>
<?php 
function getArray()
{
	$x = func_get_args();
	return $x;
}
$elements = getArray(8,4,6,5,3,2,7);
foreach($elements as $x){
echo $x." ";
}
?>
</td>
</tr>
<?php
if (isset($_POST['submit'])){
for($x=0;$x<count($elements);$x++){
	for($y=0;$y<count($elements)-1;$y++){
		if($elements[$y]>$elements[$y+1]){
			$temp = $elements[$y];
			$elements[$y]=$elements[$y+1];
			$elements[$y+1]=$temp;
		}
	}
}
}
?>
<tr><td><input type='submit' value='Sort' name='submit'></td></tr>
<tr>
<td>Sorted Array:</td>
<td><?php if(isset($_POST['submit'])){foreach($elements as $x){echo $x." ";}} ?></td>
</tr>
</table>
</form>
</body>
</html>