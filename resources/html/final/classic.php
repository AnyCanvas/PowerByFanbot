<!DOCTYPE html>
<html>
	<title>¡Bravo!</title>
	<?php require_once( "resources/html/header.php" ); ?>
  	<script>
	  	ga("send", "event", "<?php echo $_SESSION['fnbt']['id']; ?>", "step 3", "<?php echo $_SESSION['fnbt']['config']['type'];?> success");
  	</script>

    <body>

	<div class="container-fluid blue" style="height: 100%; width: 100%">
		<div class="container-fluid" style="height: 100%; width: 100%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">
		<div class="div-wrapper full">
			<img class="center-img success-img" src="media/clients/<?php echo $_SESSION['site']['dir'] ?>/success.png">
		</div>
		</div>
	    <footer style="height: 25%; padding-top: 17.5vh;" style="background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">
<!--		    <div class="btn-full-div">
			  <a class="waves-effect waves-light btn white black-text btn-full teal accent-2" href="http://fanbot.me/">
			<i class="material-icons left">arrow_forward</i>CONOCE FANBOT</a>
		    </div> -->
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