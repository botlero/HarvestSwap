
 <?php
 include('includes/Header.php');
    $servername = "localhost";
    $dbname = "HarvestSwap";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
?> 
<h1 class= "placeholder">Find Your Favourite Swap!
    </h1>
    <form name="vegetable_lookup" method="GET" action="HarvestSwapResults.php">
      <input type="text" name="harvest_name" placeholder="Search By Harvest Name">
      
    <button type="submit">Submit</button>
    </form>

<table>
  <tr>
    <th>Harvest Type</th>
    <th>Quantity</th>
    <th>Harvest Date</th>
    <th>Location</th>
    <th>Harvestor</th>
    </tr>
  <?php
     $harvestname = $_GET["harvest_name"]; 
     if (is_null($harvestname))
      {
$harvestname = "";
}
         $sql = "SELECT * FROM harvest WHERE harvest_name LIKE CONCAT('%', ? , '%')";

   $stmt = $conn->prepare($sql);
   
    $stmt->bind_param("s", $harvestname);
    $stmt->execute();
    $result = $stmt->get_result();

   
    while ($row = $result->fetch_assoc())
    {
      echo("<tr>".
        "<td>".$row["harvest_name"]."</td>".
        "<td>".$row["harvest_qty"]."</td>".
        "<td>".$row["harvest_date"]."</td>"
       #"<td>".$row["gardener_address"]."</td>".
       #"<td>".$row["gardener_user_name"]."</td>".
      );
     }

          ?>
</table>

<?php
        include('includes/Footer.php');
?>
