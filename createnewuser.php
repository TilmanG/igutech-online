<?php
session_start();
require_once('./header.php');
$newusername = $_POST['username'];
$newprivs = $_POST['priv'];
if($_POST['password'] != $_POST['password2'])
{
    echo "<script>
            window.onload = function() {
                 Materialize.toast('Password Missmatch!', 4000);
                 window.location.replace('./usermanager.php');
            };</script>
            ";
            die();
}
require_once('./mysqli_connect.php');
$password = $_POST['password'];

$encryptedpass = sha1($newusername.$password);
$sql = "INSERT INTO Users (username, password, priv)
VALUES ('$newusername', '$encryptedpass','$newprivs')";

if ($dbc->query($sql) === TRUE) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}
?> 