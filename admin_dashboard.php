<?php
session_start();

?>

<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>


<?php


// Check if the user is logged in and has access to the dashboard
// Add your authentication logic here

// Include necessary files and establish database connection

// Retrieve and display user and event numbers
$conn = mysqli_connect("localhost", "root", "", "swim_club");

$queryUsers = "SELECT COUNT(*) AS userCount FROM users";
$resultUsers = mysqli_query($conn, $queryUsers);
$rowUsers = mysqli_fetch_assoc($resultUsers);
$userCount = $rowUsers['userCount'];

$queryEvents = "SELECT COUNT(*) AS eventCount FROM events";
$resultEvents = mysqli_query($conn, $queryEvents);
$rowEvents = mysqli_fetch_assoc($resultEvents);
$eventCount = $rowEvents['eventCount'];

?>

    <div class="container">
        <h2 class="mt-4">Welcome to the Admin Dashboard</h2>
        
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="mb-0">User Statistics</h3>
            </div>
            <div class="card-body">
                <p class="mb-0">Total Users: <?php echo $userCount; ?></p>
                <a href="all_users.php">Check</a>
            </div>
        </div>
        
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="mb-0">Event Statistics</h3>
            </div>
            <div class="card-body">
                <p class="mb-0">Total Events: <?php echo $eventCount; ?></p>
                <a href="all_events.php">Check</a>

            </div>
        </div>
        
        <!-- Additional components and sections for the dashboard -->
    
    </div>
    