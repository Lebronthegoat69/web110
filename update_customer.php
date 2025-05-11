<?php

$conn = new mysqli("localhost", "root", "", "tech_support");

$id = $_POST['id'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$stmt = $conn->prepare("UPDATE customers SET firstName=?, lastName=?, email=?, phone=?, address=? WHERE customerID=?");
$stmt->bind_param("sssssi", $first, $last, $email, $phone, $address, $id);
$stmt->execute();

echo "Customer updated successfully.<br><a href='search_customer.php'>Back to Search</a>";
?>