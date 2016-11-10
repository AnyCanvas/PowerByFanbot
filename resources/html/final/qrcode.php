	<title>¡Bravo!</title>
	<?php require_once( "resources/html/header.php" ); ?>
  	<script>
	  	ga("send", "event", "<?php echo $_SESSION['fnbt']['id']; ?>", "step 3", "<?php echo $_SESSION['fnbt']['config']['type'];?> success");
	    function showModal(){
		  $('#modalShop').openModal();
		}
		
		function hideModal(){
		  if($("#shopCode").val() == "<?php echo ord (substr($_SESSION['fnbt']['config']['type'], 0) ) . ord ( substr($_SESSION['fnbt']['config']['type'], 1) )?>"){
		    $('#modalShop').closeModal();
		  }
		}
  	</script>
    <body>


	<div class="container-fluid" style="height: 100%; width: 100%">

<?php  if(true){// if( ($_SESSION['fnbt']['credit'] % 4) != 0){ ?>
	<div id="upper-div" style="height: 100%; background-color: "white";">

		<div id="code" class="hide">
		<p>Escanea este código para canjear premio</p>
		<div id="qrcode" class="centered" style="width:300px; height:300px; margin-top:15px; margin: auto; padding-top: 10vh;"></div>
		<p>98300</p>
		</div>

		<div id="text">
			<div class="centered" style="width:300px; height:300px; margin-top:15px; margin: auto; padding-top: 10vh;" style="valign-wrapper">
				<p style="valign">¡Ganaste!</p>
				<p style="valign">20% de descuento en este servicio</p>
			</div>
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
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 300,
	height : 300
});

function makeCode () {		
	
	qrcode.makeCode("http://fanbot.me");
}

makeCode();

</script>
    </body>
  </html>
  
 