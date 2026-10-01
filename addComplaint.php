<?php
include "db.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

$name = $_POST['name'];
$complaint = $_POST['Complaint'];

$sql = "INSERT INTO complaints(name,complaint, status)
VALUES('$name','$complaint','pending')";

if(mysqli_query($conn,$sql)){
      echo "Complaint Added Succesfully";
    
}
else{
    echo "Complaint Failed to Add:" .
    mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Complaint</title>
     <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>