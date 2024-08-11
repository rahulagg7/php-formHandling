<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "POST">
        <input type = "text" name = "name" placeholder="Enter your name"><br>
        <input type = "text" name = "email" placeholder = "Enter your email"><br>
        <button type = "submit">Submit</button><br>
    </form>
</body>
<?php
include 'detailsdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO details (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "details saved in db";
    }
}
?>
</html>