<div id="exTab2" class="container">	
	<ul class="nav nav-tabs">
		<li class="active">
		<a  href="#1" data-toggle="tab">Reboot</a>
		</li>
		<li><a href="#2" data-toggle="tab">PRC Registration</a>
		</li>
		<li><a href="#3" data-toggle="tab">Configuration</a>
		</li>
		<li><a href="#4" data-toggle="tab">Sell Assembled Bots</a>
		</li>
	</ul>

	<div class="tab-content ">
		<div class="tab-pane active" id="1">
			<h3>Reboot to reset inventory and history.</h3>
			
			<a href="/manage/reboot"><button type="button" class="btn btn-primary btn-radio-makebot">Reboot Me!</button><input type="button" class="hidden"/></a>
		</div>
		<div class="tab-pane" id="2">
			<h3>PRC Registration Form</h3>
			<form role="form" action="/manage/register" method="post">
				<div class="form-group">
				<label for="plantname">Plant Name:</label>
					<input type="text" class="form-control" name="plantname" id="plantname">
				</div>
				<div class="form-group">
					<label for="token">Secret Token:</label>
					<input type="text" class="form-control" name="token" id="token">
				</div>
				<button type="submit" class="btn btn-default">Register</button>
			</form>
		</div>
		<div class="tab-pane" id="3">
			<h3>Configuration</h3>
			<form role="form" action="/manage/config" method="post">
				<div class="form-group">
				<label for="plantname1">Plant Name:</label>
					<input type="text" class="form-control" name="plantname1" id="plantname1">
				</div>
				<div class="form-group">
				<label for="baseurl">Base URL for PRC:</label>
					<input type="text" class="form-control" name="baseurl" id="baseurl" value="<?php echo $GLOBALS['baseurl'] ?>">
				</div>
				<button type="submit" class="btn btn-default">Update</button>
			</form>
		</div>
		<div class="tab-pane" id="4">
			<h3>Sell the available bots</h3>
			{robots_built}
			<div>
			    <table class="table">
			    	<thead>
			    		<th>ID</th>
			    		<th>Head ID</th>
			    		<th>Torso ID</th>
			    		<th>Legs ID</th>
			    		<th>Available</th>
			    		<th>Sell this bot?</th>
			    	</thead>
			    	<tbody>
			    		<td>{robotid}</td>
			    		<td>{head}</td>
			    		<td>{torso}</td>
			    		<td>{legs}</td>
			            <td>{available}</td>
			            <td><a href="/manage/sellbot/{robotid}"><button type="button" class="btn btn-primary btn-radio-makebot">Sell Me!</button><input type="button" class="hidden"/></a></td>
			    	</tbody>
			    </table>
			</div>
			{/robots_built}
		</div>
	</div>
</div>
