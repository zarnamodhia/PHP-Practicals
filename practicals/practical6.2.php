<html>
<body>
<form method='POST'>
<table border='1'>
<th colspan='2'>String Formatting Functions</th>
<tr>
	<td>Enter String:</td>
	<td><input type='text' name='str'></td>
	<td>Enter string to replace: </td>
	<td><input type='text' name='rep'></td>
	<td>Enter replacer string: </td>
	<td><input type='text' name='replacer'></td>
</tr>
<tr>
	<td>Select any option:</td>
	<td>
	<select name='choice'>
	<option value='lower'>Lowercase Check </option>
	<option value='reverse'>Reverse String</option>
	<option value='whitespaceRemover'>Remove Whitespaces</option>
	<option value='replace'>Word Replacer</option>
	</select>
	</td>
</tr>
<tr>
	<td>Result:</td>
	<td>
		<?php 
			if(isset($_POST['choice'])){
			$str = $_POST['str'];
			echo "String : ".$str."</br>";
			$choice = $_POST['choice'];
			function lowercaseCheck($s){
			 $x=0;
			 while($x<strlen($s)){
				if((ord($s[$x])>=97 && ord($s[$x])<=122) ||$s[$x]==' '){
					if($x==strlen($s)-1){
						return 1;
					}
					$x++;
				}
				else{
					return 0;
				}
			  }
			}
			function stringReverse($s){
				$len=strlen($s);
				$revStr='';
				$i=0;
				while(isset($s[$i])){
					$revStr[$i]=$s[$len-$i-1];
					$i++;
				}
				return $revStr;
			}
			function whitespaceRemover($s){
				$woWS='';
				$x=0;
				for($i=0;isset($s[$i]);$i++){
					if($s[$i]==" "){
						continue;
					}
					else{
						$woWS[$x]=$s[$i];
						$x++;
					}
				}
				return $woWS;
}
			function wordReplacer($s){
			$rep=$_POST['rep'];
			$replacer=$_POST['replacer'];
				return str_replace($rep,$replacer,$s);
			}
			if($_POST['choice']=='lower'){
				if(lowercaseCheck($str)){
				   echo ("LOWERCASE");
				}
				else{
					echo ("Not LOWERCASE");
				}
			}
			else if($_POST['choice']=='reverse'){
				
				echo (stringReverse($str));
			}
			else if($_POST['choice']=='whitespaceRemover'){
				echo (whitespaceRemover($str));
			}	
			else{
				echo wordReplacer($str);
			}
			}			
		?>
	</td>
</tr>
<tr><td><input type='submit' value='submit'></td></tr> 
</table>
</body>
</html>