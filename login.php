<?php
session_start();
require_once('./header.php');
require_once('./nonavbar.php');
echo '
<br>
  <div class="row">
    <form id="login" action="submitlogin.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <button type="submit" class="btn waves-effect waves-light" type="login" name="action">Login
        <i class="material-icons right">send</i>
    </button>
    </form>
  </div>
';
?>