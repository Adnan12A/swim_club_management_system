<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if($username !== 'Admin33')
    {
        // header('Location: login.php');
    }
?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php
$query = "SELECT * FROM events";
$conn = mysqli_connect("localhost", "root", "", "swim_club");

$result = mysqli_query($conn, $query);

// Check if there are any users
if ($result && mysqli_num_rows($result) > 0) {
    ?>

   
        <div class="container">
            <h2 class="mt-4">All Events</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each user and display their information in a row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $event_id = $row['id'];
                        $event_name = $row['name'];
                        
                        ?>
                        <tr>
                            <td><?php echo $event_id; ?></td>
                            <td><?php echo $event_name; ?></td>
                            <td>
                                <a href="edit_event.php?id=<?php echo $event_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="all_users.php?id=<?php echo $event_id; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        
    <?php
} else {
    // No users found
    echo 'No users found.';
}

// Close database connection
?>
<?php
// delete_user.php

// Check if the user ID is provided in the URL
if (isset($_GET['delId'])) {
    $delId = $_GET['delId'];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "swim_club");

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create the DELETE query
    $query = "DELETE FROM events WHERE id = $delId";

    // Execute the DELETE query
    if (mysqli_query($conn, $query)) {
        // User deleted successfully, redirect back to the all_users.php page
        header('Location: all_events.php');
        exit();
    } else {
        echo "Error deleting event: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // No user ID provided, redirect back to the all_users.php page
    header('Location: all_users.php');
    exit();
}
?>
