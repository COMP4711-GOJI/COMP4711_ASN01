<h2>Assembly</h2>
<br/>
<div class="row">
	<button type="button" class="btn btn-primary btn-radio-makebot">Assemble Bot!</button>
	<input type="checkbox" id="make-bot-button" class="hidden">
</div>
<br/>
<div>
	<div class="row">
	<h3>Top Parts</h3>
	{assembly_gallery_top}
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<img src="./assets/images/parts/{robotpartimg}" class="thumbnail img-responsive">
			 <label><input type="radio" name="optradio-top" id="{topid}"></label>
		</div>
	{/assembly_gallery_top}
	</div>
	<hr/>
	<div class="row">
	<h3>Torso Parts</h3>
	{assembly_gallery_torso}
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<img src="./assets/images/parts/{robotpartimg}" class="thumbnail img-responsive">
			  <label><input type="radio" name="optradio-torso" id="{torsoid}"></label>
		</div>
	{/assembly_gallery_torso}
	</div>
	<hr/>
	<div class="row">
	<h3>Leg Parts</h3>
	{assembly_gallery_legs}
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<img src="./assets/images/parts/{robotpartimg}" class="thumbnail img-responsive">
			<label><input type="radio" name="optradio-legs" id="{legsid}"></label>
		</div>
	{/assembly_gallery_legs}
	</div>
</div> 
