<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Welcome</h2>

<p>Hello <?php echo $_SESSION["username"]; ?></p>

<a class="logout" href="logout.php">Logout</a>

</div>

</body>
</html>