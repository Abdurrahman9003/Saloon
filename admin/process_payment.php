<?php
session_start();
include('includes/dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = mysqli_real_escape_string($con, $_POST['customer_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $payment_method = mysqli_real_escape_string($con, $_POST['payment_method']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $transaction_date = date('Y-m-d H:i:s');

    // Validate required fields
    if (empty($customer_name) || empty($email) || empty($payment_method) || empty($amount)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
        exit();
    }

    // If payment method is credit_card or paypal, card details should be filled
    if (($payment_method == 'credit_card' || $payment_method == 'paypal') && 
        (empty($_POST['card_number']) || empty($_POST['expiry']) || empty($_POST['cvv']))) {
        echo "<script>alert('Card details are required!'); window.history.back();</script>";
        exit();
    }

    // Extract card details if necessary
    $card_number = isset($_POST['card_number']) ? mysqli_real_escape_string($con, $_POST['card_number']) : '';
    $expiry = isset($_POST['expiry']) ? mysqli_real_escape_string($con, $_POST['expiry']) : '';
    $cvv = isset($_POST['cvv']) ? mysqli_real_escape_string($con, $_POST['cvv']) : '';

    // Insert into database
    $query = "INSERT INTO payment (customer_name, email, payment_method, card_number, amount, transaction_date) 
              VALUES ('$customer_name', '$email', '$payment_method', '$card_number', '$amount', '$transaction_date')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Payment processed successfully!'); window.location.href='payment_success.php';</script>";
    } else {
        echo "<script>alert('Error processing payment. Try again!'); window.history.back();</script>";
    }
}
?>
