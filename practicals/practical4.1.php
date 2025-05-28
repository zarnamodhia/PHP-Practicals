<html>
<head>
<title>Car Company Identifier</title>
</head>
<body>
<h1 align='center'><b><u>Car Company Identifier: </u></b></h1>
<form method="POST" align='center'>
</br>Select name of the car:
<select name='car'>
<option value='XUV300'>XUV300</option>
<option value='Bolero'>Bolero</option>
<option value='XUV700'>XUV700</option>
<option value='Safari'>Safari</option>
<option value='Nexon'>Nexon</option>
<option value='Tigor'>Tigor</option>
<option value='Tiago'>Tiago</option>
<option value='i20'>i20</option>
<option value='Verna'>Verna</option>
<option value='Venue'>Venue</option>
<option value='Creta'>Creta</option>
<option value='Swift'>Swift</option>
<option value='Alto'>Alto</option>
<option value='Baleno'>Baleno</option>
<option value='Brezza'>Brezza</option>
<input type='submit' value='submit'>
</select>
<table border='1' align='center'>
<tr>
<td>Company: </td>
<td>
<?php
if ($_POST['car']=='XUV300'||$_POST['car']=='XUV700'||$_POST['car']=='Bolero'){
echo 'Mahindra';
}
else if ($_POST['car']=='Safari'||$_POST['car']=='Nexon'||$_POST['car']=='Tiago'||$_POST['car']=='Tigor'){
echo 'Tata';
}
else if ($_POST['car']=='i20'||$_POST['car']=='Verna'||$_POST['car']=='Venue'||$_POST['car']=='Creta'){
echo 'Hyundai';
}
else{
echo 'Suzuki';
}
?>
</td>
</tr>
</form>
</body>
</html>