<body>	
	<div id="fb-root"></div>
	
	<script>
			
			  window.fbAsyncInit = function() {
			    FB.init({
			      appId      : '<?php echo $config["fbApp"]["appId"]; ?>',
			      xfbml      : true,
			      version    : 'v2.4'
			    });

			var referrer = document.referrer;	
			var browserAgent = navigator.userAgent
			console.log(referrer);	
			console.log(browserAgent);
			FB.getLoginStatus(function(response) {
			  if (response.status === 'connected') {
			    ga('send', 'event', "step 1", 'facebook login status', 'logged');
			    console.log('logged');
			    var uid = response.authResponse.userID;
			    var accessToken = response.authResponse.accessToken;
			  } else if (response.status === 'not_authorized') {
			    console.log('logged');
			    ga('send', 'event', "step 1", 'facebook login status', 'logged');
			  }	else{
			    console.log('not logged');
			    ga('send', 'event', "step 1", 'facebook login status', 'not logged');	
				  				
				if(referrer.indexOf("facebook") <= -1 ){
					if (browserAgent.indexOf("iPhone") > -1){
						console.log("iPhone detected");
						$('#indexModal').modal('show');
						modalButton.setAttribute('href', 'fb://profile/1550316151894751');
					} else if (browserAgent.indexOf("Android") > -1){
						if (browserAgent.indexOf("Android 5") > -1 || browserAgent.indexOf("Android 6") > -1){
							console.log("Android lollipop detected");
							modalButton.setAttribute('href', 'fb://page/1550316151894751');
							$('#indexModal').modal('show');
						} else if (browserAgent.indexOf("Android 4.4") > -1){
							console.log("Android Kitkat detected");
						} else {
							console.log("Old Android detected");
					   	}
				  	} else {
						console.log("Model not detected");
				  	}
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
            <!-- Input and button to next page columns-->
        <div class="row mid-row center-block"
             style="padding-top: 3em;">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <p class="text-center text-nowrap"
                   style="color: white; font-size: 1.2em;">
				    Escribe la palabra de <br>la etiqueta azul
                </p>
            </div>
            
            <div class="col-xs-1"></div>
                
                
            <div class="clearfix visible-xs-block"></div>
                
            <div class="col-xs-12">
                <div id="indexDiv"
                     class="center-block">
                    <div class="col-xs-5"
                         style="padding: 0px;">
                        <img src="media/images/maquina.png"
                             class="img-responsive center-block"
                             alt="maquina"
                             style="height: 160px; margin-right: 0;">
                    </div>
                    
                    <div class="col-xs-7"
                         style="padding: 0px;">
                        <form class="form"
                              action="node.php"
                              method="get"
                              style="padding-top: 50px; padding-left: 0px;">
                            <div class="input-group square-box">
                                <input type="text"
                                       class="form-control input-lg text-center lead text-lowercase inline-text square-box"
                                       name="name">
                                <span class="input-group-btn">
									<button class="btn btn-lg next-btn square-box" type="submit">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</button>
								</span>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div><

         <div class="fb_logo-row row bottom">
            <div class="col-xs-4"></div>

            <div class="col-xs-4">
                <img class="img-responsive center-block"
                     src="media/clients/logos/fanbot.png"
                     alt="fanbot"
                     width="200">
            </div>

            <div class="col-xs-4"></div>
        </div>

		<div id="indexModal" 
			 class="modal fade" 
		     role="dialog" data-keyboard="false" 
			 data-backdrop="false" 
		     data-backdrop="static">
			<div class="modal-dialog modal-sm">		
				<!-- Informative image Columns-->
			    <div class="modal-content">
			        <div class="modal-header">
				        <div class="row">
					    
					        <div class="col-xs-2">
					            <span class="glyphicon glyphicon-exclamation-sign" 
					                  aria-hidden="true" 
					                  style="font-size: xx-large; text-align: center;">
					            </span>					  	
					        </div>
					    
					        <div class="col-xs-10">
						        <p class="modal-title text-center">Necesitas ingresar a Facebook y usar la aplicación</p>
					        </div>
	
				        </div>
			        </div>
	
			        <div class="modal-body">
					    <div class="center-block" >
					        <img id="index_img" 
					             src="media/images/modal.gif" 
					             class="img-responsive center-block" 
					             alt="Cinque Terre">
				        </div>
				    </div>
	
	    	        <div class="modal-footer">
					    <div class="row mid-row">
	
					        <div class="col-xs-1" ></div>
	
					        <a  id="modalButton" href="">
						    <div id="modalButtonDiv" 
							     class="col-xs-10 text-center leadinline-text" 
								 style="background-color: #5890FF;" >					
					    	    <span class="text-center" style="color: white; font-size: medium;">USAR APLICACIÓN</span>			  			
						    </div>
					        </a>
	
	    				    <div class="col-xs-1" ></div>
	
			                <div class="clearfix visible-xs-block"></div>
	
					        <div class="col-xs-1" ></div>
	
					        <div class="col-xs-10 text-center leadinline-text" 
						         style="color: gray; font-size: small; padding-top: 10px;">
							    o
							    <a  id="closeModalButton" 
								    href="#indexModal" 
								    data-toggle="modal" 
								    class="text-center" 
								    style="text-decoration:underline;">
				    			    Continuar en el navegador
				  			    </a>
					        </div>
					    
					        <div class="col-xs-1" ></div>
					    
					    </div>
			        </div>
			
			    </div>
			</div>
		</div>
	</div>
</body>