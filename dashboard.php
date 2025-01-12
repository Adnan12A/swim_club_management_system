<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if($username == 'Admin33')
    {
        header('Location: admin_dashboard.php');
    }
?>





<?php

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}

// Get the username from the session
$username = $_SESSION['username'];
?>

<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <!-- Main Content -->
    <div class="mt-4">
        <h2>Welcome to Your Dashboard, <?php echo $username ?></h2>

        <!-- Performance Data -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Performance Data</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-primary text-white mb-3">
                            <div class="card-header">Personal Best</div>
                            <div class="card-body">
                                <h5 class="card-title">100m Freestyle</h5>
                                <p class="card-text">Time: 1:00.20</p>
                                <p class="card-text">Rank: 1st</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-success text-white mb-3">
                            <div class="card-header">Recent Performance</div>
                            <div class="card-body">
                                <h5 class="card-title">200m Backstroke</h5>
                                <p class="card-text">Time: 2:15.45</p>
                                <p class="card-text">Rank: 3rd</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-info text-white mb-3">
                            <div class="card-header">Training Progress</div>
                            <div class="card-body">
                                <h5 class="card-title">Total Distance</h5>
                                <p class="card-text">1500m</p>
                                <h5 class="card-title">Average Pace</h5>
                                <p class="card-text">1:30 per 100m</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-warning text-white mb-3">
                            <div class="card-header">Upcoming Event</div>
                            <div class="card-body">
                                <h5 class="card-title">400m Freestyle</h5>
                                <p class="card-text">Date: 2023-06-10</p>
                                <p class="card-text">Location: Main Pool</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
</div>
  <!-- Child Information -->
  <div class="card mb-4">
            <div class="card-header">
                <h5>Child Information</h5>
            </div>
            <div class="card-body">
                <?php
                // Include necessary files and establish database connection

                // Retrieve parent ID from session or any other identifier
                $parentId = 1; // Replace with the appropriate parent role ID

                $query = "SELECT u.id, u.firstname FROM users u
                          INNER JOIN users_role ur ON u.id = ur.user_id
                          WHERE ur.role_id = $parentId";

                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    // Child information found, display it in a table
                    echo '<table>';
                    echo '<tr><th>Child Name</th><th>Action</th></tr>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        $childId = $row['id'];
                        $childFirstName = $row['firstname'];

                        echo '<tr>';
                        echo '<td>' . $childFirstName . '</td>';
                        echo '<td><a href="edit_child.php?id=' . $childId . '">Edit</a></td>';
                        echo '</tr>';
                    }

                    echo '</table>';
                } else {
                    echo 'No child information found.';
                }

                // Close database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>

        <!-- Additional Dashboard Components -->

        <!-- Add more components as needed -->

    </div>
</div>

