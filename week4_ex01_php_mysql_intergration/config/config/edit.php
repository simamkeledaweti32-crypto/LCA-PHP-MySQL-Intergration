<?php require 'config/db.php'; $id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM staff WHERE id = ?");
$stmt->bind_param("i", $id); $stmt->execute(); $staff = $stmt->get_result()->fetch_assoc();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $stmt = $conn->prepare("UPDATE staff SET first_name=?, last_name=?, department=?, email=? WHERE id=?");
    $stmt->bind_param("ssssi", $_POST['first_name'], $_POST['last_name'], $_POST['department'], $_POST['email'], $id);
    $stmt->execute(); header("Location: index.php");
}
?>
<!DOCTYPE html><html><head><title>Edit Staff</title><link rel="stylesheet" href="style.css"></head><body>
<h1>Edit Staff</h1>
<form method="POST">
<input type="text" name="first_name" value="<?=$staff['first_name']?>" required>
<input type="text" name="last_name" value="<?=$staff['last_name']?>" required>
<input type="text" name="department" value="<?=$staff['department']?>" required>
<input type="email" name="email" value="<?=$staff['email']?>" required>
<button type="submit">Update Staff</button></form><a href="index.php">Back</a></body></html>
