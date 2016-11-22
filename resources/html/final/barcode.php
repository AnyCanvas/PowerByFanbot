	<title>¡Bravo!</title>
	<?php require_once( "resources/html/header.php" ); ?>
  	<script>
	  	ga("send", "event", "<?php echo $_SESSION['fnbt']['id']; ?>", "step 3", "<?php echo $_SESSION['fnbt']['config']['type'];?> success");


		$(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('#modalShop').modal();
		  });
		
	    function showModal(){
		  $('#modalShop').modal('open');
		}
		
		function hideModal(){
		  if($("#shopCode").val() == "<?php echo ord (substr($_SESSION['fnbt']['config']['type'], 0) ) . ord ( substr($_SESSION['fnbt']['config']['type'], 1) )?>"){
		  	$('#modalShop').modal('close');
		  }
		}

		window.onload = function(){
      JsBarcode(".barcode").init();

			$(".jqbarcode").JsBarcode().init();

      JsBarcode("#barcode1").init();
      $("#barcode2").JsBarcode().init();
      JsBarcode("#barcode3").init();
		}
	</script>
    <body>


	<div class="container-fluid" style="height: 100%; width: 100%">
<?php if( ($_SESSION['fnbt']['credit'] % 4) != 0){ ?>
		<div id="upper-div" style="height: 100%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; padding-top: 22vh;">
			
	<svg class="barcode centered"
		jsbarcode-value="123456789010"
		jsbarcode-format="ean13"
		jsbarcode-textMargin="0"
		jsbarcode-lineColor="#00"
		style="display: block; margin: auto;" sty>
	</svg>

	    <a onclick="showModal();" class="waves-effect waves-light btn white-text btn-centered red darken-3" style=" bottom: 0; position: absolute; width: 100vw; left: 0vw;"><i class="material-icons left">arrow_forward</i>SOY EL ENCARGADO</a>
		</div>
	</div>
	
    <!-- Modal Shop -->
    <div id="modalShop" class="modal bottom-sheet">
      <div class="modal-content">
        <h4>Introduce el código de la tienda</h4>
        <input placeholder="Codigo" id="shopCode" type="password">
      </div>
      <div class="modal-footer">
        <a class="waves-effect waves-green btn-flat" onclick="hideModal();">Aceptar</a>
      </div>
    </div>
    
<?php } else { ?>
		<div id="upper-div" style="height: 100%; background-color: <?php echo $_SESSION['site']['bgcolor'] ?>; background-image: url(./media/clients/<?php echo $_SESSION['site']['dir'] ?>/lose.png); background-repeat: no-repeat; background-position: center top; background-size: 100% auto;">
		</div>
	</div>
<?php } ?>
    </body>
  </html>
  
 