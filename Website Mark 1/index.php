<?php
session_start();
$isSecurepage = false;
?>

<html>
    <head>
        <title> Igutech Online Interface </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
<?php
require_once('navigationbar.php');
?>
<body>
<p><b>Welcome to the igutech notebook interface v1.o</b><br></p>
<br>
<a href="./CreateNewNotePage.php">Submit a new note</a><br>
<a href="./newtask.php">Create a new task</a><br>
-----------------------<br>
<a href="./ViewAllNotes.php">View Notes</a><br>
</p>
<?php
echo $_SESSION["favcolor"];
?>
</form></body>
</html>
