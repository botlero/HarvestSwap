<?php
        include('includes/Header.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login Page </title>
  
</head>
<body>
<style>

form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 600px;
  margin: auto;
  align: left;
  border: 2px solid #73AD21;
}

input[type=text], select {
  width: 555px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
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

  textarea {
  width: 555px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  }
  
input[type=password], select {
  width: 555px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}
</style>
<br>
 <form action="dashboard.php" method="get">
 <h2>Login</h2>
         <label for="NameSearch">Username</label><br>
         <input type="text" name="gardener_user_name"> <br>
          
          <label for="password">Password</label><br>
         <input type="password" name="gardener_password"> <br>
         <input type="submit" value="Submit" >

  </form>
  <br>
  <?php
 //echo("<p> value of session variable is".$_SESSION["gardener_user_name"]."</p>");
  if (isset($_GET["gardener_user_name"])){

    $gardener_user_name   = $_GET["gardener_user_name"];
    $email      = $_GET["email"];
    $gardener_password = $_GET["gardener_password"];
    $first_name   = $_GET["first_name"];
    $last_name      = $_GET["last_name"];
    $gardener_bio = $_GET["gardener_bio"];
    $gardener_address   = $_GET["gardener_address"];
    $gardener_image   = $_GET["gardener_image"];

  

  require "DBservices.php"; 
    //  echo ("<p> ".$insertUserSql."<p>");   
       
    require "dbDetails.php";
    
    if ($conn->query($insertUserSql) === TRUE) {
  //echo "New record created successfully";
    } else {
  echo "Error: " . $insertUserSql . "<br>" . $conn->error;
      }

$conn->close();

    }
    
   
  ?>

</body>
</html>
<?php
        include('includes/Footer.php');
?>
