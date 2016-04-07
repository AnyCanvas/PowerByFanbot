<?php
	session_start();
	include 'resources/library/functions.php'; 

	?>
<!DOCTYPE html>
<html>
<?php require_once( "resources/html/header.php" ); ?>



<?php
    $loginUrl = 'https://www.facebook.com/dialog/oauth?client_id='.$config["fbApp"]["appId"].'&redirect_uri='.$config["urls"]["baseUrl"].'/node.php&scope=public_profile,email&response_type=code';	

	$postCodeUrl = 'https://www.facebook.com/dialog/oauth?client_id='.$config["fbApp"]["appId"].'&redirect_uri='.$config["urls"]["baseUrl"].'/node.php&scope=publish_actions&response_type=code';


			if(isset($_SESSION['page'])){
				
				if(isset($_GET['token'])){
					$_SESSION['page'] = 1;
				}

				switch ($_SESSION['page']) {

				    case 0:
 						$_SESSION['page'] = 1;
    					require_once("resources/html/login.php");
    					break;

				    case 1:
												
					    	if(isset($_GET["token"])){
						    	$tokenArray['access_token'] = $_GET["token"];
						    	$token = $object = json_decode(json_encode($tokenArray), FALSE);			    	
						    	getUserFbInfo($token);
						    } else if(isset($_GET["code"])){
						    	$token = fbCode2token($_GET["code"]);
						    	getUserFbInfo($token);
	    					} else {
								header("location: ./index.php");
								break;
							}

	 						$_SESSION['page'] = 2;

	 						if( isset($_SESSION['fnbt']['name']) ){
	    					    header("location: ./node.php?name=". $_SESSION['fnbt']['name']);
	    						} else {
									 require_once("resources/html/name.php");					    		 									    					    
	    					}
						    break;

				    case 2:

						if( isset($_GET["name"])){
						    $fnbtName  = htmlspecialchars($_GET["name"]);								
							if (findFnbt($fnbtName)) {								
								if($_SESSION['fnbt']['name'] == 'chappy'){
									$_SESSION['page'] = 3;
									require_once("resources/actions/facebook/develop.php");									
								} else if($_SESSION['fnbt']['status'] == 0){
									$_SESSION['error'] = 2;
									$_SESSION['page'] = 0;
									header("location: ./resources/library/error.php");
								} else if( !(fanbotStatus($_SESSION['fnbt']["deviceId"], $_SESSION['fnbt']['accesToken']) ) && $_SESSION['fnbt']["deviceId"] != NULL){
									$_SESSION['error'] = 1;
									$_SESSION['page'] = 0;
									require_once("resources/html/error2.php");									
								} else{	
									$_SESSION['page'] = 3;
									if ($_SESSION['fnbt']['config']['socialnetwork'] == 'facebook'){	
										if($_SESSION['fnbt']['config']['type'] == 'like'){	
											require_once("resources/actions/facebook/like.php");
										} else if ($_SESSION['fnbt']['config']['type'] == 'post'){
											require_once("resources/actions/facebook/post.php");
										}
									} else {
										header("location: ./index.php");
									}
								} 
							}else {
								header("location: ./name_error.php");
							}			
						} else {
							header("location: ./index.php");							
						}
				        break;

				    case 3:
							if($_SESSION['fnbt']['name'] == 'chappy'){
						    	$_SESSION['page'] = 4;
								require_once("resources/actions/facebook/devconfirm.php");									
							} else if ($_SESSION['fnbt']['config']['socialnetwork'] == 'facebook'){	
								if ($_SESSION['fnbt']['config']['type'] == 'post'){
									$_SESSION['page'] = 4;
									require_once("resources/actions/facebook/confirm.php");
								} else {
									header("location: ./index.php");									
								}
							} else {
								header("location: ./index.php");
							}
				        break;

				    case 4:
					    $_SESSION['page'] = 0;						
						if ($_SESSION['fnbt']['config']['type'] == 'post' && isset($_GET["code"]) ){
							fbPost($_GET["code"]);
							header("location: ./final.php");
						} else if (isset($_GET['code'])){
							$_SESSION['page'] = 3;
							require_once("resources/actions/surveys/rate.php");							
						} else {
							header("location: ./final.php");
						}						
				        break;

				    default:
						header("location: ./index.php");
				    	break;
				}
			} else {
				 header("location: ./index.php");				
			}
?>

</html>
