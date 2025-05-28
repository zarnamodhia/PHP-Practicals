<html><body><?php
	echo "MULTIPLE INHERITANCE : </br>";
	interface Shape{
		public function getArea();
	}
	class Square implements Shape{
	public $side;
		function __construct($s){
			$this->side=$s;
		}
		public function getArea(){
			echo "Area = ".$this->side*$this->side;
		}
	}
	class Rectangle implements Shape{
	public $length,$width;
		function __construct($l,$w){
			$this->length=$l;
			$this->width=$w;
		}
		public function getArea(){
			echo " Area = ".$this->length*$this->width;
		}
	}
	$s1 = new Square(3);
	$s1->getArea();
	$r1 = new Rectangle(2,3);
	$r1->getArea();
?></body></html>