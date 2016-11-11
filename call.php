<?php if (isset($_GET["qr"]) and isset($_GET["sucursal"]) ){
	
				
		require("resources/library/config.php");		
			$servername = $config["db"]["fanbot"]["host"];
			$username = $config["db"]["fanbot"]["username"];
			$password = $config["db"]["fanbot"]["password"];
			$dbname = $config["db"]["fanbot"]["dbname"];

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

					$sql = "UPDATE qr SET sucursal = '". $_GET["sucursal"] ."' WHERE code = '". $_GET["qr"] ."'";
					
					$result = $conn->query($sql);

					if ($conn->query($sql) === TRUE) {
					} else {
					    echo "Error";
					}											
					
			$conn->close();
		}
		
		?>