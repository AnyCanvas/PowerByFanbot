<?php
	session_start();
	require 'resources/library/functions.php';

?>
<!DOCTYPE html>
<html>
<?php require_once( "resources/html/header.php" ); ?>

<?php

	if (isset($_SESSION['fnbt']['config']['type']))	{
		if (checkForDuplucatedLike() || $_SESSION['fnbt']['config']['type'] == 'post'){
			$deviceId = $_SESSION['fnbt']["deviceId"];
			$accesToken = $_SESSION['fnbt']['accesToken'];
			// If(fanbotAction( $deviceId, $accesToken)){
			// Agregado para el sistema de fanbot por medio de internet
			if($_SESSION['fnbt']['id'] == "FB-B1-SCM-00103" ){
				$color = colorCheck();
				fanbotAction( $deviceId, $accesToken);
				saveUserDataToDB();
				saveInteractionToDB();
				require_once("resources/library/successvideo.php");	
				sendGrid($color);			
// Fin de agregado por medio de internet.
			} else {
				fanbotAction( $deviceId, $accesToken);
				saveUserDataToDB();
	//			if ($_SESSION['fbUserId'] !== '120319224983556'){
				saveInteractionToDB();
	//			}			
				if ( !isset($_COOKIE["lastPost"])  &&  $_SESSION['fnbt']['config']['type'] == 'post')
					{ setcookie("lastPost", "1", time()+60*60*24); }

				require_once("resources/library/success.php");
	//		} else {
	//			$_SESSION['error'] = 2;
	//			require_once("resources/library/error.php");			
	//		}
			}
		} else {
				require_once("resources/html/error1.php");
			}
	} else {
			$_SESSION['error'] = 1;
			require_once("resources/html/error2.php");
		}
		
	session_unset();

?>