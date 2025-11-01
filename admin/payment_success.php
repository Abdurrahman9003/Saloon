<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
    header('location:logout.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Successful - CUTTING CLUB SALON</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script> new WOW().init(); </script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <script>
        // Redirect after 3 seconds
        setTimeout(function() {
            window.location.href = "payment.php"; // Redirect to payment form
        }, 3000); // 3 seconds delay
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 600px;
        }

        .payment-container h2 {
            margin-bottom: 20px;
        }

        .alert {
            margin: 20px 0;
        }

        .btn {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <?php include_once('includes/sidebar.php'); ?>
        <div class="content">
            <?php include_once('includes/header.php'); ?>
            <div class="payment-container">
                <h2><i class="fa fa-check-circle"></i> Payment Successful</h2>
                <div class="alert alert-success">
                    <strong>Success!</strong> Your payment has been processed successfully.
                </div>
                <p>Thank you for your payment. We appreciate your business!</p>
                <p>You will be redirected to the payment form shortly.</p>
            </div>
        </div>
    </div>
</body>
</html>
