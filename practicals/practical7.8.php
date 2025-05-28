<html><body><?php
echo "SIMPLE INTERFACE: </br>";
interface introduction{
	public function intro();
}
class shape implements introduction{
	public function intro(){
		echo "Hello, i am a shape";
	}
}
$s1 = new shape;
$s1->intro();
	
?></body></html>