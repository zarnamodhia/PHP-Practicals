<html>
<body>
<?php
echo "CONSTRUCTOR & DESTRUCTOR</br>";

class Student{
	public $roll,$name;
  function __construct($c,$x){
		$this->roll=$c;
		$this->name=$x;
  }
 public function getStudent(){
		echo "Roll=".$this->roll." Name=".$this->name;
  }
  function __destruct(){
		echo "Student deleted!";
  }
}
$s1 = new Student(1,"Zarna");
$s1->getStudent();

echo "<br>Public Access Modifier:</BR>";
class Rectangle{
	public $length,$breadth;
	public function getArea(){
		echo "Area = ".$this->length*$this->breadth;
	}
	function __construct($l,$w){
		$this->length=$l;
		$this->breadth=$w;
	}
}
$r1 = new Rectangle(2,3);
echo $r1->length;
$r1->getArea();
?>
</body>
</html>