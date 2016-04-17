<?php
require_once('./mysqli_connect.php');

$notetext = $_POST['notetext'];
$tasknumber = $_POST['taskname'];


$sql = "INSERT INTO Notes (note_text, task_id)
VALUES ('$notetext', '$tasknumber')";

if ($dbc->query($sql) === TRUE) {
    echo "New note submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}
?> 