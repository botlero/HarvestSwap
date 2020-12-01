<?php
	$servername = "localhost";
    $dbname = "HarvestSwap";
    $username = "root";
    $password = "root";


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
?>