<?php require 'config/db.php'; $result = mysqli_query($conn, "SELECT * FROM staff ORDER BY id DESC"); ?>
<!DOCTYPE html><html><head><title>AfriStaff</title><link rel="stylesheet" href="style.css"></head><body>
<h1>AfriStaff Directory</h1><a href="add.php" class="btn">+ Add New Staff</a>
<table><tr><th>ID</th><th>First</th><th>Last</th><th>Dept</th><th>Email</th><th>Actions</th></tr>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<tr><td><?=$row['id']?></td><td><?=$row['first_name']?></td><td><?=$row['last_name']?></td>
<td><?=$row['department']?></td><td><?=$row['email']?></td>
<td><a href="edit.php?id=<?=$row['id']?>">Edit</a> | <a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('Delete?')">Delete</a></td></tr>
<?php endwhile; ?></table></body></html>
