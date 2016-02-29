<title>Confirma tu Check-in</title>

<body>

	    <script>
		    postclick = function () {
				window.location = "<?php echo $postCodeUrl; ?>";										
			}	
		</script>	
		<div class="container-fluid" style="height: 100%; width: 100%">
			<div id="loader" style="display: none; width: 100%; height: 100%; z-index: 9; position: absolute; background-color: rgba(0, 0, 0, 0.509804);">
				<div class="wrapper vertical-center">
					<div class="cssload-loader btn-centered" style="z-index: 10; top: 45vh; margin: auto;"></div>
				</div>
			</div>
			<div id="upper-div" style="height: 75%;" class="white">
			<div class="div-wrapper full">
				<div class="center-img white" style="width: 300px; height: 200px; top: 29vh !important; position: relative; padding: 10px; border: .5px grey solid;">
				<img src="https://graph.facebook.com/<?php echo $_SESSION['fbUser']['id']; ?>/picture" style="height: 25px; display: inline-block; vertical-align: baseline;">
					<span style="font-size: smaller; display: inline-block; line-height: 1.2; padding-left: 10px;">
						<span style="font-weight: bold;"><?php echo $_SESSION['fbUser']['name']; ?></span>
						<br>Esta en 
						<span style="font-weight: bold; display: inline-block;"><?php echo getFbPageName($_SESSION['fnbt']['config']['link']);?></span>
					</span>
				<img class="center-img" src="images/mapa.png" style="width: 100%; padding: 10px 0px;">	
				<div style="height: 50px; position: absolute; top: 125px;">
					<img src="https://graph.facebook.com/<?php echo $_SESSION['fnbt']['config']['link'];?>/picture" class="white" style="height: 50px; padding: 2px; margin-left: 5px;vertical-align: bottom;">
					<span style="font-weight: bold; font-size: smaller; padding-left: 10px;"><?php echo getFbPageName($_SESSION['fnbt']['config']['link']);?></span>
				</div>		
				</div>
			</div>
	
			</div>
		    <footer style="height: 25%;">
			      <p class="fnbt-name-text grey-text">Fanbot publicará esto en tu Facebook.</p>
				  <div class="like-div" style="overflow: hidden;">
			  			<a class="waves-effect waves-light btn fb-btn btn-centered" style=" background-color: #405A9F; font-size: 3vw;" onclick="postclick();">
				  			<i class="mdi mdi-facebook left" style=" font-size: 4vw !important; margin-right: 0px !important;"></i>Publicar
				  		</a>	
				  </div>
	
		    </footer>
	
		</div>

	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
				$( "#upper-div" ).addClass( "iphone-fix" );

			}
	</script>		
</body>
</html>