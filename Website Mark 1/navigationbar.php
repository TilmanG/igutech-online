<?php
echo '<nav>
    <div id="topbar">
        <span id="lefttopbar">Igutech Online Interface v1.3</span>
        <span id="righttopbar">';
        
        if (isset($_SESSION['username'])) {
            echo "You are logged in as " . $_SESSION['username'] . " | " . '<a href="/Login/logout.php">Logout</a>';
        }else{
            echo '<a href="/Login/login.php">Login</a>';
        }
        echo '</span>
    </div>
    <br><br>';

    if($isSecurepage)
    {
        echo "You do not have permission to view this page!";
        die();
    }

echo '</nav>';
?>