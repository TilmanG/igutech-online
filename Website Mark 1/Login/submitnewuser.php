<?php
session_start();
$isSecurepage = true;
?>
<html>
    <head>
        <title> Igutech Online Interface </title>
        <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    </head>
<?php
require_once('../navigationbar.php');
?>
<?php
$isSecurepage = true;
?>
<html>
    <head>
        <title> Igutech Online Interface </title>
        <link rel="stylesheet" type="text/css" href="/stylesheet.css">
    </head>
<?php
require_once('/navigationbar.php');
?>
<?php
require_once('../mysqli_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$encryptedpass = sha1($username.$password);
$sql = "INSERT INTO Users (username, password)
VALUES ('$username', '$encryptedpass')";

if ($dbc->query($sql) === TRUE) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}

?> 