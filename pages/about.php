<?php
// Version 3 of the Northwind database product browser.
// This version loads the data from the database only once
// and uses JavaScript to control the browsing.
//

require_once('dbinit.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
		<link href="/styles/main.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="/images/favicon.ico">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		
	</head>
	
	<body>
	
		<header class="navbar-inverse">
			<div class="container">
				<nav role="navigation">
				<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="/">Pratik</a>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				      <li><a href="/">Home</a></li>
				        <li class="active"><a href="/pages/about.php">About<span class="sr-only">(current)</span></a></li>
				        <li><a href="/pages/contact.php">Contact</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>	
		
		
		</header>
		
		
		<div class="container">
			<div class="panel panel-default">
  				<div class="panel-heading">
   					<h3 class="panel-title">About Me</h3>
  				</div>
  				<div class="panel-body text-danger">
  				Hi my name is Pratik and this is my website
  				</div>
			</div>
		</div>

		
		<div class="container">
			<h1><span class="label label-warning col-sm-12">About Page under Construction :(</span></h1>
		</div>
		
		
		
		<footer class="container">
			<div >
				<h4>&copy2016 Pratik Patel</h4>
			</div>
		</footer>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/scripts/jquery.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		</body>
	
</html>