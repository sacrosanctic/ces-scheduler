<?php
	$title = 'Student List';
	$content = '
			<h1>Student List</h1>
			<div class="row">
				<div class="span12">
					<form class="form-inline" action="student.php">
						<div class="input-append">
							<input type="text" id="typeahead" autocomplete="off" class="span3">
							<button type="submit" class="btn"><i class="icon-pencil"></i>Edit</button>
						</div>
						<a href="#" class="btn"><i class="icon-user"></i> <strong>New</strong></a>
					</form>
				</div>
			</div>
			';
	$footerjs = '
		$(document).ready(function() { 
			$("#typeahead").typeahead ({
				source: function (query, process) {
					return $.getJSON(
						"name.json",
						{ query: query},
						function (data) {
							return process(data);
						}
					);
				}
			});
		}); 
	';
?>