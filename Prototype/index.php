<?php
$result = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if(empty($name) || empty($email) || empty($message)){
        $result = "Please fill in all fields.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = "Invalid email format.";
    } else {
        header('location: success.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>

<div class="contact-container">
    <h2>Get in Touch</h2>

    <form method="POST" action="">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Your name...">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="hello@example.com">
        </div>

        <div class="input-group">
            <label>Message</label>
            <textarea name="message" rows="5" placeholder="Your message here..."></textarea>
        </div>

        <button type="submit" class="submit-btn">Send Message</button>
    </form>

    <?php if($result != ""): ?>
        <div class="error-msg"><?php echo $result; ?></div>
    <?php endif; ?>
</div>

</body>
</html>