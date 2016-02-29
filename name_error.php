<!DOCTYPE html>
<html lang="es">
	<title>!Upss¡</title>
	<?php require_once( "resources/html/header.php" ); ?>

	<script>
		ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error fanbot disconnected");
	</script>



 
    <body>

	<div class="container-fluid red accent-2" style="height: 100%; width: 100%">
		<div id="upper-div" class="red accent-2" style=" height: 75%; background-image: url(./images/error.png); background-repeat: no-repeat; background-position: center bottom; background-size: auto 60%;">
		</div>
	    <footer style="height: 25%;" class="red accent-2">
		      <p class="error-text white-text">Esa palabra no coincide<br>con la de la etiqueta azul.<p>
			  <a href="index.php" class="waves-effect waves-light btn white black-text btn-centered">INTENTAR DE NUEVO</a>
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