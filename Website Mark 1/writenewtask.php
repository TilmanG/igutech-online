<?php


$Taskname = $_POST['taskname'];
$Tasktype = $_POST['tasktype'];

require_once('./mysqli_connect.php');

$sql = "INSERT INTO Tasks (Taskname, Category)
VALUES ('$Taskname', '$Tasktype')";

if ($dbc->query($sql) === TRUE) {
    echo "New task created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}

require_once(newtask.php);
?> 