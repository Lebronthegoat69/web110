<?php

if (!isset($_GET['id'])) {
    echo "No customer selected.";
    exit;
}

$conn = new mysqli("localhost", "root", "", "tech_support");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM customers WHERE customerID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$customer = $result->fetch_assoc();
?>

<h2>View/Update Customer</h2>
<form method="post" action="update_customer.php">
    <input type="hidden" name="id" value="<?= $customer['customerID'] ?>">
    <label>First Name:</label><input type="text" name="first_name" value="<?= $customer['firstName'] ?>"><br>
    <label>Last Name:</label><input type="text" name="last_name" value="<?= $customer['lastName'] ?>"><br>
    <label>Email:</label><input type="email" name="email" value="<?= $customer['email'] ?>"><br>
    <label>Phone:</label><input type="text" name="phone" value="<?= $customer['phone'] ?>"><br>
    <label>Address:</label><input type="text" name="address" value="<?= $customer['address'] ?>"><br>
    <label>Country Code:</label><input type="text" name="country_code" value="US" readonly><br><br>

    <button type="submit">Update Customer</button>
</form>

<br>
<a href="search_customer.php">Search Customers</a> |
<button onclick="window.location.href='search_customer.php'">Back</button>
