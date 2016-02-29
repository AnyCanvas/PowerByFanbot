<body>
	<script>
			faceClick = function () {
					window.location = "<?php echo $config["urls"]["baseUrl"] . '/node.php'?>";										
						}	

			var finished_rendering = function() {
				$('#actionModal').modal('show');
				console.log("finished rendering plugins");
			}
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
			<!-- Informative image Columns-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title text-center">Califica tu experiencia</h4>
	      </div>
	      <div class="modal-body">
			<div class="row mid-row">
			    <div class="col-xs-1" ></div>
			    <div class="col-xs-10"  style="padding: 10px 34px;">
		    			<span style="font-size: 300%; text-align: left; ">
							<a onclick="faceClick();">&#128544;</a>
							<a onclick="faceClick();">&#128528;</a>
							<a onclick="faceClick();">&#128512;</a>
	
						</span>
			    </div>
			    <div class="col-xs-1" ></div>
			</div>	
	
	      </div>
	   </div>
	  </div>
	</div>
	
	</div>

	<script>
		finished_rendering();
	</script>
</body>

