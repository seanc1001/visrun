<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
      <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="centre.css.css" rel="stylesheet">
 	
<?php
	require('connect_db.php');
 
	$sql="INSERT INTO bookings(Student_name)
	VALUES
	('$_POST[Student_name]')";

	if (mysqli_query($dbc, $sql))
		{
		echo "1 record added";
		}
 
	mysql_close();

?>
    </head>
  <body>
      <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Homepage</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage a booking <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="createPlan.html">Create a new booking </a></li>
                <li><a href="#">Edit existing booking</a></li>
                <li><a href="#">Cancel booking</a></li>
                  </ul>
            <li><a href="#">Room information</a></li>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar-static-top/">Settings</a></li>
              <li><a href="../navbar-static-top/">Admin Settings</a></li>
            <li class="active"><a href="./">Log out<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="jumbotron">
        <h1>Welcome  </h1>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Create a booking &raquo;</a>
        </p>
      </div>
    
<div class="container">
  <h2>Booking Form</h2>
</div>
<hr> 
<hr>
			
<div class="container">
    <h2> Booking form</h2>
<form class="form-horizontal" role="form"> 
    <form action="demo.php" method="post">
    <div class="form-group">
            <label class="control-label col-sm-2 for="booking_time">Booking time</label>
                <label><input type="time" name="Booking_time">
                                                      </div>
    
        <div class="form-group">
            <label class="control-label col-sm-2 for="booking_date">Booking date</label>                                                  
                <input type="date" name="Booking_date" />
        </div>
    
        <div class="form-group">
            <label class="control-label col-sm-2 for="Student_ID">Student ID</label>
                <input type="text" name="Student_ID" />
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2 for="Student_name">Student Name</label>
                    <input type="text" name="Student_name" />
        </div>
            
        <div class="form-group">
            <label class="control-label col-sm-2 for="supervisor_ID">Supervisor ID</label>
                    <input type="text" name="Supervisor_ID" />
                                                           </div>
        <div class="form-group">
            <label class="control-label col-sm-2 for="booking_equipment">Equipment needed</label>
            <textarea class="form-control" rows="2" id="booking_equipment"></textarea>    
            </div>
        
        
        <input type="submit" value="submit" />
        <a class="btn btn-lg btn-primary" href="" role="button">Submit &raquo;</a>
        </form>
    </div>
    </form>
</div>

    
    
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>