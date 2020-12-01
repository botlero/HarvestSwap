<?php
        include('includes/Header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page </title>
</head>
<body>


 <form action="dashboard.php" method="get">
         <label for="NameSearch">Username</label><br>
         <input type="text" name="Username"> <br>
          
          <label for="password">Password</label><br>
         <input type="text" name="password"> <br>
         <input type="submit" value="Submit" >

  </form>

  <?php
  
    

    $Username   = $_GET["Username"];
    $email      = $_GET["email"];
    $password = $_GET["password"];
    $firstname   = $_GET["firstname"];
    $lastname      = $_GET["lastname"];
    $bio = $_GET["bio"];
    $location   = $_GET["location"];

  

  require "DBservices.php"; 
      echo ("<p> ".$insertUserSql."<p>");   
       
    require "dbDetails.php";
    
    if ($conn->query($insertUserSql) === TRUE) {
  echo "New record created successfully";
    } else {
  echo "Error: " . $insertUserSql . "<br>" . $conn->error;
      }

$conn->close();

   
  ?>

</body>
</html>
<?php
        include('includes/Footer.php');
?>
