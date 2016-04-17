<html>
<head>
<title> Create a new note</title>
</head>
<body>
<p>Create a new note!</p>

<form action="SubmitNewNotePage.php" method="POST"  />
<p>Note text: <input type="text" name="notetext" /></p>
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
<input type="submit" value="Submit" />
</form></body>
</html>

