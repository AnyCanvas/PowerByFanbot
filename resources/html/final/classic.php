<!DOCTYPE html>
<html>
	<title>¡Bravo!</title>
	<?php require_once( "resources/html/header.php" ); ?>
  	<script>
	  	ga("send", "event", "<?php echo $_SESSION['fnbt']['id']; ?>", "step 3", "<?php echo $_SESSION['fnbt']['config']['type'];?> success");
  	</script>

    <body>

	<div class="container-fluid" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 75%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/success.png); background-repeat: no-repeat; background-position: center center; background-size: 100% auto;">
		</div>
	    <footer style="height: 25%; padding-top: 17.5vh;" style="background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">
			  <a class="waves-effect waves-light btn white-text btn-centered red darken-3"><i class="material-icons left">arrow_forward</i>SOY EL ENCARGADO</a>

	    </footer>

	</div>

	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
				$( "#upper-div" ).addClass( "iphone-fix" );
				$( 'img' ).addClass( 'img-fix' );
				$( 'p' ).addClass( 'p-fix' );

			}
	</script>
    </body>
  </html>