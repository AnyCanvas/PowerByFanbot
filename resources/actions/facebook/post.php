   <title>Haz Checkin</title>

   <body>

    <script>
	    postclick = function () {
			window.location = "node.php";										
		}	
	</script>
	<div class="container-fluid" style="height: 100%; width: 100%">
	<div class="container-fluid" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 55vh; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/like.png); background-repeat: no-repeat; background-position: center center; background-size: 100% auto;">
		</div>
	    <footer style="height: 45%;">
		      <p class="fnbt-name-text grey-text">Presiona “Compartir” para obtener tu premio.</p>
			  <div class="like-div" style="overflow: hidden;">
		  			<a class="waves-effect waves-light btn fb-btn btn-centered" style=" background-color: #405A9F; font-size: 3vw;" onclick="postclick();">
			  			<i class="mdi mdi-facebook left" style=" font-size: 4vw !important;"></i>Compartir en Facebook
			  		</a>
			  </div>
			  <p style="font-size: x-small; text-align: center; padding-top: 5px;">Al continuar estarás aceptando los <a href="http://<?echo $_SERVER['HTTP_HOST']?>/tyc/<?php echo $_SESSION['site']['dir'] ?>.html" target="_blank"> Términos y condiciones y el Aviso de Privacidad</a></p>

	    </footer>

	</div>
	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
			}
	</script>
    </body>
  </html>