<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CUTTING CLUB SALON Payment Form</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script> new WOW().init(); </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Add styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .main-container {
            display: flex;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px;
        }
        .payment-container {
            background: #fff;
            padding: 38px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 580px;
            margin: auto;
            margin-top: 60px;
        }
        .payment-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #218838;
        }
        .card-details {
            display: block;
        }
    </style>
    <script>
        function toggleCardDetails() {
            var paymentMethod = document.getElementById("payment_method").value;
            var cardDetails = document.getElementById("card-details");
            
            if (paymentMethod === "cash") {
                cardDetails.style.display = "none";
            } else {
                cardDetails.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <div class="main-container">
        <?php include_once('includes/sidebar.php'); ?>
        <div class="content">
            <?php include_once('includes/header.php'); ?>
            <div class="payment-container">
                <h2><i class="fa fa-credit-card"></i> Payment Form</h2>
                <form action="process_payment.php" method="POST">
                    <div class="form-group">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" id="customer_name" name="customer_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="payment_method">Payment Method</label>
                        <select id="payment_method" name="payment_method" required onchange="toggleCardDetails()">
                            <option value="credit_card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                    <div id="card-details" class="card-details">
                        <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="form-group">
                            <label for="expiry">Expiry Date</label>
                            <input type="text" id="expiry" name="expiry" placeholder="MM/YY">
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="123">
                        </div>
                    </div>
                    <button type="submit" class="btn">Submit Payment</button>
                </form>
            </div>
            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>
</body>
</html>
