<?php
require_once('./mysqli_connect.php');


$tasknumber = $_POST['taskname'];

$sql = "SELECT note_text,create_date FROM Notes WHERE task_id = $tasknumber;";
$gettitle = "SELECT Taskname FROM Tasks WHERE task_id = $tasknumber;";

foreach ($dbc->query($gettitle) as $titleoftasks){
echo "Viewing notes for task: <b> " . $titleoftasks[Taskname] ."</b><br>"; 
}

echo '<table border="1" style="width:50%">';
foreach ($dbc->query($sql) as $row){
    echo "<tr>";
    echo "<td>" . $row[note_text] . " </td> <td> " . $row[create_date] . "</td>"; //your boat
    echo "</tr>";
}
echo "</table>";

?> 