<?php
	$title = 'Teacher Edit';
	$content = '
			<h1>Teacher <small>Daphne</small></h1>
			<div class="row">
				<div class="span12">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#myTab1" data-toggle="tab">Personal</a></li>
						<li><a href="#myTab2" data-toggle="tab">Contact</a></li>
						<li><a href="#myTab3" data-toggle="tab">Fee</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active" id="myTab1">
							<form id="teacherform" action="/ces-scheduler/template/template-gen.php" method="post">
								<label for="name">Name</label>
								<input type="text" value="Daphne">
								<label>Education</label>
								<textarea rows="4" class="span8">嘽 駍駔鳿 妎岓岕 疶砳, 蝺 箛箙舕 籿紁羑 韰頯餩 鰩鷎 圢帄氕 煘煓瑐 熩熝犚 躎轛 壿 藚藦藞 蜦賕踃 豅鑢鑗 垌壴 蒛 豥 湴涬 蛶觢豥 瀁瀎瀊 溹溦滜, 筡絼綒 鳻嶬幧 獫瘯皻 魦魵 滆 虰豖阹 忷扴汥 慛慖 滈, 巠帎 鳱 偢偣唲 秎穾籺 沎牣 胾臷菨 樛槷殦 姌弣抶 塝, 嘽 楋歅 莃荶衒 蛚袲褁 鈁陾靰
								</textarea>
								<label>Work History</label>
								<textarea rows="4" class="span8">嘽 駍駔鳿 妎岓岕 疶砳, 蝺 箛箙舕 籿紁羑 韰頯餩 鰩鷎 圢帄氕 煘煓瑐 熩熝犚 躎轛 壿 藚藦藞 蜦賕踃 豅鑢鑗 垌壴 蒛 豥 湴涬 蛶觢豥 瀁瀎瀊 溹溦滜, 筡絼綒 鳻嶬幧 獫瘯皻 魦魵 滆 虰豖阹 忷扴汥 慛慖 滈, 巠帎 鳱 偢偣唲 秎穾籺 沎牣 胾臷菨 樛槷殦 姌弣抶 塝, 嘽 楋歅 莃荶衒 蛚袲褁 鈁陾靰
								</textarea>
								<div>
								<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="myTab2">
							<div>
								<button id="b1" onClick="addContact()" class="btn btn-primary" type="button">+</button>
							</div>
							<table class="table" id="contact">
								<thead>
									<tr>
										<th>relationship</th>
										<th>method</th>
										<th>Value</th>
										<th style="width:36px;"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<select class="width:140px;">
												<option>self</option>
												<option>mom</option>
												<option>dad</option>
												<option>friend</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>home phone</option>
												<option>cell phone</option>
												<option>email</option>
												<option>address</option>
											</select>
										</td>
										<td>
											<input type="text" value="0000-000-000">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>friend</option>
												<option>mom</option>
												<option>self</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
												<option>address</option>
											</select>
										</td>
										<td>
											<input type="text" value="0936-111-111">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>self</option>
												<option>friend</option>
												<option>mom</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>address</option>
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
											</select>
										</td>
										<td>
											<input type="text" value="address">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>friend</option>
												<option>mom</option>
												<option>self</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
												<option>address</option>
											</select>
										</td>
										<td>
											<input type="text" value="">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>self</option>
												<option>friend</option>
												<option>mom</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>address</option>
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
											</select>
										</td>
										<td>
											<input type="text" value="">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="myTab3">
							<div>
								<button id="b1" onClick="addFee()" class="btn btn-primary" type="button">+</button>
							</div>
							<table class="table" id="fee">
								<thead>
									<tr>
										<th>Class</th>
										<th>Fee per hour</th>
										<th style="width:36px;"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<select class="width:140px;">
												<option>private Lession</option>
												<option>group lession</option>
												<option>special</option>
											</select>
										</td>
										<td>
											<input type="text" value="">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	';
	$footerjs = '
					function addContact() {
				var newIn = \'<tr><td><select class="width:140px;"><option></option><option>friend</option><option>mom</option><option>self</option><option>dad</option></select></td><td><select class="width:140px;"><option></option><option>cell phone</option><option>home phone</option><option>email</option><option>address</option></select></td><td><input type="text" value=""></td><td><a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a></td></tr>\';
				$("#contact tbody").prepend(newIn);
			}
			function addFee() {
				var newIn = \'<tr><td><select class="width:140px;"><option>private Lession</option><option>group lession</option><option>special</option></select></td><td><input type="text" value=""></td><td><a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a></td></tr>\';
				$("#fee tbody").prepend(newIn);
			}
			function removeFormField(e) {
				$(e).parent().parent().remove();
			}

	';
?>