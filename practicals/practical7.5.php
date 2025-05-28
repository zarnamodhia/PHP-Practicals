<html><body><?php
echo "MULTILEVEL INHERITANCE:</br>";
class Student{
	private $roll;
	public function setRoll($r){
		$this->roll=$r;
	}
}
class Marks extends Student{
	public $marks;
	public function setMarks($m){
		$this->marks=$m;
	}
}
class Grade extends Marks{
	public function getGrade(){
	if($this->marks>80){
	   echo "Grade = A";
	}
	else{
		echo "Grade = F";
	}
	}
}
$s1 = new Grade;
$s1->setRoll(3);
$s1->setMarks(90);
$s1->getGrade();
?></body></html>
