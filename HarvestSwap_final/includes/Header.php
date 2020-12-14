<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
<script>
function myFunction() {
  alert("You are being logged out of the system!");
}
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>HarvestSwap</title>
</head>

<body>
	<header>
		<div class="header">
   			<img src="images/harvet-swap-logo-big.png" alt="Fresh Produce">
			<h2>Home Grown Fresh Produce, Swap With A Neighbor!</h2>
		</div>

    <?php if( isset($_SESSION['gardener_user_name']) && !empty($_SESSION['gardener_user_name']) )
{
?>
      <div class="navbar">

      <a href="dashboard.php"><i class="fas fa-home"></i>Welcome</a> 
  <a href="howitworks.php"><i class="fa fa-fw fa-info"></i> How It Works</a> 
  <a href="HarvestSwapResults.php"><i class="fas fa-people-arrows"></i> SwapCenter</a> 
  <a href="myProfile.php"><i class="fa fa-fw fa-address-card"></i> My Profile</a>
  <a href="logout.php" onclick="myFunction()"><i class="fa fa-fw fa-key"></i> Logout</a>

</div>
<?php }else{ ?>
  <div class="navbar">
  <a href="dashboard.php"><i class="fas fa-home"></i>Welcome</a> 
  <a href="howitworks.php"><i class="fa fa-fw fa-info"></i> How It Works</a> 
  <a href="HarvestSwapResults.php"><i class="fas fa-people-arrows"></i> SwapCenter</a> 
    <a href="createAccount.php"><i class="fa fa-fw fa-user"></i> Create Account</a>
  <a href="login.php"><i class="fa fa-fw fa-key"></i> Login</a>


 
</div>
<?php } ?>

</header>



    