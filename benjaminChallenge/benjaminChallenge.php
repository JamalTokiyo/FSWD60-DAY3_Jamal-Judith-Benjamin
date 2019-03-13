<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Benjamin Challenge</title>
</head>
<body>
	<?php
	/*class Books{
		public $title;
		public $genre;
		public $author;
		public $price;

		function __construct($title, $genre, $author, $price){

			$this->title = $title;
			$this->genre = $genre;
			$this->author = $author;
			$this->price = $price;
		}
		public function createString(){
			$bookString = "The book \"". $this->title. "\" from ". $this->author. " is a ". $this->genre. " book and it costs ". $this->price. "€!<br>";
			return $bookString; 
		}
	}
	$totalbooks = 0;
	$bookArray = array();
	$bookArray[0] = new Books("Harry Potter", "Fantasy", "J.K.R", "20.00");
	$bookArray[1] = new Books("Harry Pooootter", "Fantasy", "J.K.R", "10.00");
	$bookArray[2] = new Books("Harry Potter is strange", "Fantasy", "J.K.R", "19.00");
	$bookArray[3] = new Books("Harry stinks", "Fantasy", "J.K.R", "14.00");
	foreach($bookArray as $value){
		echo $value->createString(); 
		$totalbooks++;
	}
		echo "You have ". $totalbooks. " books in total";*/

################################################################################################################

	/*class items{
		public $firstItem;
		public $secondItem;
		public $thirdItem;

		function __construct($item1, $item2, $item3){
			$this->firstItem = $item1;
			$this->secondItem = $item2;
			$this->thirdItem = $item3;
		}

		public function totalItems(){
			$result = $this->firstItem + $this->secondItem + $this->thirdItem;
			$count = "You bought the first item ". $this->firstItem. " times!<br>You bought the second item ". $this->secondItem. " times!<br>You bought the third item ". $this->thirdItem. " times!";
			return array($result, $count);
		}
	}

	$itemcount = new items(2, 5, 7);
	$output = $itemcount->totalItems()[0];
	$output2 = $itemcount->totalItems()[1];
	echo $output2. "<br>You bought ". $output. " items in total!"; */

	################################################################################################################

	/*class jobs{
		public $company;
	}

	class employee extends jobs{
		public $firstName;
		public $lastName;
		public $position;
		public $salary;

		function __construct($a, $b, $c, $d, $e){
			$this->company = $a;
			$this->firstName = $b;
			$this->lastName = $c;
			$this->position = $d;
			$this->salary = $e;
		}

		function showDetails(){
			$result = "Hello my name is ". $this->firstName. " ". $this->lastName. " and i work for \"". $this->company. "\" as a ". $this->position. ", i get ". $this->salary. " per month!";
			return $result;
		}
	}
	$worker = new employee("Pizza Parlor", "Peter", "Parker", "delivery guy", "1000€");
	$output = $worker->showDetails();
	echo $output; */

	#######################################################################################################################
	
	?>
</body>
</html>