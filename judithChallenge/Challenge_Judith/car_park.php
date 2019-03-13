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
          <li class="active"><a href="car_park.php">Car Park</a></li>
          <li><a href="create_car_park.php">Create Car</a></li>
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
 

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Car_id</th>
        <th>Car_Model</th>
        <th>Car Type</th>
        <th>Car HP</th>
        <th>Initial Milage</th>
        <th>Car Year</th>
        <th>Year Bought</th>
        <th>Available</th>
        <th>Car Count</th>
      </tr>
    </thead>
    <tbody>

    
  
  <?php 
  $servername="localhost:3306";
  $username="root";
  $password="";
  $dbname="CodeReview09";

  

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }

  // $sql1 = "INSERT INTO Car_park (car_id, car_mod, car_type, car_HP, init_milage, car_year, year_bought, available, car_count)
  // VALUES ('0', 'BMW', 'SUV',110,24000,2016,2017,'yes',5)";
  // if (mysqli_query($conn, $sql1)) {
  //    echo "New record created.\n";
  // } else {
  //    echo "Record creation error for: " . $sql1 . "\n" . mysqli_error($conn);
  // }
  

  $sql = "SELECT car_id, car_mod, car_type, car_HP, init_milage, car_year, year_bought, available, car_count FROM Car_park";
  $result = mysqli_query($conn, $sql);
  $rows = $result->fetch_all(MYSQLI_ASSOC);

  foreach ($rows as $val) {
    echo "<tr><td>".$val["car_id"] . "</td><td> ".$val["car_mod"] ."</td><td> ".$val["car_type"]."</td><td> ".$val["car_HP"]."</td><td> ".$val["init_milage"]."</td><td> ".$val["car_year"]."</td><td> ".$val["year_bought"]."</td><td> ".$val["available"]." </td><td>".$val["car_count"]."</td><td> <a href='update_car_park.php?id=".$val["car_id"]."' class='btn btn-success'>edit</a></td><td><a class='btn btn-danger' href='car_park.php?id=".$val["car_id"]."'>delete</a></td></tr>";
  }
  
  

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
      $sql = "DELETE FROM `Car_park` WHERE car_id = $id";
      mysqli_query($conn, $sql);
      echo "record deleted";
  }

  //mysqli_close($conn);
  ?>

 

  

</tbody>
</table>


		
	</div>

</body>
</html>