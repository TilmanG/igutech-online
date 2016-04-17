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
<html>
<body>
<form id='login' action='submitlogin.php' method='post' accept-charset='UTF-8'>
<table style="width:25%">
  <tr>
    <td>Username: </td>
    <td><input type='text' name='username' id='username'  maxlength="50" /><br></td>
  </tr>
  <tr>
    <td>Password: </td>
    <td><input type='password' name='password' id='password' maxlength="50" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type='submit' name='Submit' value='Submit' /></td>
  </tr>
</table>
</form>
</body>
</html>
