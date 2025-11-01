<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // Prepare statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        echo "<script>alert('User not found! Please check your email.');</script>";
        exit();
    }

    // Debugging: Check stored hash and entered password
    error_log("Stored Hash: " . $user['password']);
    error_log("Entered Password: " . $password);

    // Verify the password
    if (isset($user['password']) && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];

        echo "<script>alert('Login Successful!'); window.location.href='appointment.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Barber Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #222;
            color: #fff;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://salooon-front-end.vercel.app/assets/Auth%20background-B3cUF8Q-.jpg');
            background-size: cover;
            background-position: center;
        }
        .signup-box {
            background: rgba(0, 0, 0, 0.8);
            padding: 52px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 320px;
        }
        .signup-box h2 {
            margin-bottom: 20px;
        }
        .signup-box input {
            width: 90%;
            padding: 10px;
            margin: 15px 0;
            border: none;
            border-radius: 5px;
        }
        .signup-box button {
            background: #aa9144;
            border: none;
            padding: 10px;
            width: 60%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 0 auto;
        }
        .signup-box a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-top: -18px;
            position: relative;
            left: 207px;
        }
        .signup-box .signup {
            position: relative;
            bottom: -14px;
            left: -99px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <h2>Login</h2>
            <p>Welcome back!</p>
            <form method="POST" action="">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <div class="signup">
                <label>New here? <a href="signup.php">Register Now</a></label>
            </div>
        </div>
    </div>
</body>
</html>
