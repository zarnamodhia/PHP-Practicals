<html>
<body>
<?php
class c1{
public $am;
}
$x=8;
$ob1=new c1;
$ob1->amount=&$x;

$ob2 = clone $ob1;
echo"</br>OBJECT 1: ".$ob1->amount;
echo"</br>OBJECT 2: ".$ob2->amount;

$ob1->amount=10;
echo"</br>OBJECT 1: ".$ob1->amount;
echo"</br>OBJECT 2: ".$ob2->amount;
?>
</body>
</html>