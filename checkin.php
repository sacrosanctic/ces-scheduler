<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CES Scheduler</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
		</style>
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="bootstrap/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">CES Scheduler</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<h1>Check-In</h1>
			<table class="table table-striped">
				<caption>Feburary 18th</caption>
				<thead>
					<tr>
						<th>Student</th>
						<th>Teacher</th>
						<th>Time</th>
						<th>Length</th>
						<th>Status</th>
						<th>Room</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Scott</td>
						<td>Daphne</td>
						<td>4:00pm</td>
						<td>2 hours</td>
						<td>pending</td>
						<td>2d</td>
						<td><a href="#"><i class="icon-pencil"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div> <!-- /container -->
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>
