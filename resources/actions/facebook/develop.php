 <title>Haz Checkin</title>

   <body>

    <script>
	    postclick = function () {
			window.location = "node.php";										
		}	
		
		chekCode = function(){
			if($('#store-code').val() == 786065){
				window.location = "final.php";
			} else {
				console.log($('#store-code').val());
				alert('codigo incorreto');				
			}
		}
	</script>
	<div class="container-fluid" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 75%;" class="blue">
		<div class="div-wrapper full" style="background-color: <?php echo $_SESSION['fnbt']['config']["bgcolor"] ?>;">

			<img class="center-img" src="https://graph.facebook.com/<?php echo $_SESSION['fnbt']['config']['link'];?>/picture?type=large" class="img-responsive img-thumbnail center-block" style="width: 30vh; top: 25% !important; position: relative;" alt="Cinque Terre">
			
		<div class="center-align white-text" style="margin-top: 40%;">
			Bienvenido a Wingman<br><span style="font-weight: lighter;">Obtén recomensas por cada visita.</span>
		</div>

		</div>
		</div>
	    <footer style="height: 25%;">
		      <p class="fnbt-name-text grey-text">Comprueba tu visita con un Check-in<br>o introduce el código de tu recibo.<p>
			  <div class="like-div" style="overflow: hidden;">
		  			<a class="waves-effect waves-light btn fb-btn btn-centered" style=" background-color: #405A9F; font-size: 3vw;" onclick="postclick();">
			  			<i class="mdi mdi-facebook left" style=" font-size: 4vw !important;"></i>Check-in con Facebook
			  		</a>
			  		
			  		<p style="font-size: x-small; text-decoration: underline;" onclick="$('#modal1').openModal();">Prefiero utilizar el código de mi recibo</p>

			  </div>
	    </footer>

		<!-- Modal Structure -->
		  <div id="modal1" class="modal bottom-sheet">
		    <div class="modal-content">
		      <h5>Introduce tu código.</h5>
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="store-code" placeholder="xxxxxx" id="first_name" type="text" class="validate">
			          <label for="first_name">Codigo</label>
			        </div>
				  </div>
				</form>

		    </div>
		    <div class="modal-footer">
		      <a onclick="chekCode();" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
		      <a onclick="$('#modal1').closeModal();" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

		    </div>
		  </div>
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