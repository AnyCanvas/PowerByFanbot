	<script>
		<?php 
			echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error fanbot disconnected");';
		?>
	</script>

    <body>

	<div class="container-fluid red accent-2" style="height: 100%; width: 100%" >
		<div id="upper-div" style=" height: 100vh; background-image: url(/media/clients/<?php echo $_SESSION['site']['dir'] ?>/error2.png); background-repeat: no-repeat; background-position: center bottom; background-size: auto 100vh; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">
		</div>

	</div>
	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
				$( "#upper-div" ).addClass( "iphone-fix" );
				$( 'img' ).addClass( 'img-fix' );

			}
	</script>
    </body>
  </html>