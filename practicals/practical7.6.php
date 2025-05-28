<html>
<body>
<?php
echo "Method Overriding: </br>";
	class Shape{
		public function message(){
			echo "This is a shape</br>";
		}
	}
	class Square extends Shape{
		public function message(){
			echo "This is a square</br>";
		}
	}
	$s1 = new Square;
	$s2 = new Shape;
	$s1->message();
	$s2->message();
?>
</body>
</html>