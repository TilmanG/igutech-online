<html>
<head>
<title> Create a new task! </title>
</head>
<body>
<p>Create a new task!</p>
<form action="writenewtask.php" method="POST"  />
<p>Task Name<input type="text" name="taskname" /></p>
<input type="radio" name="tasktype" value="HARDWARE" checked> Hardware<br>
<input type="radio" name="tasktype" value="SOFTWARE"> Software<br>
<input type="radio" name="tasktype" value="ELECTRONICS"> Electronics<br>
<input type="radio" name="tasktype" value="OUTREACH"> Outreach<br>
<input type="radio" name="tasktype" value="MISC"> Misc <br>
<input type="submit" value="Submit" />
</form></body>
</html>
