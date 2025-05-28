<html>
<body>
<form method="POST">
	<table>
	<th colspan='2'>Mathematical Functions</th>
	<tr>
		<td>
		<select name='choice'>
		<option value='rand'>Random Number Generator</option>
		<option value='numSys'>Convert to Decimal, Binary, Hex</option>
		<option value='angle'>Sin, Tan, Cos of Angles</option>
		</select>
		</td>
	</tr>
	<tr>
	<td><input type='submit' name='submit1'></td>
	</tr>
	<tr>
	<td>
	<?php 
	
		if(isset($_POST['submit1'])){
			if(isset($_POST['choice'])){
				$choice=$_POST['choice'];
				if($choice=='rand'){
					echo "<form>
					<input type='hidden' name='choice' value='rand'/>
					Enter Upper range:
					<input type='number' name='ur' required>
					Enter Lowner range:
					<input type='number' name='lr' required>
					<input type='submit' name='btnCalc' value='Calculate'>
					</form>";	
				}
				else if($choice=='numSys'){
					echo "<form>
					<input type='hidden' name='choice' value='numSys'/>
					<input type='number' name='deci'>
					<input type='submit' name='btnCalc' value='Calculate'>
					</form>";	
				}
				else{
				    echo "<form>
					<input type='hidden' name='choice' value='angle'/>
					Enter degree:
					<input type='number' name='deg' required/>
					<input type='submit' name='btnCalc' value='Calculate'>
					</form>";
				
				}
			}
		}
	?>
	</td>
	<td>
	Result:
	<?php 
		if(isset($_POST['btnCalc'])){
		    if($_POST['choice']=='rand'){
				echo rand($_POST['lr'],$_POST['ur']);
			}
			else if($_POST['choice']=='numSys'){
				echo "Binary: ".decbin($_POST['deci'])." Hexadecimal: ".dechex($_POST['deci'])." Octal: ".decoct($_POST['deci']);
			}
			else{
				$rad=deg2rad($_POST['deg']);
				echo "Sin : ".sin($rad)." Cos : ".cos($rad)." Tan : ".tan($rad);
			}
		}
	?>
	</table>
</form>
</body>
</html>