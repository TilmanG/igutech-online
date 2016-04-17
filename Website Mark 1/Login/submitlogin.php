<?php
session_start();
$isSecurepage = false;
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
require_once('../mysqli_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];


if(!isset($username) || trim($username) == '')
{
   echo "Please enter a valid username";
   require_once('./login.php');
   die();
}

$encryptedpass = sha1($username.$password);

$sql = "SELECT password FROM Users WHERE username = '$username'";

$result = $dbc->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $comparestring = $row["password"];
        if($encryptedpass == $comparestring) {
            echo "Login Successful!";
            $_SESSION['username'] = $username;
            echo '<br><a href="../index.php">Return home</a>';
            
        }else{
            echo "Username/password do not match database";
            require_once('./login.php');
            
        }
    }
} else {
     echo "Username/password do not match database";
     require_once('./login.php');
}

?> 