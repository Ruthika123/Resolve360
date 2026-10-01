<?php

include "db.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM complaints"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaints</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>My Complaints</h1>
    <table border"1">
        <tr>
             <th>ID</th>
             <th>Name</th>
            <th>Complaints</th>
            <th>Status</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['complaint']; ?></td>
            <td><?php echo $row['status']; ?></td>
</tr>
<?php
    }
    ?>
</table>

<br>
<a href="dashboard.html">Back to dashboard</a>
</body>
</html>