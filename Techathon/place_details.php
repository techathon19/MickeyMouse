<?php
session_start();
if (!isset($_SESSION["firstname"]) && !isset($_SESSION["lastname"])) {
    header("Location:login_form.html");
    die();
}

$conn = new mysqli("localhost", "root", "", "student");

if (!$conn) {
    $msg = "Database Connection failed: " . mysqli_connect_error();
    goto br;
}

$sql = "select * from places";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) <= 0)
    $msg = "Nothing to show here";


br:
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place detail</title>
</head>
<body>
<h1></h1>
</body>
</html>