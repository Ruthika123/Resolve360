<?php

include "db.php";

$id = $_GET['id'];

$sql = "UPDATE complaints SET status='Resolved' WHERE id=$id";

mysqli_query($conn,$sql);

header("Location: admin.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateStatus</title>
     <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>