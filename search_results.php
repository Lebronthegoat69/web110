
<?php
$last_name = $_GET['last_name'];

$conn = new mysqli("localhost", "root", "", "tech_support");
$sql = "SELECT * FROM customers WHERE lastName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $last_name);
$stmt->execute();
$result = $stmt->get_result();
?>

<h2>Search Results</h2>
<table border="1">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?= $row['customerID'] ?></td>
        <td><?= $row['firstName'] . ' ' . $row['lastName'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
            <form method="get" action="edit_customer.php">
                <input type="hidden" name="id" value="<?= $row['customerID'] ?>">
                <button type="submit">Select</button>
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
