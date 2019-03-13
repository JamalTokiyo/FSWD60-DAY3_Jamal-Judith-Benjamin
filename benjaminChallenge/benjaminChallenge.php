<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Benjamin Challenge</title>
</head>
<body>
	<?php
	class Books{
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
	$bookArray[0] = new Books("Harry Potter", "Fantasy", "J.K.R", "20.00");
	$bookArray[1] = new Books("Harry Pooootter", "Fantasy", "J.K.R", "10.00");
	$bookArray[2] = new Books("Harry Potter is strange", "Fantasy", "J.K.R", "19.00");
	$bookArray[3] = new Books("Harry stinks", "Fantasy", "J.K.R", "14.00");
	foreach($bookArray as $value){
		echo $value->createString(); 
		$totalbooks++;
	}
		echo "You have ". $totalbooks. " books in total";
	?>
</body>
</html>