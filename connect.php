<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("database-1.cv844k8ow6yb.us-east-1.rds.amazonaws.com", "admin", "Nabeel123");
$ip = $_SERVER['SERVER_ADDR'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Print host information
echo "Connect Successfully for $ip. Host info: " . mysqli_get_host_info($link);
?>