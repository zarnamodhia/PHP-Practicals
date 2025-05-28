<html>
<body>
<form method='POST'>
<table border='1'>
<th colspan='2'>Smallest Number of notes calculator</th>
<tr>
<td>Enter amount:</td>
<td><input type='number' name='am'><?php if(isset($_POST['am'])){echo "</br>".$_POST['am'];}?></td>
</tr>
<tr>
<td>Notes:</td>
<td>
<?php 
if(isset($_POST['am'])){
	$am = $_POST['am'];
	
	function minNotes($am){
		$denominations = [100,50,20,10,5,2,1];
		$notes = [];
		foreach($denominations as $note){
			if($am>=$note){
			$count=intdiv($am,$note);
			$am%=$note;
			$notes[$note]=$count;
			}
			else{
			$notes[$note]=0;
			}
		}
		foreach($notes as $note => $count){
			echo "</br>".$note."=>".$count;
		}
	}
	minNotes($am);
}
?>
</td>
</tr>
</table>
</form>
</body>
</html>