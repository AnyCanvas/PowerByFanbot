<?php
	session_start();
	require 'resources/library/functions.php';

?>
<!DOCTYPE html>
<html>
<?php require_once( "resources/html/header.php" ); ?>

<?php

	if (isset($_SESSION['fnbt']['config']['type']))	{
		if (checkForDuplucatedLike()){
			$deviceId = $_SESSION['fnbt']["deviceId"];
			$accesToken = $_SESSION['fnbt']['accesToken'];
			if($_SESSION['fnbt']["deviceId"] != 'NA' ){
				fanbotAction( $deviceId, $accesToken);
				require_once("resources/html/final/classic.php");
			} else {
				require_once("resources/html/final/shopcode.php");
			}
			saveUserDataToDB();
			saveInteractionToDB();
		} else {
				require_once("resources/html/error1.php");
			}
	} else {
			$_SESSION['error'] = 1;
			require_once("resources/html/error2.php");
		}
		
	session_unset();

?>