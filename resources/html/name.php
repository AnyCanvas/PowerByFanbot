<body>
	<script>
		function sendName(){
			window.location = "node.php?name=" + $("#fnbt-name-label").val();;
		}
	</script>
	<div class="container-fluid" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 55vh; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/fanbot_label.png); background-repeat: no-repeat; background-position: center center; background-size: 100% auto;">
		</div>
	    <footer style="height: 45vh;">
		      <p class="fnbt-name-text grey-text">Escribe la palabra de la etiqueta</p>
		      <form action="node.php" method="get" >
		      <input onfocus="makeBig();" onfocusout="makeSmall();" name="name" id="fnbt-name-label" class="fnbt-name-input white-text"></input>
		      </form>
			<a id="name-btn" style="display: none;" class="button-div btn-floating btn-large waves-effect green accent-2" onclick="sendName();"><i class="material-icons white-text">arrow_forward</i></a>

	    </footer>

	</div>

	<script>
			var browserAgent = navigator.userAgent;
			console.log(browserAgent);
			if (browserAgent.indexOf("iPhone") > -1){
				console.log("Changed class");
				$( 'img' ).addClass( 'img-fix' );
				$( '#upper-div' ).addClass( 'iphone-fix' );
				$( '#name-btn' ).addClass( 'button-div-iphone-fix' );
			}
			var makeSmall = function(){
//				$('#name-btn').hide('slow'); 
				if (browserAgent.indexOf("iPhone") > -1){
					console.log("Changed class");
					$( 'img' ).addClass( 'img-fix' );
					$( '#upper-div' ).addClass( 'iphone-fix' );
					$( '#name-btn' ).addClass( 'button-div-iphone-fix' );
	
				}
			}

			var makeBig = function (){
				$('#name-btn').show('slow');
				if (browserAgent.indexOf("iPhone") > -1){
					console.log("Changed class");
					$( 'img' ).removeClass( 'img-fix' );
					$( '#upper-div' ).removeClass( 'iphone-fix' );
					$( '#name-btn' ).removeClass( 'button-div-iphone-fix' );
	
				}
				
			}
	</script>
<?php if( $_SESSION['site']['dir'] == "pano"){
	?>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Selecciona tu edad para continuar</h4>
		  <div class="row">
		    <div class="input-field col s6">
			  <input id="date" type="date" class="datepicker">
		      <label class="active" for="date">Fecha de nacimiento</label>
		    </div>
		  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Continuar</a>
    </div>
  </div></script>	

  <script>
	    $('#modal1').openModal();
  </script>
	<?php
}
	
?>
    </body>    

  </html>
</body>
