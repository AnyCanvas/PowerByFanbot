<html>
<head>

	<title>Inicia sesion en Facebook para continuar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<script src="js/common.js"></script>
	<script>
			ga('send', 'event', "<?php echo $_SESSION['id']; ?>", 'step 2', 'facebook post');
	</script>
  	<style type="text/css">
		html{
		    height: 100%;
		}
		body{
			/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fae300+0,ad9c00+100 */
			background:
			<?php 
						echo $_SESSION['config']['bgcolor'];
			?>
					}
  	</style>

	<script>
		var finished_rendering = function() {
			$('#actionModal').modal('show');
			console.log("finished rendering plugins");
		}
	</script>  
</head>

<body>
	
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '<?php echo $config["fbApp"]["appId"] ?>',
		      xfbml      : true,
		      version    : 'v2.5'
		    });

			FB.Event.subscribe('xfbml.render', finished_rendering);

		  };
		
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));

			postclick = function () {
						FB.ui({
						  method: 'share',
						//  name: 'Facebook Dialogs',
						  href: 'https://www.facebook.com/<?php echo $_SESSION['config']['link']; ?>',
						}, function(response){
				            if (response) {
									  ga('send', 'event', 'action', 'facebook', 'post', '1');
									  window.location = "<?php echo $loginUrl;?>";			
				                } else {
									  ga('send', 'event', 'action', 'facebook', 'post', '0');
				                    }
						});
						if (navigator.userAgent.indexOf("FBSN/iPhone") > -1){
								ga('send', 'event', 'action', 'facebook', 'post', '1');
								window.location = "<?php echo $loginUrl;?>";										
						}

			}	
		<?php
			if(isset($_GET["post"])){
				header("location: ". $loginUrl);			    
		    } ?>
  
</script>

<div class ="container-fluid">

<div class="wrapper vertical-center">
	<div class="cssload-loader"></div>
</div>

<div class="clearfix visible-xs-block"></div>

                <div class="fb_logo-row row bottom">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        <img class="img-responsive center-block"
							 src="media/clients/logos/<?php  echo $_SESSION['config']['image']; ?>"
                             alt="fanbot"
                             width="200">
                    </div>
                    <div class="col-xs-4"></div>
                </div>

<div id="actionModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="false" data-backdrop="static">

  <div class="modal-dialog modal-sm">		
		<!-- Informative image Columns-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Presiona "Compartir"</h4>
      </div>
      <div class="modal-body">
		  <div class="fb_logo-row row">
		    <div class="col-xs-4" ></div>
		    <div class="col-xs-4" >
			    <div class="center-block" >
					<img id="fb_img" src="https://graph.facebook.com/<?php echo $_SESSION['config']['link'];?>/picture" class="img-responsive img-thumbnail center-block" alt="Cinque Terre">
				</div>
		    </div>
		    <div class="col-xs-4" ></div>
		  </div>


		<div class="clearfix visible-xs-block"></div>

		<div class="row mid-row">
		    <div class="col-xs-3" ></div>
		    <div class="col-xs-6"  style="padding: 0px 34px;">
				<a id="post-btn" class="btn btn-block btn-xs btn-social btn-facebook" onclick="postclick();" style="padding-left: 20px;">
	    			<i class="fa fa-facebook-official"></i> <span class="text-center" >Compartir</span>
	  			</a>
		    </div>
		    <div class="col-xs-3" ></div>
		</div>	

      </div>
<!--      <div class="modal-footer">
		<div class="row mid-row">
		    <div class="col-xs-1" ></div>
		    <div class="col-xs-10 text-center leadinline-text" >
				<span style="font-size: x-small; color: white;" >Al continuar estarás aceptando los términos y condiciones.</span>
		    </div>
		    <div class="col-xs-1" ></div>
		</div>
      </div> -->
   </div>
  </div>
</div>

</div>
	</body>
</html>
