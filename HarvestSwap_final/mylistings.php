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
  padding: 15px 32px;
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
<h1 class= "placeholder">Your listings
    </h1>
    <form name="vegetable_lookup" method="GET" action="HarvestSwapResults.php">
      <input type="text" name="harvest_name" placeholder="Search By Harvest Name">
      
    <button class="button" type="submit">Submit</button>
    </form>

<table id=listing>
  <tr>
    <th>Harvest Type</th>
    <th>Quantity</th>
    <th>Harvest Date</th>
    <th>Location</th>
    <th>Harvestor</th>    
    <th>More Details</th>
    
    </tr>
  <?php
 
     $harvestname = $_GET["harvest_name"]; 
     if (is_null($harvestname))
      {
$harvestname = "";
}
         $sql = "SELECT * FROM harvest join gardener on  gardener.gardener_id = harvest.gardener_id 
         WHERE gardener_user_name = '".$_SESSION["gardener_user_name"]. "' and harvest_name LIKE CONCAT('%', ? , '%')";

   $stmt = $conn->prepare($sql);
   
    $stmt->bind_param("s", $harvestname);
    $stmt->execute();
    $result = $stmt->get_result();
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==0){
      echo( "<tr>"."<td> No Records Found"."</td>"."</tr>");
    }
    else{
   
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
    "<input type=\"hidden\" name=\"gardener_user_name\" value=\"".$row["gardener_user_name"]."\" >".
    "<input type=\"hidden\" name=\"harvest_id\" value=\"".$row["harvest_id"]."\" >".
    "<td><input type=\"submit\" value=\"Click Here for more Details\"></td>"
       ."</form>"
      );
     }
    }
     
          ?>
</table>

<?php
        include('includes/Footer.php');
?>