<?php;
?>

<!DOCTYPE html>
<html>
<head>
  <title>phpt</title>
</head>
<body>

 <p  style="height:200px">
</p>

 
 <?php
    $servername = "localhost";
    $dbname = "Harvest Swap";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
  
    $sql = 
    "SELECT harvest_name, harvest_image, harvest_date, harvest_qty, harvest_description, first_name, last_name, gardener_address,
    email FROM harvest join gardener on 
    gardener.gardener_id = harvest.gardener_id Where gardener_user_name = 'amarettos'";

    $result = $conn->query($sql);
    
        if($row = $result->fetch_assoc()) {
            echo "Harvest Type: ". $row["harvest_name"]. " <br> <br> <br> Quantity: ". $row["harvest_qty"]. 
            " <br> <br> <br> Description: " . $row["harvest_description"] . "<br> <br> <br> Location: ". $row["gardener_address"].
            "<br> <br> <br> Harvestor: " . $row["first_name"]. "<br> <br> <br> Harvestor Contact: " . $row["email"]. 
            "<br> <br> <br> Picture of Harvest: " . $row["gardener_image"];
            
        } 
       
    ?>  
    </body>
    </html>
    <?php;
    ?>
   
