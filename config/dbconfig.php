<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   ="simpledb";
// Create connection
//$conn = new mysqli($host, $user, $pass, $db);
$conn = mysqli_connect($host, $user, $pass,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*else{

    echo "Connected successfully"."<br>";
}*/

?>