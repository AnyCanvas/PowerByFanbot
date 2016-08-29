 <title>Haz Checkin</title>

   <body>

    <script>
	    postclick = function () {
			window.location = "node.php";										
		}	
	</script>
	<div class="container-fluid" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 65%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/like.png); background-repeat: no-repeat; background-position: center center; background-size: 100% auto;">
		<div class="center-align white-text" style="margin-top: 46%;">
			Bienvenido a Wingman<br><span style="font-weight: lighter;">Obtén recompensas por cada visita.</span>
		</div>

		</div>
		</div>
	    <footer style="height: 25%;">
		      <p class="fnbt-name-text grey-text">Comprueba tu visita con un Check-in<br>o introduce el código de tu recibo.<p>
			  <div class="like-div" style="overflow: hidden;">
		  			<a class="waves-effect waves-light btn fb-btn btn-centered" style=" background-color: #405A9F; font-size: 3vw;" onclick="postclick();">
			  			<i class="mdi mdi-facebook left" style=" font-size: 4vw !important;"></i>Check-in con Facebook
			  		</a>
			  </div>
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