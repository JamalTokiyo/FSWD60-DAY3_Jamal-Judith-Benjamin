<?php

$mysqli = new mysqli('localhost:3306','root','', 'CodeReview09');
if(isset($_GET["msg"])){
  header('Location: car_park.php');
}
if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
if (isset($_GET["id"])){
  $id = $_GET["id"];

  $sql = "SELECT * FROM Car_park WHERE car_id = $id";

  $result = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_assoc($result);
}
  

if(isset($_POST['update'])){
  $id = $_POST['car_id'];
  $car_id = mysqli_real_escape_string($mysqli, $_POST['car_id']);
  $car_mod = mysqli_real_escape_string($mysqli, $_POST['car_mod']);
  $car_type = mysqli_real_escape_string($mysqli, $_POST['car_type']);
  $car_HP = mysqli_real_escape_string($mysqli, $_POST['car_HP']);
  $init_milage = mysqli_real_escape_string($mysqli, $_POST['init_milage']);
  $car_year = mysqli_real_escape_string($mysqli, $_POST['car_year']);
  $year_bought = mysqli_real_escape_string($mysqli, $_POST['year_bought']);
  $available = mysqli_real_escape_string($mysqli, $_POST['available']);
  $car_count = mysqli_real_escape_string($mysqli, $_POST['car_count']);

  $sql = "UPDATE `Car_park` SET `car_mod`='$car_mod',`car_type`='$car_type',`car_HP`=$car_HP,`init_milage`=$init_milage,`car_year`='$car_year',`year_bought`='$year_bought',`available`='$available',`car_count`=$car_count WHERE car_id = $id";
  if(mysqli_query($mysqli,$sql)){
    echo "<h1> Your record has been updated</h1>";
  }else {
    echo "<h1> Update error for : </h1>" . "<p>". $sql ."</p>" . mysqli_error($mysqli);
}
$_GET["id"]="updated";

mysqli_close($mysqli);

}











 ?>
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
          <li ><a href="create_car_park.php">Create Car</a></li>
          <li class="active"><a href="update_car_park.php">Update Car</a></li>
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
     <h3>Update The Car Data</h3>


      <form action="update_car_park.php?msg=updated" method="POST" accept-charset="utf-8">
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_id">Car id</label>
    <div class="col-md-4"> 
      <input type="hidden" class="form-control" id="car_id" name="car_id" placeholder="Enter 0 for auto increment" value="<?php echo $row['car_id'] ?>" required>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="model">Car Model</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="model" name="car_mod" placeholder="Model" required value="<?php echo $row['car_mod'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_typ">Car Type</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_typ" name="car_type" placeholder="Type" required value="<?php echo $row['car_type'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cr_HP">Car HP</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="horsepower" name="car_HP" placeholder="Horsepower" required value="<?php echo $row['car_HP'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="init_mil">Initial Milage</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="milage" name="init_milage" placeholder="Milage" required value="<?php echo $row['init_milage'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_year">Car Year</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_year"  name= "car_year" placeholder="car year" required value="<?php echo $row['car_year'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="year_bought">Year bought</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="year_bought" name="year_bought" placeholder="Year Bought" required value="<?php echo $row['year_bought'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="available">available</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="available" name="available" placeholder="yes/no" required value="<?php echo $row['available'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="car_count">Car Count</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car_count" name="car_count"placeholder="Car Count" required value="<?php echo $row['car_count'] ?>">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="update">Update</button>
    </div>
  </div>



</form>
    
  
  
 

  





		
	</div>

</body>
</html>