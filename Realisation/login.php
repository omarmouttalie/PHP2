<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $correct_user = "admin";
    $correct_pass = "1234";

    if (empty($username) || empty($password)) {
        $error = "Fill all fields!";
    } elseif ($username === $correct_user && $password === $correct_pass) {
        $_SESSION["username"] = $username;
        setcookie("username", $username, time() + 3600);
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

    <?php if (!empty($error)) echo "<h5 style='color:red;'>$error</h5>"; ?>
</div>
</body>
</html>
