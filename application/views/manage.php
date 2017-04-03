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
					<input type="text" class="form-control" name="plantname1" id="plantname1" value="<?php echo $GLOBALS['team'] ?>">
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
			    		<th><font color='000'>ID</th>
			    		<th><font color='000'>Head ID</th>
			    		<th><font color='000'>Torso ID</th>
			    		<th><font color='000'>Legs ID</th>
			    		<th><font color='000'>Available</th>
			    		<th><font color='000'>Sell this bot?</th>
			    	</thead>
			    	<tbody>
			    		<td><font color='000'>{robotid}</td>
			    		<td><font color='000'>{head}</td>
			    		<td><font color='000'>{torso}</td>
			    		<td><font color='000'>{legs}</td>
			            <td><font color='000'>{available}</td>
			            <td><a href="/manage/sellbot/{robotid}"><button type="button" class="btn btn-primary btn-radio-makebot">Sell Me!</button><input type="button" class="hidden"/></a></td>
			    	</tbody>
			    </table>
			</div>
			{/robots_built}
			<!-- <div class="row">
				<table class="table">
					<thead>
						<th><font color='000'>Id</font></th>
						<th><font color='000'>Part 1 </font></th>
						<th><font color='000'>Part 2</font></th>
						<th><font color='000'>Part 3</font></th>
						<th><font color='000'>Part 3</font></th>
					</thead>
					<tbody>
						{robottable}
					</tbody>
				</table>
			</div>
			<br/>
			<div class="row">
				<button type="button" id="sellbutton" class="btn btn-primary btn-radio-makebot">Sell Bot!</button>
				<input type="checkbox" id="make-bot-button" class="hidden">
			</div> -->
		</div>
	</div>
</div>

<!-- <script> 
  $(document).ready(function() {    
	$("#sellbutton").click(function() {
    // if (document.getElementsByName('optradio-top').checked
    //   && document.getElementsByName('optradio-torso').checked
    //   && document.getElementsByName('optradio-legs').checked) {
		var bot;

		var botset = document.getElementsByName('optradio-robot');
		
		for (var i = 0; i < botset.length; i++) {
			if (botset[i].type === 'radio' && botset[i].checked) {
			    // get top, set checked flag or do whatever you need to
			    bot = botset[i].id;       
			}
		}
		window.location = './manage/shipbot/' + bot ;
    });
  });
  // function assemblebotbuttonaction(){
  // }
</script> -->