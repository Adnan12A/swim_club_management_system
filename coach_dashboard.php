<?php
// Database connection

$conn = mysqli_connect("localhost", "root", "", "swim_club");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
  <div class="container">
    <h2>Coach Dashboard</h2>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "swim_club";

    // Retrieve coach IDs from users_role table
    $sql = "SELECT user_id FROM users_role WHERE role_id = 2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Array to store coach IDs
      $coachIds = array();

      while ($row = mysqli_fetch_assoc($result)) {
        $coachIds[] = $row['user_id'];
      }

      // Use coach IDs to retrieve details from users table
      $coachDetails = array();

      foreach ($coachIds as $coachId) {
        $sql = "SELECT * FROM users WHERE id = $coachId";
        $result = mysqli_query($conn, $sql);
$i = 0;
        if (mysqli_num_rows($result) == 1) {
          $coachDetails[] = mysqli_fetch_assoc($result);
        }
      }

      foreach ($coachDetails as $coach) {
        $coachId = $coach['id'];
        $username = $coach['username'];
        $firstname = $coach['firstname'];
        $surname = $coach['surname'];
        $email = $coach['email'];

        // Retrieve member count for each coach
        $sql = "SELECT COUNT(*) AS member_count FROM users_role WHERE role_id = 1 AND user_id = $coachId";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $memberCount = $row['member_count'];
$i = $i +1;
        echo "<div class='card mb-3'>";
        echo "<div class='card-header'>Member <?php echo $i        ?></div>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>Name: $firstname $surname</h5>";
        echo "<p class='card-text'>Email: $email</p>";
        echo "</div>";
        echo "</div>";
      }
    } else {
      echo "No coaches found.";
    }

    mysqli_close($conn);
    ?>

    <!-- <a href="assign_members.php" class="btn btn-primary">Assign Members</a> -->
  </div>
