<html>
<head>
<title>Student Result Calculator</title>
<link rel='stylesheet' href='css.css'>
</head>
<body>
<h1 align='center'>STUDENT GRADE CALCULATOR</h1>
<form method='POST'>
</br>Enter marks for AOOP:
<input type='number' name='aoop'>
</br>Enter marks for IWD:
<input type='number' name='iwd'>
</br>Enter marks for ISE:
<input type='number' name='ise'>
</br>Enter marks for CN:
<input type='number' name='cn'>
<input type='submit' value='submit'>
<table border='1' align='center'>
<th colspan='2'>GTU RESULT SEM 4 Summer 2025</th>
<tr><td>AOOP: </td>
<td><?php
$marks = array(
'AOOP'=>$_POST['aoop'],
'IWD'=>$_POST['iwd'],
'ISE'=>$_POST['ise'],
'CN'=>$_POST['cn']
);
$grades = array();
foreach ($marks as $sub=>$m){
if ($m>=85&&$m<=100){
$grades[$sub]='AA';
}
else if ($m>=75&&$m<=84){
$grades[$sub]='AB';
}
else if($m>=65&&$m<=74){
$grades[$sub]='BB';
}
else if($m>=55&&$m<=64){
$grades[$sub]='BC';
}
else if($m>=45&&$m<=54){
$grades[$sub]='CC';
}
else if($m>=40&&$m<=44){
$grades[$sub]='CD';
}
else if($m>=35&&$m<=39){
$grades[$sub]='DD';
}
else{
$grades[$sub]='FF';
}
}
echo $grades['AOOP'];
?>
</td></tr>
<tr><td>IWD:</td>
<td><?php
echo $grades['IWD'];
?></td></tr>
<tr><td>ISE:</td>
<td><?php
echo $grades['ISE'];
?></td></tr>
<tr><td>CN:</td>
<td><?php
echo $grades['CN'];
?></td></tr></table>
</form>
</body>
</html>
