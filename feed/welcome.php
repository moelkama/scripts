<?php
// Start the session
ob_start();
session_start();

// Check if the username is stored in the session
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}

// Check if the "destroy" button is clicked
if (isset($_GET["destroy"])) {
    // Destroy the session and redirect back to the login page
    session_destroy();
    // header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .welcome-container {
            text-align: center;
        }

        h2 {
            color: #212529;
        }

        .logout-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h2>Welcome, <?php
         if(isset($_SESSION["username"]))
         {
            echo $_SESSION["username"];
         }
         else
         {
            echo "You should login first!!!";
         }
         ?>!</h2>
        <form method="post" action="logout.php">
            <input type="submit" name="logout" value="Logout" class="logout-btn">
        </form>
    </div>
</body>
</html>