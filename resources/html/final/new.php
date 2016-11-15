<!DOCTYPE html>
<html>
	<title>¡Bravo!</title>
	<?php require_once( "resources/html/header.php" ); ?>
  	<script>
	  	ga("send", "event", "<?php echo $_SESSION['fnbt']['id']; ?>", "step 3", "<?php echo $_SESSION['fnbt']['config']['type'];?> success");
  	</script>

    <body>

	<div class="container-fluid white" style="height: 100%; width: 100%">
		<div id="upper-div" style="height: 100%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>;">
				  <script type="text/javascript">

	$(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal').modal();
	  });

	  	function modalShow(number){
		  	var price1 = $_SESSION['fnbt']['price1'];
		  	var price2 = $_SESSION['fnbt']['price2'];
		  	var price3 = $_SESSION['fnbt']['price3'];
		  	var price4 = $_SESSION['fnbt']['price4'];
		  	var price5 = $_SESSION['fnbt']['price5'];
		  	var price6 = $_SESSION['fnbt']['price6'];
		  	var price7 = $_SESSION['fnbt']['price7'];
		  	var price8 = $_SESSION['fnbt']['price8'];

		  	switch(number){
			  	case 1:
			  		$("#priceText").text(price1);
			  		break;
			  	case 2:
			  		$("#priceText").text(price2);
			  		break;
			  	case 3:
			  		$("#priceText").text(price3);
			  		break;
			  	case 4:
			  		$("#priceText").text(price4);
			  		break;
			  	case 5:
			  		$("#priceText").text(price5);
			  		break;
			  	case 6:
			  		$("#priceText").text(price6);
			  		break;
			  	case 7:
			  		$("#priceText").text(price7);
			  		break;
			  	case 8:
			  		$("#priceText").text(price8);
			  		break;

		  	}
		    $('#price').modal('open');
		 }
	  </script>
      <div class="container">
        <!-- Page Content goes here -->
	    <div class="row">
	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(1);" style="margin: auto auto; font-size: 8vh;color: white;">1</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(2);" style="margin: auto auto; font-size: 8vh;color: white;">2</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(3);" style="margin: auto auto; font-size: 8vh;color: white;">3</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(4);" style="margin: auto auto; font-size: 8vh;color: white;">4</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(5);" style="margin: auto auto; font-size: 8vh;color: white;">5</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(6);" style="margin: auto auto; font-size: 8vh;color: white;">6</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(7);" style="margin: auto auto; font-size: 8vh;color: white;">7</p>
			</div>
	      </div>

	      <div class="col s6 ball">
	      	<div class="valign-wrapper" style="height: 100%;">
			  <p class="valign" onclick="modalShow(8);" style="margin: auto auto; font-size: 8vh;color: white;">8</p>
			</div>
	      </div>
	    </div>
     </div>

		  <!-- Modal Structure -->
		  <div id="price" class="modal bottom-sheet">
		    <div class="modal-content">
		      <h4>El premio es:</h4>
		      <p id="priceText"></p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
		    </div>
		  </div>
		</div>
	</div>
    </body>
  </html>