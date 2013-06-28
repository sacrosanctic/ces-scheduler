<?php
	$title = 'New Lesson';
	$content = '
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
			';
?>