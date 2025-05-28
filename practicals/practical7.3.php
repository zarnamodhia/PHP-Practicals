<html>
<body>
<?php
	echo "SINGLE INHERITANCE</br>";
	class Fruit{
		function __construct(){
			echo "This is a fruit!</br>";
		}
	}
	class Banana extends Fruit{
		function __construct(){
			echo "HELLO IM A BANANA!</br>";
		}
	}
	$b1 = new Banana();
	$f1 = new Fruit();
?>
</body>
</html>