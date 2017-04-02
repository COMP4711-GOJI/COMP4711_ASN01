
<h2>Assembly</h2>
<br/>
<div class="row">
	<button type="button" id="assemblebotbutton" class="btn btn-primary btn-radio-makebot">Assemble Bot!</button>
	<input type="checkbox" id="make-bot-button" class="hidden">

</div>
<br/>
<div>
	<div class="row">
	<h3>Top Parts</h3>
	{assembly_gallery_top}
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<img src="./assets/images/parts/{robotpartimg}.jpeg" class="thumbnail img-responsive">
			<button type="button" class="btn btn-primary btn-radio-makebot">Recycle Part</button>
			<input type="checkbox" id="make-bot-button" class="hidden">
			<label><input type="radio" name="optradio-top" id="{topid}"></label>
		</div>
	{/assembly_gallery_top}
	</div>
	<br/><hr/>
	<div class="row">
	<h3>Torso Parts</h3>
	{assembly_gallery_torso}
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<img src="./assets/images/parts/{robotpartimg}.jpeg" class="thumbnail img-responsive">
			  <button type="button" class="btn btn-primary btn-radio-makebot">Recycle Part</button>
			  <input type="checkbox" id="make-bot-button" class="hidden">
			  <label><input type="radio" name="optradio-torso" id="{torsoid}"></label>
		</div>
	{/assembly_gallery_torso}
	</div>
	<br/><hr/>
	<div class="row">
	<h3>Leg Parts</h3>
	{assembly_gallery_legs}
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<img src="./assets/images/parts/{robotpartimg}.jpeg" class="thumbnail img-responsive">
			  <button type="button" class="btn btn-primary btn-radio-makebot">Recycle Part</button>
			  <input type="checkbox" id="make-bot-button" class="hidden">
			<label><input type="radio" name="optradio-legs" id="{legsid}"></label>
		</div>
	{/assembly_gallery_legs}
	</div>
</div> 

<script> 
  $(document).ready(function() {
    $("#assemblebotbutton").click(function() {
    // if (document.getElementsByName('optradio-top').checked
    //   && document.getElementsByName('optradio-torso').checked
    //   && document.getElementsByName('optradio-legs').checked) {
      
		var top;
		var legs;
		var torso;

		var torsoset = document.getElementsByName('optradio-torso');
		var legsset = document.getElementsByName('optradio-legs');
		var topset = document.getElementsByName('optradio-top');
		
		for (var i = 0; i < topset.length; i++) {
			if (topset[i].type === 'radio' && topset[i].checked) {
			    // get top, set checked flag or do whatever you need to
			    top = topset[i].id;       
			}
		}
		for (var i = 0; i < torsoset.length; i++) {
			if (torsoset[i].type === 'radio' && torsoset[i].checked) {
			    // get top, set checked flag or do whatever you need to
			    torso = torsoset[i].id;       
			}
		}
		for (var i = 0; i < legsset.length; i++) {
			if (legsset[i].type === 'radio' && legsset[i].checked) {
			    // get top, set checked flag or do whatever you need to
			    legs = legsset[i].id;       
			}
		}
		if(top != undefined && torso != undefined && legs != undefined )
		{
			window.location = './assembly/assemblebot/' + top + '/' + torso + '/' + legs;
		}

		 // $.ajax({
			// type: "POST",
			// url: "" + '/assembly/assemblebot/' + top + '/' + torso + '/' + legs,
			//  // path to the controller             
			// 	success: function(data){        
			// 		console.log("Data sent to server");
			// 		confirm("You have successfully logged in with FB");
			// 		window.location.reload();       
			// 	}
			// });
    });
  });
  // function assemblebotbuttonaction(){
  // }
</script>