<?php
        include('includes/Header.php');
?>
<?php
session_start();


?>

<!DOCTYPE html>
<html>
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
   <body>
   
   <br>
     
      <form action="login.php" method="get">
      <h2>CREATE ACCOUNT</h2>
         <label for="NameSearch">Username</label><br>
         <input type="text" name="gardener_user_name"> <br>
          <label for="email">Email</label><br>
         <input type="text" name="email"> <br>
          <label for="password">Password</label><br>
         <input type="password" name="gardener_password"> <br>
          <label for="repassword">Re-Enter Password</label><br>
         <input type="text" name="Re-Enter"> <br>
         <label for="firstname">First Name</label><br>
         <input type="text" name="first_name"> <br>
         <label for="lastname">Last Name</label><br>
         <input type="text" name="last_name"> <br>
         <label for="Bio">Bio</label><br>
         <textarea id="bio" name="gardener_bio" rows="4" cols="50">Enter you Bio here......</textarea><br>
         <label for="Bio">Addresses</label><br>
         <textarea id="bio" name="gardener_address" rows="4" cols="50">Enter you Bio here......</textarea><br>
         <label for="lastname">Share URL of your Image</label><br>
         <input type="text" name="gardener_image"> <br>
         <br>
         
         <input type="submit" value="Submit">
         <br>
         <br>
     </form>
     <br>
 </body>
</html>
<?php
        include('includes/Footer.php');
?>