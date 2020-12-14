<?php
  include('includes/Header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Test</title>
</head>
<body>
<style>

form {
    text-align: center;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 350px;
  margin: auto;
  align: left;
  border: 2px solid #73AD21;
}

input[type=submit], select {
  background-color: #99cc00;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<br>
  <form action="harvesterProfile.php" method="get">
 <?php
//echo("<p> value of session variable is".$_SESSION["gardener_user_name"]."</p>");
$gardener_user_name   = $_GET["gardener_user_name"];
$harvest_id      = $_GET["harvest_id"];
    $servername = "localhost";
    $dbname = "HarvestSwap";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
  
    $sql = 
    "SELECT harvest_name, harvest_image, harvest_date, harvest_qty, harvest_description, first_name, last_name, gardener_address,harvest_image,gardener_user_name,
    email FROM harvest join gardener on gardener.gardener_id = harvest.gardener_id Where harvest_id='".$harvest_id."'" ;

    $result = $conn->query($sql);
    
        if($row = $result->fetch_assoc()) {
            
          echo "<img src=\"". $row["harvest_image"]."\"width=\"250\" height=\"250\"/> <br>"; 
            echo "<h2>Harvest Details</h2>";
            echo "<label><b>Harvest Type: </b></label>".
            "<label>".$row["harvest_name"]."</label> <br> <br>";
            echo "<label><b>Quantity: </b></label>".
            "<label>".$row["harvest_qty"]."</label> <br> <br>";
            echo "<label><b>Description: </b></label>".
            "<label>".$row["harvest_description"]."</label> <br> <br>";
            echo "<label><b>Location: </b></label> ".
            "<label>".$row["gardener_address"]."</label> <br> <br>";
            echo "<label><b>Harvester Contact: </b></label> ".
            "<label>".$row["email"]."</label> <br> <br>";
            echo "<label> <a href=\"mailto:".$row["email"]."\">Click Here to Contact</a></label> <br> <br>";
            
              echo 
              "<input type=\"hidden\" name=\"gardener_user_name\" value=\"".$row["gardener_user_name"]."\" >".
              "<input type=\"submit\" value=\"View Harvester Profile\">";
       
        
        }
    ?>  
   
    </form>
<br>
    </body>
    </html>
    <?php
      include('includes/Footer.php');
    ?>
   


