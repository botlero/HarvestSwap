<?php
        include('includes/Header.php');
?>
<?php

session_start();
session_destroy();

header("Location:login.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page </title>
</head>
<body>



</body>
</html>
<?php
        include('includes/Footer.php');
?>
