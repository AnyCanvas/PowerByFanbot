<!DOCTYPE html>
<html>
	<title>¡Bravo!</title>
	<?php require_once( "resources/html/header.php" ); ?>
  	<script>
	  	ga("send", "event", "<?php echo $_SESSION['fnbt']['id']; ?>", "step 3", "<?php echo $_SESSION['fnbt']['config']['type'];?> success");
  	</script>

    <body>

<?php if($_SESSION['fnbt']['id'] == "PF-B1-LTM-0001"){ ?>

		<div class="container-fluid" style="height: 100%; width: 100%; background-color: #004485">
		<div id="upper-div" style="height: 75%;" class="blue">
		<div class="div-wrapper full">
			<img class="center-img success-img" src="/media/clients/centinela/done.jpg">
		</div>
		</div>
	    <footer style="height: 25%; padding-top: 17.5vh;" style="background-color: #004485;">
	    </footer>

	</div>

<?php } else { ?>

	<div class="container-fluid blue" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 75%;" class="blue">
		<div class="div-wrapper full">
			<img class="center-img success-img" src="images/success.png">
			<p class="center-align " style="z-index: 2; position: relative; bottom: 40%;"><?php echo timeStamp(); ?></p>
		</div>
		</div>
	    <footer style="height: 25%; padding-top: 17.5vh;" class="blue">
<!--		    <div class="btn-full-div">
			  <a class="waves-effect waves-light btn white black-text btn-full teal accent-2" href="http://fanbot.me/">
			<i class="material-icons left">arrow_forward</i>CONOCE FANBOT</a>
		    </div> -->
			  <a class="waves-effect waves-light btn white black-text btn-centered teal accent-2" href="http://facebook.com/fanbotme"><i class="material-icons left">arrow_forward</i>CONOCE FANBOT</a>

	    </footer>

	</div>

<?php } ?>

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