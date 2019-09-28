<?php
session_start();
$givenemail = $_POST["emailid"];
$givenpass = $_POST["passw"];

$passhash =

$conn = new mysqli("localhost", "root", "", "student");

if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}

$sql = "select firstname, lastname, password, sid from users where email = '$givenemail'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $_SESSION["passhash"] = $row["passhash"];
    $_SESSION["firstname"] = $row["firstname"];
    $_SESSION["lastname"] = $row["lastname"];

    if (!password_verify($_SESSION['passhash'], $passhash)) {
        header("Location:user_account.php");

    } else {
        $msg = "The password you entered is wrong!";
    }

}
$msg = "No such user exists!";
?>
<html>
<h1><?php if (isset($msg)) echo 'Registration Failed'; else echo'Registration Success'; ?></h1>
<div>
    <img src="<?php if (!isset($msg)) echo 'undraw_High_five_u364.svg'; else echo'undraw_cancel_u1it.svg'; ?>" width="400px" height="400px"><br>
    <p><?php if (isset($msg)) echo $msg; ?></p>
    <a href="<?php if (isset($msg)) echo 'registration.html'; else echo'user_account.php'; ?>"> <button><?php if (isset($msg)) echo "Retry"; else echo"Continue to my account"; ?></button></a>
</div>
</html>
