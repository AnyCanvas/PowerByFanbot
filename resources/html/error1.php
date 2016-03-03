	<script>
		<?php
			 echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error already activated");';
		?>

	</script>
  
   <body>

<?php if($_SESSION['fnbt']['id'] == "PF-B1-LTM-0001"){ ?>

	<div class="container-fluid" style="height: 100%; width: 100%; background-color: #004485;">
		<div id="upper-div" style=" height: 75%; background-image: url(/media/clients/<?php echo $_SESSION['site']['dir'] ?>/error1.png); background-repeat: no-repeat; background-position: center bottom; background-size: auto 60%; background-color: #004485;">
		</div>
	    <footer style="height: 25%;" style="background-color: background-color: #004485;">

	    </footer>

<?php } else { ?>

		<div id="upper-div" style=" height: 75%; background-image: url(/media/clients/<?php echo $_SESSION['site']['dir'] ?>/error1.png); background-repeat: no-repeat; background-position: center bottom; background-size: auto 60%; background-color: <?php echo $_SESSION['fnbt']['config']["bgcolor"] ?>;">
		</div>
	    <footer style="height: 25%; background-color: background-color: <?php echo $_SESSION['fnbt']['config']["bgcolor"] ?>;">

	    </footer>
<?php } ?>


	</div>
	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
				$( 'img' ).addClass( 'img-fix' );
				$( "#upper-div" ).addClass( "iphone-fix" );

			}
	</script>
    </body>
  </html>