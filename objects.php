<!DOCTYPE html>
<html>
<head>
	<title>create classes</title>
</head>
<body>
 <?php 
 class books
{
		  public $ISBN;
		  public $name;
		  public $title;
		  public $Author;
		  public $costs;

  function __construct($ISBNb, $nameb, $titleb,$Authorb,$costs)
  {
	      $this->ISBN  = $ISBNb;
	      $this->name  = $nameb;
	      $this->title = $titleb;
	      $this->Author= $Authorb;
	      $this->costs = $costs;
  }
  public function archive()
  {
	      $wishbook = "ISBN:".$this->ISBN. "Name:". $this->name." "."Title:". $this->title." "."Author:". $this->Author." "."costs:"."<b>". $this->costs."</b>"."<br>";
	      return $wishbook;
  }
}
		  $i = 0;
			$bookArray[0] = new Books(2020, "c#", "mana","kaka","$20.00");
			$bookArray[1] = new Books(2021,"JAVA",  "maka","kaka","$10.00");
			$bookArray[2] = new Books(2022,"48 of law", "Fanatiker","kaka","$19.00");
			$bookArray[3] = new Books(2023,"leave me alone", "egal","bumo","$14.00");
			foreach($bookArray as $value){
				echo $value->archive(); 
				$i++;
			}
	echo "<h4>"."You have :" .$i ." books in total thank you for searching me!"."</h4";

  ?>
</body>

</html>