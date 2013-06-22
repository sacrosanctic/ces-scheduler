<?php
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="ces-scheduler"; // Database name

	if($_POST)
	{
		// Connect to server and select databse.
		$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
		mysql_select_db("$db_name")or die("cannot select DB");
		
		print_r($_POST);
		$sql = "SELECT * FROM tbl_student;";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
		}
		if(!mysql_query($sql))
		{
			die('Error: ' . mysql_error());
		}
		exit();
	}
?>
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
			<h1>submit form</h1>
			<div id="output1"></div>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Warning!</strong> Best check yo self, you're not looking too good.
			</div>
			<form id="myForm1" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
				<fieldset>
					<legend>Legend</legend>
					<label class="span2" for="FirstName">First Name</label>
					<input type="text" name="FirstName" /> 
					<input type="email" /> 
					<div class="form-actions">
					<button type="submit" class="btn" id="submitbutton">Save</button>
					</div>
				</fieldset>
			</form>
			<input type="text" class="span4" id="typeahead" />
		</div> <!-- /container -->
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script> 
			// prepare the form when the DOM is ready 
			$(document).ready(function() { 
				var options = { 
					target:        '#output1',   // target element(s) to be updated with server response 
					beforeSubmit:  showRequest,  // pre-submit callback 
					success:       showResponse  // post-submit callback 
			 
					// other available options: 
					//url:       url         // override for form's 'action' attribute 
					//type:      type        // 'get' or 'post', override for form's 'method' attribute 
					//dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
					//clearForm: true        // clear all form fields after successful submit 
					//resetForm: true        // reset the form after successful submit 
			 
					// $.ajax options can be used here too, for example: 
					//timeout:   3000 
				}; 
			 
				// bind form using 'ajaxForm' 
				//$('#myForm1').ajaxForm(options); 
			//	$('#myModal').modal();
				$('#typeahead').typeahead ({
					source: function (query, process) {
						return $.getJSON(
							'json.php',
							{ query: query},
							function (data) {
								return process(data);
							}
						);
					}
				});
			}); 
			function studentlist (var1,var2) {
				return "scott";
			}
			 
			// pre-submit callback 
			function showRequest(formData, jqForm, options) { 
				// formData is an array; here we use $.param to convert it to a string to display it 
				// but the form plugin does this for you automatically when it submits the data 
				var queryString = $.param(formData); 
			 
				// jqForm is a jQuery object encapsulating the form element.  To access the 
				// DOM element for the form do this: 
				// var formElement = jqForm[0]; 
			 
				//alert('About to submit: \n\n' + queryString); 
				$('#output1').html('About to submit: \n\n' + queryString); 
				
				$('#submitbutton').attr('disabled','disabled');
				// here we could return false to prevent the form from being submitted; 
				// returning anything other than false will allow the form submit to continue 
				return true; 
			} 
			 
			// post-submit callback 
			function showResponse(responseText, statusText, xhr, $form)  { 
				// for normal html responses, the first argument to the success callback 
				// is the XMLHttpRequest object's responseText property 
			 
				// if the ajaxForm method was passed an Options Object with the dataType 
				// property set to 'xml' then the first argument to the success callback 
				// is the XMLHttpRequest object's responseXML property 
			 
				// if the ajaxForm method was passed an Options Object with the dataType 
				// property set to 'json' then the first argument to the success callback 
				// is the json data object returned by the server 
			 
				//alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
				//    '\n\nThe output div should have already been updated with the responseText.'); 
					
				$('#submitbutton').removeAttr('disabled');

			}
		</script> 
	</body>
</html>
