<?php
	session_start();
	$_SESSION['pageNumber'] = 1;
	include '../resources/library/functions.php'; 
	?>
<html>
<head>
	<title>Bienvenido a Fanbot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap-social.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-65249445-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script>
			  var browserAgent = navigator.userAgent
			  if (browserAgent.indexOf("iPhone") > -1){
			   		window.location.replace("../node.php?name=lol");
			   } else if (browserAgent.indexOf("Android") > -1){
			   		if (browserAgent.indexOf("Android 5") > -1){
			   		window.location.replace("../node.php?name=lol");
			   		} else if (browserAgent.indexOf("Android 4.4") > -1){
				   		window.location.replace("../node.php?name=lol");
			   		} else {
			   		window.location.replace("../node.php?name=lol");
			   		}
			  } else {
			   	$(function(){ $("body").load("./desktop.php"); });					  
			  }
	</script>
	<style>
		body{
			
		}
	</style>
</head>
</head>
<body>


</body>