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
          <li class="active"><a href="user_table.php">User Data</a></li>
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
        <th>Usr_id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Address</th>
        <th>Country</th>
        <th>Email</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>John</td>
        <td>Doe</td>
        <td>45</td>
        <td>WhereEver 45</td>
        <td>Austria</td>
        <td>Doe@anyemail.com</td>
        <td>1234567</td>
        <td><button class="btn btn-info" type="edit">edit</button></td>
        <td><button class="btn btn-danger" type="delete">delete</button></td>
        
      </tr>
      <tr>
        <td>02</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
        
      </tr>
      <tr>
        <td>03</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>july@example.com</td>
        <td>july@example.com</td>
        <td>july@example.com</td>
        <td>july@example.com</td>
        
      </tr>
    </tbody>
  </table> 
    
  




		
	</div>

</body>
</html>