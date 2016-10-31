   <title>Dale like</title>

    <body>
	<div id="fb-root"></div>
		<script>
	    postclick = function () {
			window.location = "node.php";										
		}						
		var finished_rendering = function() {
			$('#loader').hide();
			console.log("finished rendering plugins");
		}
			
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '<?php echo $config["fbApp"]["appId"] ?>',
		      xfbml      : true,
		      version    : 'v2.6'
		    });

				FB.Event.subscribe('xfbml.render', finished_rendering);

				FB.Event.subscribe('edge.create', function(targetUrl) {
					$('#loader').show();
					ga('send', 'event', 'action', 'facebook', 'like', 1);
					<?php if ($_SESSION['fnbt']['name'] == 'futy'){ ?> 
					window.location="/foot";
					<?php }else { ?>
					window.location="/final.php";
					<?php } ?>

				});
				FB.Event.subscribe('edge.remove', function(targetUrl) {
					ga('send', 'event', 'action', 'facebook', 'like', 0);
				});
		  };
		
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/es_LA/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
			

		</script>

	<div class="container-fluid" style="height: 100%; width: 100%">

		<div id="loader" style="display: block; width: 100%; height: 100%; z-index: 9; position: absolute; background-color: rgba(0, 0, 0, 0.51);">
			<div class="wrapper vertical-center">
				<div class="cssload-loader btn-centered" style="z-index: 10; top: 45vh; margin: auto;"></div>
			</div>
		</div>

		<div id="upper-div" style="height: 55vh; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/like.png); background-repeat: no-repeat; background-position: center center; background-size: 100% auto;">
<?php if($_SESSION['fnbt']['config']["type"] == 'post'){ ?>
			  <p style="font-size: x-small; text-align: center; padding-top: 5px;">Al continuar estarás aceptando los <a href="http://<?echo $_SERVER['HTTP_HOST']?>/tyc/<?php echo $_SESSION['site']['dir'] ?>.html" target="_blank"> Términos y condiciones y el Aviso de Privacidad</a></p>		
<?php } ?>
		</div>
	    <footer style="height: 45vh;">
			  <div id="fblike-div">
			      <p class="fnbt-name-text grey-text">Presiona “Me Gusta”<br>para continuar.</p>
				  <div class="like-div" style="overflow: hidden;">
					  <div class="fb-like" 
						   data-href="https://www.facebook.com/<?php echo $_SESSION['fnbt']['config']['link'];?>"
						   data-layout="button" 
						   data-size="large"
						   data-action="like" 
						   data-show-faces="false" 
						   data-share="false">
					  </div>
				  </div>
<?php if($_SESSION['fnbt']['config']["type"] == 'post'){ ?>
				  <p style="font-size: smaller; text-align: center; padding-top: 5px;"><a onclick="changeToPost();">Ya di "Me Gusta", prefiero hacer Check-in</a></p>
<?php } ?>
		      </div>

<?php if($_SESSION['fnbt']['config']["type"] == 'post'){ ?>
			  <div id="fbpost-div" style="display: none;">
			      <p class="fnbt-name-text grey-text">Comprueba tu visita con un Check-in.</p>
				  <div class="like-div" style="overflow: hidden;">
			  			<a class="waves-effect waves-light btn fb-btn btn-centered" style=" background-color: #405A9F; font-size: 3vw;" onclick="postclick();">
				  			<i class="mdi mdi-facebook left" style=" font-size: 4vw !important;"></i>Check-in con Facebook
				  		</a>
				  </div>
		      </div>
<?php } ?>
	    </footer>

	</div>
	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
			}
			
			function changeToPost(){
				$("#fbpost-div").show();
				$("#fblike-div").hide();
			}
	</script>
    </body>
  </html>