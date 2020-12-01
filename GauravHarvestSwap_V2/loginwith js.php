<!DOCTYPE html>
<html>
<head>
  <title>Login Page </title>
</head>
<body>

  <script>

    function show_confirm()
 {
      var r=confirm("Do You Really want to Refund money! Press ok to Continue ");
      if (r==true)
        {
        window.location="dashboard.php";
        return true;
        }
           else
        {
        alert("You pressed Cancel!");
        }
 }

  </script>

 <form  method="get">
         <label for="NameSearch">Username</label><br>
         <input type="text" name="Username"> <br>
          
          <label for="password">Password</label><br>
         <input type="text" name="password"> <br>
         <input type="button" value="Submit" onclick=show_confirm()>

  </form>

  <?php
  
    

    $Username   = $_GET["Username"];
    $email      = $_GET["email"];
    $password = $_GET["password"];
    $firstname   = $_GET["firstname"];
    $lastname      = $_GET["lastname"];
    $bio = $_GET["bio"];
    $location   = $_GET["location"];

  

  require "insertUserDetailsToDB.php"; 
      echo ("<p> from searchMusic.php: ".$sql."<p>");   
       
    require "dbDetails.php";
    
    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
      }

$conn->close();

   
  ?>

</body>
</html>

