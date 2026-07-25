<?php require 'config/db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $stmt = $conn->prepare("INSERT INTO staff (first_name, last_name, department, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['first_name'], $_POST['last_name'], $_POST['department'], $_POST['email']);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html><html><head><title>Add Staff</title><link rel="stylesheet" href="style.css"></head><body>
<h1>Add New Staff</h1>
<form method="POST">
<input type="text" name="first_name" placeholder="First Name" required>
<input type="text" name="last_name" placeholder="Last Name" required>
<input type="text" name="department" placeholder="Department" required>
<input type="email" name="email" placeholder="Email" required>
<button type="submit">Add Staff</button></form><a href="index.php">Back</a></body></html>
