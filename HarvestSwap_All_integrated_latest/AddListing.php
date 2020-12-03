<?php
        include('includes/Header.php');
?>
<?php
session_start();


?>


<!DOCTYPE html>

<html>
<head>
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

input[type=date] {
  width: 555px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  }

  input[type=number] {
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
</head>
<body>
    <div class="container">
            <div class="form">
             <br>
                <form action="addListingDone.php" method="get">
                    <h2>Submit Harvest Listing</h2>
                    <label for="type">Harvest Type</label><br>
                    <input type="text" name="type"> <br>
                     <label for="pic">Photo Link</label><br>
                    <input type="text" name="pic"> <br>
                     <label for="ddate">Harvest Date</label><br>
                    <input type="date" name="ddate"> <br>
                    <label for="quant">Quantity</label><br>
                    <input type="number" name="quant"> <br>
                    <label for="descr">Description</label><br>
                    <input type="text" name="descr"> <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        <div id="todos">
            
         </div>
        </div>
        
    
        <br>
</body>
</html>
<?php
        include('includes/Footer.php');
?>