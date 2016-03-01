<?php
	session_start();
	include 'resources/library/functions.php'; 

	if( isset($_GET["name"]) ){
			$_SESSION['fnbt']['name'] = $_GET["name"];
	} else{
		if(isset($_SESSION['fnbt']['name'])){
			unset($_SESSION['fnbt']['name']);
		}
	}
	$_SESSION['page'] = 0;
	?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		// $config = array("urls" => array("baseUrl" => "http://". .$_SERVER['HTTP_HOST'] ."/"));
		$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>
	<script> alert('<?php echo $_SERVER['HTTP_HOST']; ?>');</script>

<?php require_once( "resources/html/header.php" ); ?>
	<title>Bienvenido a Fanbot</title>
</head>

<?php require_once( "resources/html/index.php" ); ?>

</html>