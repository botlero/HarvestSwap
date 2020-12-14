<?php
	$servername = "localhost";
    $dbname = "HarvestSwap";
    $DBusername = "root";
    $DBpassword = "root";


    $conn = new mysqli($servername, $DBusername, $DBpassword, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
?>