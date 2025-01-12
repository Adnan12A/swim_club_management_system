<?php
// Start the session
session_start();

if (isset($_SESSION['username'])) {
  // User is logged in, retrieve the username from the session
  $username = $_SESSION['username'];
}
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="images/swim_logo.png" width="40px" height="36px">
      AquaticTrackr</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    if (isset($_SESSION['username'])) {
        // User is logged in, hide the old navigation bar and display the user icon with a link and logout button
        ?>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./performance.php">Performance</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="profile.php" class="nav-link"><i class="fas fa-user" style="color:white;"></i></a>
        </li>
        <li class="nav-item">
          <button class="btn btn-danger logout" type="submit"><a href="logout.php">Logout</a></button>
        </li>
      </ul>
    </div>
    <?php
    } else {
        // User is not logged in, display the old navigation bar with register and login buttons
        ?>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./#tips">Tips & Tricks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./#events">Upcoming Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./#contact">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn register" type="button"><a href="registeration.php" style="color:white;display:block;">Become a Member</a></button>
        <button class="btn btn-primary login" type="button"><a href="login.php" style="color:white;display:block;">Login</a></button>
      </form>
    </div>
    <?php
    }
    ?>
  </div>
</nav>