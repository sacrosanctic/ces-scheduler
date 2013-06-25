<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Teacher List</title>
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
							<li><a href="#">Student</a></li>
							<li><a href="teacher.php">Teacher</a></li>
							<li><a href="#">Settings</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container"> <!-- container -->
			
			<h1>Teacher List</h1>
			<div class="row">
				<div class="span12">
					<form>
						<div class="btn-toolbar">
							<button type="submit" class="btn"><i class="icon-user"></i> <strong>New</strong></button>
						</div>
						<div class="well" style="width:60%;">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th style="width:36px;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Donald</td>
									<td>
										<a href="#"><i class="icon-pencil"></i><a/>
										<a href="#"><i class="icon-briefcase"></i><a/>
									</td>
								</tr>
								<tr>
									<td>Mulie</td>
									<td>
										<a href="#"><i class="icon-pencil"></i><a/>
										<a href="#"><i class="icon-briefcase"></i><a/>
									</td>
								</tr>
								<tr>
									<td>Daphne</td>
									<td>
										<a href="teacher.php"><i class="icon-pencil"></i><a/>
										<a href="#"><i class="icon-briefcase"></i><a/>
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</form>
				</div>
			</div>
			
		</div> <!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
					function addContact() {
				var newIn = '<tr><td><select class="width:140px;"><option></option><option>friend</option><option>mom</option><option>self</option><option>dad</option></select></td><td><select class="width:140px;"><option></option><option>cell phone</option><option>home phone</option><option>email</option><option>address</option></select></td><td><input type="text" value=""></td><td><a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a></td></tr>';
				$("#contact tbody").prepend(newIn);
			}
			function addFee() {
				var newIn = '<tr><td><select class="width:140px;"><option>private Lession</option><option>group lession</option><option>special</option></select></td><td><input type="text" value=""></td><td><a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a></td></tr>';
				$("#fee tbody").prepend(newIn);
			}
			function removeFormField(e) {
				$(e).parent().parent().remove();
			}

	</script>
	</body>
</html>
