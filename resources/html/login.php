<title>Inicia sesión</title>

	
   <body>

	<div id="fb-root"></div>
	<script>


		ga('send', 'event', "step 1", 'login page');	

		
		postclick = function () {
			window.location = "<?php echo $loginUrl;?>";										
		}	
	</script>

	<div class="container-fluid">		
		<div id="upper-div" style="height: 74vh; width: 100vw;" class="blue">
		<div class="div-wrapper full login-img" style="background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/login.png); background-repeat: no-repeat; background-position: center center; background-size: 100% auto;">
		</div>
		</div>
	    <footer style="height: 24vh; width: 100vw;">
		      <p class="fnbt-name-text grey-text">Es tu primera ves con Fanbot<br>¡Disfruta la experiencia!<p>
			  <a class="waves-effect waves-light btn fb-btn btn-centered" style=" background-color: #405A9F; font-size: 3vw;" onclick="postclick();"><i class="mdi mdi-facebook left" style=" font-size: 4vw !important;"></i>Continuar con Facebook</a>
			  <p style="font-size: x-small; text-align: center; padding-top: 5px;">Al continuar estarás aceptando el <a href="http://fanbot.me/aviso-de-privacidad/" target="_blank">Aviso de Privacidad</a></p>
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