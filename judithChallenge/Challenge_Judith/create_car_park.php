<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Karla" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style01.css">
	<title>Rental Car Agency</title>
</head>
<body>
	<div class="container">
		<header>
			<div class="row">
			<div class="col-lg-2">
				<img id ="logo" src="img/logo_car_blue.png">
			</div>
			<div class="col-lg-8 col-lg-offset-2 data" id="headingdata">
				<h1s>Welcome to  my Rental Company</h1>
			</div>
		</div>
		</header>

    <!-- nav start -->
		<div class="row">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html"><img src="img/logo_car_blue.png" width="70px" height="30px" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index_judith.php">Home</a></li>
          <li><a href="car_park.php">Car Park</a></li>
          <li class="active"><a href="create_car_park.php">Create Car</a></li>
          <li><a href="update_car_park.php">Update Car</a></li>
          <li><a href="user_table.php">User Data</a></li>
          <li><a href="locations.php">Locations</a></li>
          <li><a href="invoices.php">Invoices</a></li>
          <li><a href="contracts.php">Contracts</a></li>
          <li><a href="inquiries.php">Inquiries</a></li>
          <li><a href="report.php">Reports</a></li>
          <li><a href="payments.php">Payments</a></li>
          <li><a href="about_us">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Nav End -->

  <!-- user info form start  -->
  <div class="row">
    <h3>Create a New Car Record:</h3>


      <form action="create_car_park.php" method="POST" accept-charset="utf-8">
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_id">Car id</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_id" name="car_id" placeholder="Enter 0 for auto increment" required>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="model">Car Model</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="model" name="car_mod" placeholder="Model" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_typ">Car Type</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_typ" name="car_type" placeholder="Type" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cr_HP">Car HP</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="horsepower" name="car_HP" placeholder="Horsepower" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="init_mil">Initial Milage</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="milage" name="init_milage" placeholder="Milage" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_year">Car Year</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_year"  name= "car_year" placeholder="car year" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="year_bought">Year bought</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="year_bought" name="year_bought" placeholder="Year Bought" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="available">available</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="available" name="available" placeholder="yes/no" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_count">Car Count</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_count" name="car_count"placeholder="Car Count" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </div>
  </div>


<?php

$mysqli = new mysqli('localhost:3306','root','', 'CodeReview09');

if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

if(isset($_POST['submit'])){
$car_id = mysqli_real_escape_string($mysqli, $_POST['car_id']);
$car_mod = mysqli_real_escape_string($mysqli, $_POST['car_mod']);
$car_type = mysqli_real_escape_string($mysqli, $_POST['car_type']);
$car_HP = mysqli_real_escape_string($mysqli, $_POST['car_HP']);
$init_milage = mysqli_real_escape_string($mysqli, $_POST['init_milage']);
$car_year = mysqli_real_escape_string($mysqli, $_POST['car_year']);
$year_bought = mysqli_real_escape_string($mysqli, $_POST['year_bought']);
$available = mysqli_real_escape_string($mysqli, $_POST['available']);
$car_count = mysqli_real_escape_string($mysqli, $_POST['car_count']);

$sql = "INSERT INTO Car_park (car_id,car_mod, car_type,car_HP, init_milage, car_year, year_bought, available, car_count) VALUES ($car_id, '$car_mod', '$car_type', $car_HP, $init_milage, '$car_year', '$year_bought', '$available', $car_count)";

if(mysqli_query($mysqli, $sql)) {
  echo "<h1> New car created!</h1>";
}else{
  echo " <h1> Sorry, no record created for: </h1>" . "<p>" . $sql . "</p>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);

}





 ?>
</form>
    
  
  
 

  





		
	</div>

</body>
</html>