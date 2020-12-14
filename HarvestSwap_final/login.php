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

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.pass {
  padding: 20px;
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
<script>

function validateForm() {
 
 if (document.forms["myForm"]["gardener_user_name"].value == "") {
   alert("Username must be filled out");
   return false;
 }
 else if (document.forms["myForm"]["gardener_password"].value == "") {
    alert("Password must be filled out");
    return false;
 }
 }
</script>
<br>



 <form name="myForm" onsubmit="return validateForm()" action="dashboard.php" method="get">
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
 if ($_SESSION["err"]=="Invalid Username or Password") {
  echo("<div class=\"alert\">
  <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  <strong>Login Failed!</strong> Invalid Username or Password.
  </div>");

 }
 
 else{
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

$result = $conn->query($usernameCheckSQl);
   $row = $result->fetch_assoc();
    $rowcount=mysqli_num_rows($result);
    //echo("<p>".$loginCheckSql."</p>");
    //echo("<p> rowcount is : ".$rowcount."</p>");
    if ($rowcount>0){
                echo("<div class=\"alert\">
                <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                <strong>Account Creation Failed!</strong> Username Already Exist. Click here <a href=\"createAccount.php\">Create Account</a> to start again!
              </div>");
             
            
                
                
    }
    else{
      if ($conn->query($insertUserSql) === TRUE) {
        echo("<div class=\"pass\">
                <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                <strong>Account Creation Successfull!</strong> Login with your credentials!
              </div>");
        //echo "New record created successfully";
          } else {
        echo "Error: " . $insertUserSql . "<br>" . $conn->error;
            }
    }
  

    
   

$conn->close();

  }
  }
   
  ?>

</body>
</html>
<?php
        include('includes/Footer.php');
?>
