<?php
	$title = 'Teacher';
	$heading = 'Teacher';
	$content = '
			<div class="row show-grid">
				<form id="teacherform" action="' . $_SERVER['PHP_SELF'] . '" method="post"> 
					<fieldset>
						<legend>Daphne</legend>
						<label class="span2" for="FirstName">First Name</label>
						<input type="text" name="FirstName" /> 
						<input type="email" /> 
						<div class="form-actions">
						<button type="submit" class="btn" id="submitbutton">Save</button>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="row show-grid">
				<div class="span6">
					<table class="table">
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
					<table class="table">
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
			</div>
			';
?>