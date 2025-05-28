<html>
<body>
<form method='POST'>
<table border='1'>
<th colspan='2'><h1>Morse Code Encryptor:</h1></th>
<tr>
<td>Enter message to encode:</td>
<td>
<input type='text' name='msg'>
<?php if(isset($_POST['msg'])){
	echo '</br>'.$_POST['msg'];
}
?>
</td>
</tr>
<tr>
<td>Equivalent morse code : </td>
<td>
<?php 
$morseCode = array(
	' '=>"/",
	'A'=>"._",
	'B'=>"_...",
	'C'=>"_._.",
	'D'=>"_..",
	'E'=>".",
	'F'=>".._.",
	'G'=>"__.",
	'H'=>"....",
	'I'=>"..",
	'J'=>".___",
	'K'=>"_._",
	'L'=>"._..",
	'M'=>"__",
	'N'=>"_.",
	'O'=>"___",
	'P'=>".__.",
	'Q'=>"__._",
	'R'=>"._.",
	'S'=>"...",
	'T'=>"_",
	'U'=>".._",
	'V'=>"..._",
	'W'=>".__",
	'X'=>"_.._",
	'Y'=>"_.__",
	'Z'=>"__..",
	'1'=>".____",
	'2'=>"..___",
	'3'=>"...__",
	'4'=>"...._",
	'5'=>".....",
	'6'=>"_....",
	'7'=>"__...",
	'8'=>"___..",
	'9'=>"____.",
	'0'=>"_____",
	'.'=>"._._._",
	','=>"__..__",
	'?'=>"..__.."
);
if(isset($_POST['msg'])){
$m = strtoupper($_POST['msg']);
$x=0;
$code = "";
while(isset($m[$x])){
	$code.=" ".$morseCode["$m[$x]"];
	$x++;
}
}
echo $code;
?>
</td>
</tr>
</table>
</form>
</body>
</html>