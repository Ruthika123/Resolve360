<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM complaints");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>All Complaints</h1>
    <table border="1">
    <tr>
        <th>ID</th>
         <th>Name</th>
          <th>Status</th>
           <th>Action</th>
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
                  <td>
                    <a href="updateStatus.php>id=<?php echo $row['id']; ?>">
                        Resolve
</a>
</td>
</tr>
<?php
    }
    ?>
    </table>
</body>
</html>