<?php
	include 'resources/library/functions.php'; 
//	session_start();

//	getSiteInfo($_SERVER['HTTP_HOST']);

//	if( $_SESSION['site']['name'] != NULL ){
			$_SESSION['fnbt']['name'] = $_SESSION['site']['name'];
//	} else{
//		if(isset($_SESSION['fnbt']['name'])){
//			unset($_SESSION['fnbt']['name']);
//		}
//	}
//	$_SESSION['page'] = 0;
	?>
<!DOCTYPE html>
<html>
<head>

<?php require_once( "resources/html/header.php" ); ?>
	<title>Bienvenido a Fanbot</title>
</head>

<?php require_once( "resources/html/index.php" ); ?>

</html>