<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Debugging: Print hashed password for testing
    echo "Testing Hashed Password: " . password_hash("yourpassword", PASSWORD_DEFAULT) . "<br>";

    // Hash the entered password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Debugging: Print the actual stored hash
    echo "User Entered Password Hash: " . $hashedPassword . "<br>";

    $query = mysqli_query($con, "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$hashedPassword')");
    
    if ($query) {
        echo "<script>alert('Registration Successful. You can now make bookings.'); window.location.href='appointment.php';</script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Barber Shop</title>
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
            padding: 30px;
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
            left: 189px;
        }

        .signup-box .signup {
            position: relative;
            bottom: -14px;
            left: -73px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <h2>Create An Account</h2>
            <p>Your Style Journey Begins Here!</p>
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit">Register</button>
            </form>
            <div class="signup">
                <label class="text">Already Registered? <a href="login.php">Go to Login</a></label>
            </div>
        </div>
    </div>
</body>
</html>
