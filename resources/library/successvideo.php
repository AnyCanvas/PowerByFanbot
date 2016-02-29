
<!DOCTYPE html>
<html>
<head>
	<title>¡Bravo!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<script src="../../js/common.js"></script></head>

<body>
	<div class="container-fluid">

	<!-- Fanbot logo columns-->
	  <div class="row top-row">
	    <div class="col-xs-2" ></div>
	    <div class="col-xs-8" >
	    	<img class="img-responsive" alt="Fanbot" src="media/images/titulo_1.png">
	    </div>
	    <div class="col-xs-2" ></div>
	  </div>

	<div class="clearfix visible-xs-block"></div>

	<!-- Live video-->
	  <div class="row">
	    <div class="col-xs-1" ></div>
	    <div class="col-xs-10" >
		    <div class="embed-responsive embed-responsive-16by9">
			    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S4HSB5fIi_o" frameborder="0" allowfullscreen></iframe>
			</div>
	    </div>
	    <div class="col-xs-1" ></div>
	  </div>

	<div class="clearfix visible-xs-block"></div>


		<div class="row mid-row">
		    <div class="col-xs-1" ></div>
		    <div class="col-xs-10 text-center leadinline-text" >
				<span style="color: white; font-size: 1.5em; ">Obtendrás un cupón con tu premio en tu correo:</span>
		    </div>
		</div>

	<div class="clearfix visible-xs-block"></div>
	<!-- Text columns-->
		<div class="row mid-row">
		    <div class="col-xs-1" ></div>
		    <div class="col-xs-10" >
		    	<p class="text-center text-nowrap" style="font-size: x-small; color: white;"> <?php echo $_SESSION['fbUserEmail']; ?></p>
		    </div>
		    <div class="col-xs-1" ></div>
		</div>
	</div>

	<div class="clearfix visible-xs-block"></div>


		<div class="row mid-row">
		    <div class="col-xs-1" ></div>
		    <div class="col-xs-10 text-center leadinline-text" >
				<span style="color: white; font-size: 1.5em; ">¿Como puedo usar Fanbot en mi negocio?</span>
		       <a type="button" class="btn btn-info btn-lg" href="https://www.facebook.com/fanbotme/videos/vb.1550316151894751/1625589094367456">Ve a la publicación y pregunta.</a>   
		    </div>
		</div>

</body>
</html>