<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}

// Check if the user is an admin
if ($_SESSION['username'] !== 'Admin33') {
    // User is not an admin, redirect to the dashboard
    session_destroy();
    header('Location: login.php');
    exit();
}

// Check if the event ID is provided in the URL
if (!isset($_GET['id'])) {
    // Event ID is not provided, redirect back to the all_events.php page
    header('Location: all_events.php');
    exit();
}

// Get the event ID from the URL
$eventID = $_GET['id'];

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "swim_club");

// Retrieve event data from the database
$query = "SELECT * FROM events WHERE id='$eventID'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name'];
} else {
    echo 'Error fetching event data.';
}
?>

<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<div class="container">
    <div class="mt-4">
        <h2>Edit Event</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $updatedName = $_POST['name'];

    // Update the event records in the database
    $updateQuery = "UPDATE events SET name='$updatedName' WHERE id='$id'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Records updated successfully
        echo '<script>alert("Event Updated!");</script>';
        header('Location: all_events.php');
        exit();
    } else {
        echo 'Error updating event records.';
    }
}
?>
