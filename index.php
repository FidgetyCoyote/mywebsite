<!DOCTYPE html>
<html>
	<head>
		<title>Pratik Home</title>
		<link href="styles/main.css" rel="stylesheet" type="text/css"/>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" /> 
		<link rel="icon" href="/images/favicon.ico">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha3841q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	</head>

	<body>
		
		<header class="navbar">
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
				      <a class="navbar-brand" href="#">P S Patel</a>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
				        <li><a href="/pages/about.php">About</a></li>
				        <li><a href="/pages/contact.php">Contact</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>	
			
		</header>
		
		
		
		<div class="container">
			<div class="panel panel-default">
  				<div class="panel-heading">
   					<h3 class="panel-title">Home Page</h3>
  				</div>
  				<div class="panel-body text-danger">
  				What items do we need here?
  				</div>
			</div>
		</div>
		
		<?php 
			echo "<div class='container'>";
			echo "<h1><span class='label label-warning col-sm-12'>Home Page under Construction :(</span></h1>";
			echo "</div>";
		
		//<div class="container">
		//	<div class="row">
		//		<div class="darkBG col-sm-6 col-xs-12">
		//			<a href="#" class="btn btn-danger">Button</a>
		//		</div>
		//		<div class="darkerBG col-sm-3 col-xs-6">test2</div>
		//		<div class="darkestBG col-sm-3 col-xs-6">test3</div>
		//	</div>
		//</div>
		?>
		
		
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
</hthml>