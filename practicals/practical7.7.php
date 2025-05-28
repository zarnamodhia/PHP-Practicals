<html><body><?php
echo "Method Overloading : </br>";
	class Addition{
		public function __call($name,$args){
			if($name=='add'){
				if(count($args)==0){
					echo "</br>Addition = 0";
		        }
				else if(count($args)==1){
					echo "</br>Addition = {$args[0]}";
		        }
				else{
					echo "</br>Addition = ".$args[0]+$args[1];
				}
			}
		}
	}
	$a = new Addition();
	$a->add();
	$a->add(3);
	$a->add(7,8);
?></body></html>