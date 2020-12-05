<?php

 include('includes/Header.php');
 session_start();


    $servername = "localhost";
    $dbname = "HarvestSwap";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
?> 

<style>


input[type=text], select {
  width: 600px;
  padding: 15px 32px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.button {
  background-color: #99cc00;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=submit], select {
  background-color: #99cc00;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=button], select {
  background-color: #555;
  border: none;
  color: #99cc00;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


#listing {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#listing td, #listing th {
  border: 1px solid #ddd;
  padding: 8px;
}

#listing tr:nth-child(even){background-color: #f2f2f2;}

#listing tr:hover {background-color: #ddd;}

#listing th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #99cc00;
  color: black;
}
</style>
<h1 class= "placeholder">Find Your Favourite Swap!
    </h1>
    <form name="vegetable_lookup" method="GET" action="HarvestSwapResults.php">
      <input type="text" name="harvest_name" placeholder="Search By Harvest Type">
     
    <button class="button" type="submit">Search Listing</button>
    
    
    <?php   if( isset($_SESSION['gardener_user_name']) && !empty($_SESSION['gardener_user_name']))
{ 
?><input type="button" value="Submit Your Listing" onClick="document.location.href='addlisting.php'" />
<?php }else {
  echo("<p style=\"color:red\"> Create account or login to submit your Harvest Listing!</p>");
}?>
    

    </form>

<table id=listing>
  <tr>
    <th>Harvest Type</th>
    <th>Quantity</th>
    <th>Harvest Date</th>
    <th>Location</th>
    <th>Harvestor</th>    
    <th>Gardener Username</th>
    <th>Harvest ID</th>
    <th>More Details</th>
    
    </tr>
  <?php

     $harvestname = $_GET["harvest_name"]; 
     if (is_null($harvestname))
      {
$harvestname = "";
}
         $sql = "SELECT * FROM harvest join gardener on  gardener.gardener_id = harvest.gardener_id WHERE harvest_name LIKE CONCAT('%', ? , '%')";

   $stmt = $conn->prepare($sql);
   
    $stmt->bind_param("s", $harvestname);
    $stmt->execute();
    $result = $stmt->get_result();

   
    while ($row = $result->fetch_assoc())
    {
      echo(
          " <form action=\"viewlisting.php\" method=\"get\">".   
          
    "<tr>".
    "<td>".$row["harvest_name"]."</td>".
    "<td>".$row["harvest_qty"]."</td>".
    "<td>".$row["harvest_date"]."</td>".
    "<td>".$row["gardener_address"]."</td>".
    "<td>".$row["gardener_user_name"]."</td>".
    "<td>"."#######<input type=\"hidden\" name=\"gardener_user_name\" value=\"".$row["gardener_user_name"]."\" ></td>".
    "<td>"."#######<input type=\"hidden\" name=\"harvest_id\" value=\"".$row["harvest_id"]."\" ></td>".
    "<td><input type=\"submit\" value=\"Click Here for more Details\"></td>"
       ."</form>"
      );
     }
     
          ?>
</table>

<?php
        include('includes/Footer.php');
?>