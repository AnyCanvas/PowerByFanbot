<?php
	include 'resources/library/functions.php'; 
	session_start();

	?>
<!DOCTYPE html>
<html lang="es">
	<title>!Upss¡</title>
	<?php require_once( "resources/html/header.php" ); ?>

	<script>
		ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error fanbot disconnected");
	</script>



 
    <body>


		<div id="upper-div" style=" height: 65vh; background-image: url(/media/clients/<?php echo $_SESSION['site']['dir'] ?>/error.png); background-repeat: no-repeat; background-position: center bottom; background-size: 100% auto; background-color: #ee5559;">
		</div>
	    <footer style="height: 35vh;" class="red accent-2">
		      <p class="error-text white-text">Esa palabra no coincide<br>con la de la etiqueta.<p>
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