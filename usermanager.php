<?php
session_start();
if ($_SESSION['priv']== 'admin')
{
    //continue
}else{
    require_once ("./header.php");
            echo "<script>
            window.onload = function() {
                 Materialize.toast('No permissions!', 4000);
                 window.location.replace('./index.php');
            };</script>
            ";
}
require_once('./header.php');
require_once('./navbar.php');
require_once('./adminmenu.php');
?>
<html>
    <div>
        <h5 class="center-align">User Management</h5>
    </div>
</html>
<?php
echo "<div class='row'>";
require_once('./newuser.php');
require_once('./deleteuser.php');
echo "</div>"
?>