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
      <h4>Selecciona tu edad</h4>
		  <div class="row">
		    <div class="input-field col s6">
			  <form id="ageForm">
				<div class="container" style="margin-top:150px;">
				<h1>jQuery Birthday Picker Demos</h1>
				<h4>Default Settings</h4>
							<div id="default-settings"></div>
							<h4>Default Birthday [defaultDate: 01-03-1980]</h4>
							<div id="default-birthday"></div>
							<h4>maxYear: 2020, maxAge: 65, defaultDate: 01-03-1980</h4>
							<div id="max-year-birthday"></div>
							<h4>maxYear: 2020, monthFormat:short maxAge: 65, defaultDate: 01-03-1980</h4>
							<div id="short-month-birthday"></div>
							<h4>maxYear: 2020, monthFormat:long maxAge: 65, defaultDate: 01-03-1980, sizeClass:span3</h4>
							<div id="long-month-birthday"></div>
				</div>
			  </form>
		    </div>
		  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" onclick="checkAge();" class="waves-effect waves-green btn-flat">Continuar</a>
    </div>
  </div>	
	<script>
	$("#default-settings").birthdayPicker();	
					$("#default-birthday").birthdayPicker({"defaultDate":"01-03-1980"});
					$("#max-year-birthday").birthdayPicker({
						"defaultDate": "01-03-1980",
						"maxYear": "2020",
						"maxAge": 65
					});
					$("#short-month-birthday").birthdayPicker({
						"defaultDate": "01-03-1980",
						"maxYear": "2020",
						"maxAge": 65,
						"monthFormat":"short"
					});
					$("#long-month-birthday").birthdayPicker({
						"defaultDate": "01-03-1980",
						"maxYear": "2020",
						"maxAge": 65,
						"monthFormat":"long",
						"sizeClass": "span3"
					});			
	</script>
	<?php
}
	
?>
    </body>    

  </html>
</body>
