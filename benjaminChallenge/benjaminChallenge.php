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
	$bookArray[0] = new Books("Harry Potter", "Fantasy", "J.K.R", "15.00");
	$bookArray[1] = new Books("Harry Pooootter", "Fantasy", "J.K.R", "15.00");
	foreach($bookArray as $value){
		echo $value->createString(); 
	}
	?>
</body>
</html>