<?php
session_start();

require_once('./mysqli_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

if(!isset($username) || trim($username) == '')
{
   echo "<script>
            window.onload = function() {
                 Materialize.toast('Please enter a username!', 4000);
            };</script>
            ";
            require_once('./header.php');
   
   require_once('./login.php');
   die();
}
if(!isset($password))
{
   echo "<script>
            window.onload = function() {
                 Materialize.toast('Please enter a password!', 4000);
            };</script>
            ";
             require_once('./header.php');
   
   require_once('./login.php');
   die();
}

$encryptedpass = sha1($username.$password);
$sql = "SELECT password,priv FROM Users WHERE username = '$username'";

$result = $dbc->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $comparestring = $row["password"];
        $possiblepriv = $row["priv"];
        if($encryptedpass == $comparestring) {
            $_SESSION['username'] = $username;
            $_SESSION['priv'] = $possiblepriv;
            require_once ("./header.php");
            echo "<script>
            window.onload = function() {
                 Materialize.toast('Login Successfull!', 4000);
                 window.location.replace('./index.php');
                 Materialize.toast('Login Successfull!', 4000);
            };</script>
            ";
            
        }else{

            echo "<script>
            window.onload = function() {
                 Materialize.toast('Username/password do not match', 4000);
            };</script>
            ";
            require_once('./header.php');
            
            require_once('./login.php');
            
        }
    }
} else {
    
     echo "<script>
            window.onload = function() {
                 Materialize.toast('Username/password do not match', 4000);
            };</script>
            ";
            require_once('./header.php');
     
     require_once('./login.php');
}

?> 