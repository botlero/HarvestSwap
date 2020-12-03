<?php
        include('includes/Header.php');
?>
<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<script>
function goBack() {
  window.history.back();
}
</script>
  <title>phpt</title>
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



</style>
<br>
 <form>
 
 <?php
//echo("<p> value of session variable is".$_SESSION["gardener_user_name"]."</p>");
    
    $servername = "localhost";
    $dbname = "HarvestSwap";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT first_name, last_name, gardener_address, email,gardener_image,gardener_bio from gardener Where gardener_user_name = '".$_GET["gardener_user_name"]."'";

    $result = $conn->query($sql);
    
        if($row = $result->fetch_assoc()) {
          
            echo "<img src=\"". $row["gardener_image"]."\"width=\"250\" height=\"250\"/> <br>"; 
            echo "<h2>Harvestor Profile</h2>";
            echo "<label><b>First Name: </b></label>".
            "<label>".$row["first_name"]."</label> <br> <br>";
            echo "<label><b>Last Name: </b></label>".
            "<label>".$row["last_name"]."</label> <br> <br>";
            echo "<label><b>Address: </b></label>".
            "<label>".$row["gardener_address"]."</label> <br> <br>";
            echo "<label><b>Email: </b></label> ".
            "<label>".$row["email"]."</label> <br> <br>";
            echo "<label><b>Bio: </b></label> ".
            "<label>".$row["gardener_bio"]."</label> <br> <br>";
            
            
                     
        } 
    
    ?>  
    <br>
   
    </form>
    <br>
    </body>
    </html>
    <?php
        include('includes/Footer.php');
?>