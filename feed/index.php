<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your authentication logic goes here
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your actual authentication logic
    if ($username == "11" && $password == "11") {
        // Authentication successful
        $_SESSION["username"] = $username;

        // Redirect to another page
        header("Location: welcome.php");
        exit;
    } else {
        // Authentication failed
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>    
</head>
<body>

    
    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form method="post" action="index.php">
        <div class="container">
            <div class="incontainer">
                <h1>LOGIN PAGE</h1>
                <label for="username">Username:</label>
                <input type="text" name="username" required><br>
        
                <label for="password">Password:</label>
                <input type="password" name="password" required><br>
        
                <input type="submit" value="Login">

            </div>
        </div>
    </form>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #9b59b6, #71b7e6);
        }
        .incontainer{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            height: 300px;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        input{
            margin: 10px;
            padding: 10px;
            width: 250px;
            border-radius: 5px;
            border: none;
        }
    </style>
</body>
</html>
