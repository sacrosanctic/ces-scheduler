<?php
	include_once("lang/lang-en.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG'];?>">
	<head>
		<meta charset="utf-8">
		<title>Teacher</title>
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
			
			<h1>Teacher <small><a href="teacheredit.php">Edit</a></small></h1>
			<div class="row">
				<form id="teacherform" action="" method="post" autocomplete="off"> 
					<fieldset>
						<div class="span12">
							<legend>Daphne</legend>
						</div>
						<div class="span6">
							<table class="table table-bordered">
								<caption>Contact Info</caption>
								<thead>
									<tr>
										<th>relationship</th>
										<th>method</th>
										<th>Value</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>self</td>
										<td>email</td>
										<td>Daphne@1234555.com.tw</td>
									</tr>
									<tr>
										<td>friend</td>
										<td>cell phone</td>
										<td>0936-111-111</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-bordered">
								<caption>Fees</caption>
								<thead>
									<tr>
										<th>Class</th>
										<th>Fee per hour</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Trumpet Class</td>
										<td>400NT</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="span6">
							<h5>Education</h6>
							<p>
								嘽 駍駔鳿 妎岓岕 疶砳, 蝺 箛箙舕 籿紁羑 韰頯餩 鰩鷎 圢帄氕 煘煓瑐 熩熝犚 躎轛 壿 藚藦藞 蜦賕踃 豅鑢鑗 垌壴 蒛 豥 湴涬 蛶觢豥 瀁瀎瀊 溹溦滜, 筡絼綒 鳻嶬幧 獫瘯皻 魦魵 滆 虰豖阹 忷扴汥 慛慖 滈, 巠帎 鳱 偢偣唲 秎穾籺 沎牣 胾臷菨 樛槷殦 姌弣抶 塝, 嘽 楋歅 莃荶衒 蛚袲褁 鈁陾靰
							</p>
							<h5>Work History</h6>
							<p>
								嘽 駍駔鳿 妎岓岕 疶砳, 蝺 箛箙舕 籿紁羑 韰頯餩 鰩鷎 圢帄氕 煘煓瑐 熩熝犚 躎轛 壿 藚藦藞 蜦賕踃 豅鑢鑗 垌壴 蒛 豥 湴涬 蛶觢豥 瀁瀎瀊 溹溦滜, 筡絼綒 鳻嶬幧 獫瘯皻 魦魵 滆 虰豖阹 忷扴汥 慛慖 滈, 巠帎 鳱 偢偣唲 秎穾籺 沎牣 胾臷菨 樛槷殦 姌弣抶 塝, 嘽 楋歅 莃荶衒 蛚袲褁 鈁陾靰
							</p>
						</div>
					</fieldset>
				</form>
			</div>
			
		</div> <!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script></script>
	</body>
</html>
