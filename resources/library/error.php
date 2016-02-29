<!DOCTYPE html>
<html>
	<title>!Upss¡</title>
	<?php require_once( "../html/header.php" ); ?>



<body <?php if($_SESSION['fnbt']['id'] == "PF-B1-LTM-0001"){ echo 'style="background-color: #004485;"'; }?>>

	<script>
				<?php switch ($_SESSION['error']){
					case 0:
			    	   echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error already activated");';
					   break;
					case 1:
			    	   echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error fanbot disconnected");';
						break;
					case 2:
			    	   echo '	ga("send", "event", "'. $_SESSION['fnbt']['id'] .'" , "step 3", "error fanbot suspended");';
						break;
	
					}
				?>
	</script>

	<div class="container-fluid">

	 <?php if($_SESSION['fnbt']['id'] != "PF-B1-LTM-0001"){ ?>

	<!-- Fanbot logo columns-->
	  <div class="center-block" style="width: 220px; height: 415px; padding-top: 50%">
	    	<img class="img-responsive" alt="Fanbot" src="../../media/images/<?php switch ($_SESSION['error']){
				case 0:
		    	   echo 'upss.png';
				   break;
				case 1:
					echo 'disconnected.png';
					break;
				case 2:
					echo 'suspended.png';
					break;

				}
			?>">
	  </div>

	  <?php } else {?>
	  <div class="center-block" style="width: 220px; height: 415px; padding-top: 50%">
	    <img class="img-responsive" alt="Fanbot" src="media/clients/centinela/upss.jpg">
	  </div>
	  <?php }?>

	</div>
</body>
</html>