<html>
<body>
<?php
	echo "ACCESSING PRIVATE ATTRIBUTES USING SET&GET</br>";
	class BankAccount{
		private $ano,$bname;
		public function setAcc($ano,$bname){
			$this->ano=$ano;
			$this->bname=$bname;
		}
		public function getAcc(){
			echo "Bank: ".$this->bname." Account No: ".$this->ano;
		}
	}
	$c1 = new BankAccount;
	$c1->setAcc(3,"UBI");
	$c1->getAcc();
?>
</body>
</html>