<html>
<body>
<table border='1'>
<th colspan='2'><h1>3X3 Matrix Multiplication</h1></th>
<?php
function getMatrix(){
$m = func_get_args();
return $m;
}

function printMatrix($arr){
for($x=0;$x<9;$x++){
if($x%3==0){
echo "</br>";
}
echo $arr[$x]." ";
}
}

$m1 = getMatrix(1,2,3,1,1,2,3,2,0);
$m2 = getMatrix(0,1,1,2,4,2,0,0,1);
$m3 = array();
$k=0;
for($x=0;$x<9;$x+=3){
	for($y=0;$y<3;$y++){
	$m3[$k]=($m1[$x]*$m2[$y])+($m1[$x+1]*$m2[$y+3])+($m1[$x+2]*$m2[$y+6]);
	$k++;
	}
}
?>
<tr><td>M1 = </td><td><?php printMatrix($m1) ?></td></tr>
<tr><td>M2 = </td><td><?php printMatrix($m2) ?></td></tr>
<tr><td>M1XM2 = </td><td><?php printMatrix($m3) ?></td></tr>
</table>
</body>
</html>