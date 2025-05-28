<html>
<body>
<?php
echo "Abstract Class: </br>";
	abstract class Car{
		public $name;
		public function __construct($n){
			$this->name=$n;
		}
		abstract public function intro();
	}
	class Audi extends Car{
		public function intro(){
			echo "Choose German Quality! I'm a {$this->name}";
		}
	}
	$c1 = new Audi("Audi");
	$c1->intro();
?>
</body>
</html>