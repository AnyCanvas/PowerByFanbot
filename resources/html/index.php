<title>Inicia sesión</title>

	
   <body>

	<div id="fb-root"></div>
	<script>

		var finished_rendering = function() {
			$('#loader').hide();
			console.log("finished rendering plugins");
		}
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '<?php echo $config["fbApp"]["appId"]; ?>',
		      xfbml      : true,
		      version    : 'v2.4'
		    });
		    
		FB.Event.subscribe('xfbml.render', finished_rendering);

		var referrer = document.referrer;	
		var browserAgent = navigator.userAgent
		console.log(referrer);	
		console.log(browserAgent);
		FB.getLoginStatus(function(response) {
		  if (response.status === 'connected') {
		    ga('send', 'event', "step 0", 'facebook login status', 'logged');
		    console.log('logged and authorized');
		    var uid = response.authResponse.userID;
		    var accessToken = response.authResponse.accessToken;
			document.location.href = 'node.php?token=' + accessToken;	
		  } else if (response.status === 'not_authorized') {
		    console.log('logged');
		    ga('send', 'event', "step 0", 'facebook login status', 'logged');
			document.location.href = 'node.php';	
		  }	else {
		    console.log('not logged');
		    ga('send', 'event', "step 0", 'facebook login status', 'not logged');	
			  				
			if(referrer.indexOf("facebook") <= -1 ){
				if (browserAgent.indexOf("iPhone") > -1){
					console.log("iPhone detected");
					document.location.href = 'openapp.php';
				} else if (browserAgent.indexOf("Android") > -1){
					if (browserAgent.indexOf("Android 5") > -1 || browserAgent.indexOf("Android 6") > -1){
						console.log("Android lollipop detected");
						document.location.href = 'openapp.php';	
						$('#indexModal').modal('show');
					} else if (browserAgent.indexOf("Android 4.4") > -1){
						console.log("Android Kitkat detected");
						document.location.href = 'node.php';	
					} else {
						console.log("Old Android detected");
						document.location.href = 'node.php';	
				   	}
			  	} else {
					console.log("Model not detected");
					document.location.href = 'node.php';
			  	}
			 } else {
					console.log("Facebook app to Chrome");
					document.location.href = 'node.php';
			  	}
		}	
			});
			};
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
	</script>

	<div class="container-fluid">
		
		<div id="loader" style="display: block; width: 100vw; height: 100vh; z-index: 9; position: absolute; background-color: rgba(0, 0, 0, 0.51);">
			<div class="wrapper vertical-center">
				<div class="cssload-loader btn-centered" style="z-index: 10; top: 45vh; margin: auto;"></div>
			</div>
		</div>	
		<div id="upper-div" style="height: 100vh; width: 100vw;" class="blue">
		</div>


	</div>

    </body>
  </html>