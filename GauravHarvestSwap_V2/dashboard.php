<?php
        include('includes/Header.php');
?>

<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome to dashboards</title>
</head>
<body>

<h1>Welcome to dashboards</h1>
   
  <?php
  
    
    $Username   = $_GET["Username"];
    $password = $_GET["password"];
    

    require "dbDetails.php";
    require "DBservices.php";

   $result = $conn->query($loginCheckSql);
   $row = $result->fetch_assoc();
    $rowcount=mysqli_num_rows($result);
    echo("<p>".$loginCheckSql."</p>");
    echo("<p> rowcount is : ".$rowcount."</p>");
    if ($rowcount==0){
                echo("<p> WRONG : ".$rowcount."</p>");
                header("Location:login.php");
                session_destroy();
    }
    else{
        $_SESSION["username"]=$row['username'];
        echo("<p>  ".$rowcount."</p>");
      echo("<p> username in the session is ".$_SESSION["username"]."</p>");
    }
  ?>

</body>
</html>
<?php
        include('includes/Footer.php');
?>
