<?php
require_once('./mysqli_connect.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO People (firstname, lastname)
VALUES ('$firstname', '$lastname')";

if ($dbc->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}

?> 