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
session_start();
session_unset();
session_destroy();
echo "You have successflly logged out";
echo '<br><a href="../index.php">Return home</a>';
?>
