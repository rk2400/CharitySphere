<?php

require('connection.php');
require('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $payment_id = $_POST['transaction'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $today = date("Y-m-d");

    // Validate amount
    if ($amount >= 10000) {
        echo '<script>alert("Please email the details to us as the amount is higher than usual.");</script>';
    }
    // Validate date
    else if ($date > $today || strtotime($date) < strtotime("last Monday")) {
        echo '<script>alert("Date should not be in the future and should be within the present week.");</script>';
    }
    // Validate all fields are filled
    else if (empty($payment_id)) {
        echo '<script>alert("Transaction ID is mandatory.");</script>';
    } 
    else if (empty($amount)) {
        echo '<script>alert("Amount is mandatory.");</script>';
    } 
    else if (empty($date)) {
        echo '<script>alert("Date is mandatory.");</script>';
    } 
    else if (empty($name)) {
        echo '<script>alert("Name is mandatory.");</script>';
    } 
    else if (empty($email)) {
        echo '<script>alert("Email ID is mandatory.");</script>';
    } 
    else if (empty($phone)) {
        echo '<script>alert("Phone Number is mandatory.");</script>';
    } 
    
    else {

        $stmt = $con->prepare("INSERT INTO `donations` (`amount`, `payment_id`, `added_on`) VALUES (?, ?, ?)");
        $stmt->bind_param("dss", $amount, $payment_id, $date);

        $stmt2 = $con->prepare("INSERT INTO `spends` (`amount`, `date`) VALUES (?, ?)");
        $stmt2->bind_param("ds", $amount, $date);

        $stmt3 = $con->prepare("INSERT INTO `users` (`name`, `mail`, `mobile`) VALUES (?, ?, ?)");
        $stmt3->bind_param("sss", $name, $email, $phone);

        if ($stmt->execute() && $stmt2->execute() && $stmt3->execute()) {
            echo '<script>alert("Record has been submitted.");</script>';
            echo "Thank you. You donation has been recorded! You can close this page now.";            
        } else {
            echo "Error: Email Id or Phone Number is already used" . $stmt->error;
        }

        $stmt->close();
        $stmt2->close();
        $stmt3->close();
        
    }
}
