	<script>
		<?php
			 echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error already activated");';
		?>

	</script>
  
   <body>

<?php if($_SESSION['fnbt']['id'] == "PF-B1-LTM-0001"){ ?>

	<div class="container-fluid" style="height: 100%; width: 100%; background-color: #004485;">
		<div id="upper-div" style=" height: 75%; background-image: url(/media/clients/centinela/upss.jpg); background-repeat: no-repeat; background-position: center bottom; background-size: auto 60%; background-color: #004485;">
		</div>
	    <footer style="height: 25%;" style="background-color: background-color: #004485;">

	    </footer>

<?php } else { ?>

	<div class="container-fluid red accent-2" style="height: 100%; width: 100%">
		<div id="upper-div" class="red accent-2" style=" height: 75%; background-image: url(./images/error1.png); background-repeat: no-repeat; background-position: center bottom; background-size: auto 60%;">
		</div>
	    <footer style="height: 25%;" class="red accent-2">

<!--		    <div class="btn-full-div"> 
			  <a class="waves-effect waves-light btn white black-text btn-full teal accent-2" href="http://fanbot.me/"><i class="material-icons left">arrow_forward</i>CONOCE FANBOT</a>
		    </div> -->
		    <p>Esta Fanbot nos dice que ya te dispensó.</p>
			  <a class="waves-effect waves-light btn white black-text btn-centered teal accent-2" href="http://facebook.com/fanbotme"><i class="material-icons left">arrow_forward</i>CONOCE FANBOT</a>


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