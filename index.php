<?php
session_start();
if (isset($_SESSION['username'])) {
            //continue and load page;
}else{
    require_once('./nonavbar.php');
    require_once('./login.php');
    die();
}
require_once('./header.php');
require_once('./navbar.php');
require_once('./adminmenu.php');
?>
<html>
    <div>
        <h5 class="center-align">Homepage</h5>
    </div>
</html>