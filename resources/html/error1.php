	<script>
		<?php
			 echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error already activated");';
		?>

	</script>
  
   <body>

		<div id="upper-div" style=" height: 100%; background-image: url(/media/clients/<?php echo $_SESSION['site']['dir'] ?>error1.png); background-repeat: no-repeat; background-position: center top; background-size: 100% auto; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">
		</div>
	    <footer style="height: 25%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">

	    </footer>

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