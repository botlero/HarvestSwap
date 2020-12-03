<?php
        include('includes/Header.php');
?>
<?php
session_start();


?>

<!DOCTYPE html>

<html>
<head>

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


input[type=button], select {
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
</head>
<body>
<br>
<form a> 
    <div class="container">
            
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
    
    $sql = "SELECT gardener_id from gardener Where gardener_user_name = '".$_SESSION["gardener_user_name"]."'";

    $result = $conn->query($sql);
    
        if($row = $result->fetch_assoc()) {
         
          $sql =  "insert into harvest(gardener_id,harvest_name,harvest_image,harvest_date,harvest_qty,harvest_description) values('".
          $row["gardener_id"]."','".$type."','".$pic."','".$ddate."','".$quant."','".$descr."')";

          if ($conn->query($sql) === TRUE) {

            
          echo "<h2>Listing created successfully<h2>";

          

          echo "<input type=\"button\" value=\"View Your Listings\" onClick=\"document.location.href='mylistings.php'\" /> "; 
          
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
              }

$conn->close();

        }
    
    
            
?>
         </div>
        
        
         </form>

         <br>

</body>
</html>
<?php
        include('includes/Footer.php');
?>








