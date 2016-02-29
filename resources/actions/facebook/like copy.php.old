<?php if($_SESSION['fnbt']['id'] == "PF-B1-LTM-0001"){ ?>
	<title>Todo un clásico</title>
<?php } else { ?>
	<title>Fanbot</title>
<?php } ?>
<?php 
	if(isset($_SESSION['fnbt']['config']["bgcolor"])){
		echo '<body style="background-color: '. $_SESSION['fnbt']['config']["bgcolor"] .'">';
	} else {
		echo '<body>';
	}
?>
	
	<div id="fb-root"></div>
		<script>
			
			var finished_rendering = function() {
				$('#actionModal').modal('show');
				console.log("finished rendering plugins");
			}
			
			var likeclick = function () {
				$('#actionModal').modal('hide');
			}	
			
			
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '<?php echo $config["fbApp"]["appId"] ?>',
		      xfbml      : true,
		      version    : 'v2.5'
		    });

				FB.Event.subscribe('xfbml.render', finished_rendering);
				
				FB.Event.subscribe('edge.create', function(targetUrl) {
					ga('send', 'event', 'action', 'facebook', 'like', 1);
					window.location="<?php echo $loginUrl;?>";
				});
				FB.Event.subscribe('edge.remove', function(targetUrl) {
					ga('send', 'event', 'action', 'facebook', 'like', 0);
				});
		  };
		
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
			

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
							 src="media/clients/logos/<?php  echo $_SESSION['fnbt']['config']['image']; ?>"
                             alt="fanbot"
                             width="200">
                    </div>
                    <div class="col-xs-4"></div>
                </div>

<div id="actionModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="false" data-backdrop="static">

  <div class="modal-dialog modal-sm">		
<?php if($_SESSION['fnbt']['id'] == "PF-B1-LTM-0001"){ ?>
			  <div class="fb_logo-row row" style="margin: -2px;">
			    <div class="col-xs-1" ></div>
			    <div class="col-xs-10" >
				    <div class="center-block" >
						<img class="img-responsive" alt="Fanbot" src="../../media/clients/centinela/clasicoshot.png">
					</div>
			    </div>
			    <div class="col-xs-1" ></div>
			  </div>
	
	
<?php  }?>
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title text-center">Presiona "Me gusta"</h4>
      </div>
      <div class="modal-body" style=" overflow: hidden; max-width: 250px;">
		  <div class="fb_logo-row row">
			    <div class="center-block" >
				<div id="fblike center-block">
					<div class="fb-page" 
						data-href="https://www.facebook.com/<?php echo $_SESSION['fnbt']['config']['link'];?>" 
					    data-small-header="true" 
						data-height="250"
						data-adapt-container-width="true" 
					    data-hide-cover="true" 
						data-show-facepile="false">
						<div class="fb-xfbml-parse-ignore">
							<blockquote cite="https://www.facebook.com/<?php echo $_SESSION['fnbt']['config']['link'];?>">
								<a href="https://www.facebook.com/<?php echo $_SESSION['fnbt']['config']['link'];?>">Facebook</a>
							</blockquote>
						</div>
					</div>
				</div>
		  </div>

      </div>
      </div>
   </div>
  </div>
</div>

</div>
	</body>

