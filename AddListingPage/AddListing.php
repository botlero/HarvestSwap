<?php
    $servername = "localhost";
    $dbname = "HarvestSwap";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $ID   = $_GET["ID"];
    $type   = $_GET["type"];
    $pic = $_GET["pic"];
    $ddate   = $_GET["ddate"];
    $quant      = $_GET["quant"];
    $descr = $_GET["descr"];
    
    
    
    $sql =  "insert into harvest(gardener_id,harvest_name,harvest_image,harvest_date,harvest_qty,harvest_description) values('".
                    $ID."','".$type."','".$pic."','".$ddate."','".$quant."','".$descr."')";
    
    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
      }

$conn->close();
            
?>
