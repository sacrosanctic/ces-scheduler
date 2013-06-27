<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Finance</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Le styles -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
		</style>
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
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
							<li><a href="index.php">Home</a></li>
							<li><a href="studentlist.php">Student</a></li>
							<li><a href="teacherlist.php">Teacher</a></li>
							<li><a href="checkin.php">Check-In</a></li>
							<li class="dropdown">
								<a href="#" id="dLabel" class="dropdown-toggle" role="button" data-toggle="dropdown">
									Report
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li role="presentation"><a href="finance.php">Finance Report</a></li>
									<li role="presentation"><a href="bookkeep.php">Monthly Bookkeeping</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav pull-right">
							<li><a href="#">Settings</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container"> <!-- container -->
			
			<h1>Finance</h1>
			<div class="btn-toolbar">
				<a href="#" class="btn">Filter</a>
				<a href="#" class="btn">Clear</a>
			</div>
			<div class="controls controls-row">
				<select multiple="multiple">
					<option>(All)</option>
					<option>Daphne</option>
					<option>Donald</option>
					<option>Mulie</option>
				</select>
				<select multiple="multiple">
					<option>(All)</option>
					<option>English</option>
					<option>Music</option>
					<option>Chinese</option>
					<option>Math</option>
				</select>
				<select multiple="multiple">
					<option>(All)</option>
					<option>Private Lesson</option>
					<option>Group Lesson</option>
				</select>
				<select multiple="multiple">
					<option>(All)</option>
					<option>Paid</option>
					<option>Unpaid</option>
				</select>
			</div>
			<div class="controls controls-row">
				<input type="date" value="2003-06-30">
				<input type="date" value="2003-06-30">
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Teacher</th>
						<th>Subject</th>
						<th>Class</th>
						<th>Hour</th>
						<th>Pay</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>June 30th, 2013</td>
						<td>Daphne</td>
						<td>Music</td>
						<td>Private Lesson</td>
						<td>1.5</td>
						<td>400NT</td>
					</tr>
				</tbody>
			</table>
	
		</div> <!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script></script>
	</body>
</html>
