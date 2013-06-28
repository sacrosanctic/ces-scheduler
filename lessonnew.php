<?php
	include_once("lang/lang-en.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG'];?>">
	<head>
		<meta charset="utf-8">
		<title>New Lesson</title>
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
			
			<h1>New Lesson</h1>
			<form class="well">
				<div class="row">
					<div class="span12">
						<label>Date</label>
						<input type="date" value="2013-06-30">
						<input type="date" value="2013-06-30">
						<input type="time" class="span2" value="19:00:00">
						<input type="time" class="span2" value="20:00:00">
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<label class="checkbox inline">
							<input type="checkbox">S
						</label>
						<label class="checkbox inline">
							<input type="checkbox">M
						</label>
						<label class="checkbox inline">
							<input type="checkbox">T
						</label>
						<label class="checkbox inline">
							<input type="checkbox">W
						</label>
						<label class="checkbox inline">
							<input type="checkbox">T
						</label>
						<label class="checkbox inline">
							<input type="checkbox">F
						</label>
						<label class="checkbox inline">
							<input type="checkbox">S
						</label>
				</div>
				<div class="row">
					<div class="span3">
						<label>Student</label>
						<select multiple="multiple">
							<option>Bob</option>
							<option>Bob</option>
							<option>Bob</option>
							<option>Bob</option>
						</select>
					</div>
					<div class="span3">
						<label>Teacher</label>
						<select multiple="multiple">
							<option>Daphne</option>
							<option>Mulie</option>
							<option>Donald</option>
						</select>
					</div>
					<div class="span3">
						<label>Room</label>
						<select>
							<option>1A</option>
							<option>2B</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Subject</label>
						<select>
							<option>Music</option>
						</select>
					</div>
					<div class="span3">
						<label>Class</label>
						<select>
							<option>Private Lesson | 400NT</option>
							<option>Group Lesson | 1000NT</option>
							<option>special Lesson | 500NT</option>
						</select>
					</div>
					<div class="span3">
						<label>Custom Fee</label>
						<label class="checkbox inline">
							<input type="checkbox" name="fee" id="feecheckbox" style="margin-top:-4px;">
						</label>
						<input id="feeinput" type="text" class="span1" value="400NT" disabled="disabled">
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Status</label>
						<select>
							<option>Pending</option>
							<option>Complete</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="span12">
					<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</form>
			
		</div> <!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script></script>
	</body>
</html>
