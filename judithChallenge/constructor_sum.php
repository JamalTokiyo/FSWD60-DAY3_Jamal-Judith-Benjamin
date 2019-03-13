<!DOCTYPE html>
<html>
<head>
	<title>OOP with sum</title>
</head>
<body>

	<?php 
	class children {
		public $child1;
		public $child2;
		public $child3;

		function __construct($child1, $child2, $child3)
		{
			$this->child1 = $child1;
			$this->child2 = $child2;
			$this->child3 = $child3;

		}
		public function countChildren(){
			$num= $this->child1 + $this->child2 + $this->child3;
			return $num;
		}
		public function nameChildren(){
			return "And their names are ". $this->child1. ",". $this->child2." and ". $this->child3."<br>"; 
		}
	}

	$mychildren = new children (1,1,1);
	$rtnVal = $mychildren->countChildren();
	print "You have $rtnVal children <br>";
	$names = new children ('Bert','Anna','Cobold');
	$rtnNam = $names->nameChildren();
	echo $rtnNam;

	class parents extends children {
		public $firstname;
		public $lastname;

	function __construct ($child1, $child2, $child3, $firstname, $lastname){

		$this->firstname = $firstname;
		$this->lastname = $lastname;
	}

	public function nameParent (){
		return "Your name is ". $this->firstname. " and your last name is ". $this->lastname;
	
	}
	}
	$par = new parents("Bert", "Anna", "Cobold","Ann", "Donalds");
	$rtnPar = $par->nameParent();
	echo $rtnPar;

	?>

</body>
</html>