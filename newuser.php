<script>$(document).ready(function() {
    $('select').material_select();
  });</script>

<form action="./createnewuser.php" method="post">
        <div class="col s6">
          <div class="card blue darken-3">
            <div class="card-content white-text">
                <span class="card-title">Create users</span>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name= "username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
        <div class="input-field col s6">
          <select name="priv">
             <option value="standard">Standard</option>
             <option value="keeper">Keeper</option>
             <option value="admin">Admin</option>
         </select>
            <label>Choose Permissions</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password2" id="password2" type="password" class="validate">
          <label for="password">Retype</label>
        </div>
      </div>
    
  </div>
        
            </div>
            <div class="card-action">
                 <button class="btn waves-effect waves-light" type="submit" name="action">Create new user
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

</div></form>