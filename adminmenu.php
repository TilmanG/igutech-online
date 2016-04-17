<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['priv'] == "admin")
{
    echo '
    
  <div class="fixed-action-btn" style="bottom: 24px; right: 24px;">
    <a class="btn-floating btn-large green">
      <i class="large material-icons">vpn_key</i>
    </a>
    <ul>
      <li><a href="./usermanager.php" class="btn-floating blue"><i class="material-icons">assignment_ind</i></a></li>
      <li><a href="#" class="btn-floating yellow darken-1"><i class="material-icons">library_books</i></a></li>
      <li><a href="#" class="btn-floating red"><i class="material-icons">library_add</i></a></li>
    </ul>
  </div>
        
    
    
    
    ';
}
?>