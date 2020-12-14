<?php
session_start();
?>

<html>
<head>
  <title>Welcome to dashboards</title>

</head>
<style>
.pass {
  padding: 10px;
  background-color: green;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php

$err="";
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
                $err="Invalid Username or Password";
                $_SESSION["err"]=$err;
                header("Location:login.php");
                
    }
    else{
        $_SESSION["gardener_user_name"]=$row['gardener_user_name'];
        $_SESSION["welcome_msg"]="Hello ".$row['gardener_user_name']."!";
       
        //echo("<p>  ".$rowcount."</p>");
     
    }

    
             

  }
   ?>
<?php
        include('includes/Header.php');
?>
<!DOCTYPE html>

<body>

<img src="images/Welcome 1.png" width=100% height=135%>

 </body>
</html>
<?php
        include('includes/Footer.php');
?>
