<?php
	$title = 'Check In';
	$content = '
			<h1>Check-In <small>June 30th, 2013 6:15pm</small></h1>
			<div class="btn-toolbar">
				<a href="#" class="btn">Filter</a>
				<a href="#" class="btn">Clear</a>
			</div>
			<div class="controls controls-row">
				<select multiple="multiple">
					<option selected="selected">(All)</option>
					<option>Daphne</option>
					<option>Donald</option>
					<option>Mulie</option>
				</select>
				<select multiple="multiple">
					<option selected="selected">(All)</option>
					<option>English</option>
					<option>Music</option>
					<option>Chinese</option>
					<option>Math</option>
				</select>
				<select multiple="multiple">
					<option selected="selected">(All)</option>
					<option>Private Lesson</option>
					<option>Group Lesson</option>
				</select>
				<select multiple="multiple">
					<option selected="selected">(All)</option>
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
						<th>Time</th>
						<th>Subject - Class</th>
						<th>Teacher</th>
						<th>Student</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td>June 30th, 2013</td>
						<td>04:00pm - 05:00pm</td>
						<td>Music - Private Lesson</td>
						<td>Daphne</td>
						<td>Bob</td>
						<td>
							<a href="#" onClick="$(this).parent().parent().removeClass(\'warning\').addClass(\'success\');">Check In</a> |
							<a href="#">Change</a>
						</td>
					</tr>
					<tr class="success">
						<td>June 30th, 2013</td>
						<td>05:00pm - 06:00pm</td>
						<td>Music - Private Lesson</td>
						<td>Daphne</td>
						<td>Bob</td>
						<td>
							<a href="#" onClick="$(this).parent().parent().removeClass(\'warning\').addClass(\'success\');">Check In</a> |
							<a href="#">Change</a>
						</td>
					</tr>
					<tr class="warning" style="border:2px #666 solid;">
						<td>June 30th, 2013</td>
						<td>06:00pm - 07:00pm</td>
						<td>Music - Private Lesson</td>
						<td>Daphne</td>
						<td>Bob</td>
						<td>
							<a href="#" onClick="$(this).parent().parent().removeClass(\'warning\').addClass(\'success\');">Check In</a> |
							<a href="#">Change</a>
						</td>
					</tr>
					<tr class="warning">
						<td>June 30th, 2013</td>
						<td>07:00pm - 08:00pm</td>
						<td>Music - Private Lesson</td>
						<td>Daphne</td>
						<td>Bob</td>
						<td>
							<a href="#" onClick="$(this).parent().parent().removeClass(\'warning\').addClass(\'success\');">Check In</a> |
							<a href="#">Change</a>
						</td>
					</tr>
				</tbody>
			</table>
			';
?>