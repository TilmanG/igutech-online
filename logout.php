<?php
session_start();
session_unset();
session_destroy();
echo "<script>
            window.onload = function() {
                 Materialize.toast('Successfully logged out!', 4000);
            };</script>
            ";
require_once("./index.php");
?>
