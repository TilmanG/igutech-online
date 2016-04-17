<?php
echo '

<nav>
    <div class="nav-wrapper green">
      <span style="padding-left: 10px;padding-right: 10px;" class="brand-logo">Igutech Online</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Tasks.php">Tasks</a></li>
        <li><a href="Notes.php">Notes</a></li>
        <li><a href="Members.php">Members</a></li>
        <li class="active" style="padding-left: 10px;padding-right: 10px;"> Welcome ';
        echo $_SESSION['username'];
        echo '</li>
        <li class="active"><a href="logout.php">Logout</a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
    <li><a href="Tasks.php">Tasks</a></li>
        <li><a href="Notes.php">Notes</a></li>
        <li><a href="Members.php">Members</a></li>
        <li class="active" style="padding-left: 10px;padding-right: 10px;color: black;"> Welcome ';
        echo $_SESSION['username'];
        echo '</li>
        <li class="active"><a href="logout.php">Logout</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">toc</i></a>
    </div>
  </nav>
  <script>
$(".button-collapse").sideNav({
      menuWidth: 300, // Default is 240
      edge: "left", // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
</script>
  ';
?>