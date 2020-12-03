
<?php

session_start();

?>

<?php
  //echo("<p> value of session variable is".$_SESSION["gardener_user_name"]."</p>");
  if (is_null($_GET["gardener_user_name"])){

    
    
  }
    else{
    $gardener_user_name   = $_GET["gardener_user_name"];
    $gardener_password = $_GET["gardener_password"];
    

    require "dbDetails.php";
    require "DBservices.php";

   $result = $conn->query($loginCheckSql);
   $row = $result->fetch_assoc();
    $rowcount=mysqli_num_rows($result);
    //echo("<p>".$loginCheckSql."</p>");
    //echo("<p> rowcount is : ".$rowcount."</p>");
    if ($rowcount==0){
                echo("<p> WRONG : ".$rowcount."</p>");
                header("Location:login.php");
                session_destroy();
    }
    else{
        $_SESSION["gardener_user_name"]=$row['gardener_user_name'];
        //echo("<p>  ".$rowcount."</p>");
      
    }
  }
 
  ?>

<?php
        include('includes/Header.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>Welcome to dashboards</title>
  <?php
  
  ?>
</head>
<body>

<h1>Welcome</h1>
   


</body>
</html>
<?php
        include('includes/Footer.php');
?>
