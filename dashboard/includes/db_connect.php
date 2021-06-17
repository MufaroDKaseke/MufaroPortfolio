<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mufaro";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 

/* else {
	echo "Connection Sucessfull!!!";
} */


/*

***Test***

**Note that you are using MySQLi Procedural for database connections and operations.**


- Add else block to the if statement to see if connection succedded
- Research on other reliable test.
*/

?>