<<!-->	Original Snipper of Code Accredited to : http://bootsnipp.com/snippets/7N3p2 <!-->
<div class="container">
    <div class="row">
		<div class="col-xs-12">
		  <h3>Assembly</h3>
			<!-- tabs -->
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#home" data-toggle="tab">Robots</a>
					</li>
					<li>
						<a href="#about" data-toggle="tab">Parts</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="home">                
						<div class="">
							<h2>Assembled Robots</h2>
							    <div class="col-md-12">
							        <div class="carousel slide" id="myCarousel">
							          <div class="carousel-inner">
							                <div class="item active">
							                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
							                  <a href="#"><img src="./assets/images/bots/{img}" class="img-responsive">1</a></div>
							                </div>
							                <div class="item">
							                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
							                  <a href="#"><img src="./assets/images/bots/{img}" class="img-responsive">2</a></div>
							                </div>
							                <div class="item">
							                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
							                  <a href="#"><img src="./assets/images/bots/{img}" class="img-responsive">3</a></div>
							                </div>
							                <div class="item">
							                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
							                  <a href="#"><img src="./assets/images/bots/{img}" class="img-responsive">4</a></div>
							                </div>
							                <div class="item">
							                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
							                  <a href="#"><img src="./assets/images/bots/{img}" class="img-responsive">5</a></div>
							                </div>
							                <div class="item">
							                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
							                  <a href="#"><img src="./assets/images/bots/{img}" class="img-responsive">6</a></div>
							                </div>
									  </div>
							          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="./assets/images/prev.png" class="carousel-control-img-left"></a>
							          <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="./assets/images/next.png" class="carousel-control-img-right"></a>
									</div>
								</div>        
							</div>
					</div> 
					<div class="tab-pane" id="about"> 
						<div class="">
						<h2>Parts Selection</h2>
						<div class="row">
					    {inventory}
					    <div class="span4"><a href="{href}"><img src="./assets/images/parts/{id}" title="{what}"/></a></div>
					    {/inventory}
						</div>
					</div>	
				</div>
			</div><!-- /tabs -->
		</div>
	</div>
</div>

