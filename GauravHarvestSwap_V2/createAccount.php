<?php
        include('includes/Header.php');
?>


<!DOCTYPE html>
<html>
   <body>
      <h2>CREATE ACCOUNT</h2>
      <form action="login.php" method="get">
         <label for="NameSearch">Username</label><br>
         <input type="text" name="Username"> <br>
          <label for="email">Email</label><br>
         <input type="text" name="email"> <br>
          <label for="password">Password</label><br>
         <input type="text" name="password"> <br>
          <label for="repassword">Re-Enter Password</label><br>
         <input type="text" name="Re-Enter"> <br>
         <label for="firstname">First Name</label><br>
         <input type="text" name="firstname"> <br>
         <label for="lastname">Last Name</label><br>
         <input type="text" name="lastname"> <br>
         <label for="Bio">Bio</label><br>
         <textarea id="bio" name="bio" rows="4" cols="50">Enter you Bio here......</textarea><br>
           <label for="cars">Choose the location:</label><br>
           <select id="location" name="location">
           <br>
             <option value="College Park, MD">College Park, MD</option>
             <option value="Rockville, MD">Rockville, MD</option>
             <option value="Elicott City, MD">Elicott City, MD</option>
             <option value="Clarksville, MD">Clarksville, MD</option>
         </select> 
         <br>
         <br>
         <input type="submit" value="Submit">

     </form>
 </body>
</html>
<?php
        include('includes/Footer.php');
?>