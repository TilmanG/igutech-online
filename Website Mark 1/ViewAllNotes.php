<html>
<head>
<title> View Notes</title>
</head>
<body>
<p>View all the notes about on a specific task</p>

<form action="ShowSelectedNotes.php" method="POST"  />
<?php
require_once('./mysqli_connect.php');
echo "<p> Select task from dropdown list below:</p>";
$sql="SELECT Taskname,task_id FROM Tasks"; 
echo "<select name=taskname value=''>Task name</option>"; // list box select command
foreach ($dbc->query($sql) as $row){
echo "<option value=$row[task_id]>$row[Taskname]</option>"; 
}
echo "</select>";
?>
<input type="submit" value="Go!" />
</form></body>
</html>