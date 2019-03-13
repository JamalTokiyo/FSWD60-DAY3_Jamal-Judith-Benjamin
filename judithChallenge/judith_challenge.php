<!DOCTYPE html>
<html>
<head>
	<title>Judith Challenge</title>
</head>
<body>


	<?php 

	class Cars {
		public $carName;
		public $carType;
		public $carModel;
		public $carYear;

		function __contruct($name, $type, $model, $year)
		{
			$this->carName = $name;
			$this->carType = $type;
			$this->carModel = $model;
			$this->carYear = $year;
		}
		public function nameCar(){
			$car = "My car is a ". $this->carName. "and the type is". $this->carType. "and the model is ". $this->carModel. ". And I bought it in ". $this->carYear. "<br>";
			return $car;

		}
	}

	
	$arr[0]= new Cars('BMW', 'SUV', 'X3', '2018');
	$arr[1] = new Cars('Mercedes', 'compact', 'A-Class', '2015');
	foreach($arr as $value)
	{
		echo $value->nameCar();
	}



	 ?>

</body>
</html>