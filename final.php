<?php
	require 'resources/library/functions.php';
	session_start();

?>
<!DOCTYPE html>
<html>
<?php require_once( "resources/html/header.php" ); ?>

<?php

	if (isset($_SESSION['fnbt']['config']))	{
		if ( $_SESSION['error'] != "name" ){
			$deviceId = $_SESSION['fnbt']["deviceId"];
			$accesToken = $_SESSION['fnbt']['accesToken'];
			if($_SESSION['site']['prize'] == 'image' ){
				require_once("resources/html/final/shopcode.php");
			} else if($_SESSION['site']['prize'] == 'qr' ) 
			{
				require_once("resources/html/final/qrcode.php");
			} else if($_SESSION['site']['prize'] == 'bar' )
			{
				require_once("resources/html/final/barcode.php");
			} else if($_SESSION['site']['prize'] == 'classic' )
			{
				fanbotAction( $deviceId, $accesToken);
				require_once("resources/html/final/classic.php");				
			}
			if($_SESSION['action'] == 'rate'){
				$_SESSION['data'] = '{"q":"'. $_SESSION['q'] .'","a":"'. $_GET['a'] .'"}';
			}
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