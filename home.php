<?php
session_start();

// Redirect to login if not logged in
if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Handle logout
if(isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .logout-btn {
            padding: 8px 20px;
            background: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background: #d32f2f;
        }
        .welcome-box {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .last-login {
            color: #666;
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome-box">
        <h2>Welcome to my Home Page! </h2>
        <p>You have successfully logged in to your account.</p>
    
    <p>This is your simple home page. There's not much here, just the basics.</p>
    
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout" class="logout-btn">
    </form>
</body>
</html>