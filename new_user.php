<?php
session_start();
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$dob = $_POST["dob"];
$gender = $_POST["Gender"];
$mobile = $_POST["mobile"];
$pincode = $_POST["pincode"];
$tablename= users;

if ($gender == "Male") $gender = 1;
else $gender = 0;

$conn = new mysqli("localhost", "root", "", "student");

if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}

$sql = "select * from users where email = '$email'";
$result = mysqli_query($conn, $sql);
if($result) {
    if (mysqli_num_rows($result) > 0) $msg = "User already exists. Try with another email";
}
else {
    $passhash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "insert into $tablename values('$firstname', '$lastname', '$email', '$passhash', $mobile)";
    if (!mysqli_query($conn, $sql)) {
        $msg = "Couldn't create your account. Try again";
    }
    else{
        $_SESSION["password"] = $pass;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["lastname"] = $lastname;
        $_SESSION["sid"] = $sid;
    }
}