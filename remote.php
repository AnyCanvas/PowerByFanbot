<?php

	require 'resources/library/functions.php';
	session_start();
	$fnbtName = $_GET["name"];

	echo $fnbtName;
	findFnbt($fnbtName);
	fanbotAction( $_SESSION['fnbt']['deviceId'], $_SESSION['fnbt']['accesToken'] );
		
	session_unset();

?>