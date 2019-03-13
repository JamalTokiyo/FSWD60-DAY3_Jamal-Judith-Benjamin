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
          <li class="active"><a href="index_judith.php">Home</a></li>
          <li><a href="car_park.php">Car Park</a></li>
          <li><a href="create_car_park.php">Create Car</a></li>
          <li><a href="update_car_park.php">Update Car</a></li>
          <li><a href="user_table.php">User Data</a></li>
          <li><a href="locations.php">Locations</a></li>
          <li><a href="invoices.php">Invoices</a></li>
          <li><a href="contracts.php">Contracts</a></li>
          <li><a href="inquiries.php">Inquiries</a></li>
          <li><a href="report.php">Reports</a></li>
          <li><a href="payments.php">Payments</a></li>
          <li><a href="about_us.php">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- user info form start  -->
  <div class="row">
    <h5>Please provide your personal details:</h5>
  <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstName">First Name:</label>
    <div class="col-md-4">
      <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastName">Last Name</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="age">Age</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="age" placeholder="Enter age">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Adress</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="address" placeholder="Enter address">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="country">Country</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="country" placeholder="Enter country">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="email">phone</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
    </div>
</div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <h5>How can we assist you?</h5>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Car_model">Car Model</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="car" placeholder="Enter your prefered car">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pick_up_date">Pick Up</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="pick_up_date" placeholder="when">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="drop_off_date">Drop Off</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="drop_date_date" placeholder="Date">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="start_loc">Start Location</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="start_loc" placeholder="Start Loc">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="drop_off_loc">Drop Off Location</label>
    <div class="col-md-4"> 
      <input type="text" class="form-control" id="drop_off_loc" placeholder="Start Loc">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
 </div>



		
	</div>

</body>
</html>