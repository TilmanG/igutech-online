
<form action="./deleteusers.php" method="post">
        <div class="col s6">
          <div class="card red darken-3">
            <div class="card-content white-text">
              <span class="card-title">Rem ove users</span>
              <div class="row">
                <table style="color: white;" class="bordered">
                <thead>
          <tr>
            <th style="width: 10%;" data-field="remove">Remove?</th>
              <th style="width: 45%;" data-field="username">Name</th>
              <th style="width: 45%;" data-field="priv">Privlages</th>
          </tr>
        </thead>
                
                
                <?php
require_once('./mysqli_connect.php');


$sql = "SELECT username,priv FROM Users;";


foreach ($dbc->query($sql) as $row){
    echo "<tr>";
    echo "<td><input type='checkbox' class='filled-in' id='" . $row[username] . "'></input><label for='" . $row[username] ."'></label></td>"."<td>" . $row[username] . " </td> <td> " . $row[priv] . "</td>"; //your boat
    echo "</tr>";
}


?> 
                  
                  </table>
                  
              </div>
            </div>
            <div class="card-action">
                 <button class="btn waves-effect waves-light" type="submit" name="action">Delete selected users
                    <i class="material-icons right">not_interested</i>
                </button>
            </div>
        </div>
</div></form>