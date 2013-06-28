<?php
	include_once("lang/lang-en.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG'];?>">
	<head>
		<meta charset="utf-8">
		<title>{{TITLE}}</title>
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
			{{CONTENT}}
		</div> <!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>{{FOOTERJS}}</script>
	</body>
</html>
