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
$query = "SELECT * FROM users WHERE username != 'Admin33'";
$conn = mysqli_connect("localhost", "root", "", "swim_club");

$result = mysqli_query($conn, $query);

// Check if there are any users
if ($result && mysqli_num_rows($result) > 0) {
    ?>

   
        <div class="container">
            <h2 class="mt-4">All Users</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through each user and display their information in a row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $userId = $row['id'];
                        $username = $row['username'];
                        $firstName = $row['firstname'];
                        $surname = $row['surname'];
                        ?>
                        <tr>
                            <td><?php echo $userId; ?></td>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $firstName; ?></td>
                            <td><?php echo $surname; ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $userId; ?>" class="btn btn-primary">Edit</a>
                                <a href="all_users.php?id=<?php echo $delId; ?>" class="btn btn-danger">Delete</a>
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
    $userId = $_GET['delId'];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "swim_club");

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create the DELETE query
    $query = "DELETE FROM users WHERE id = $userId";

    // Execute the DELETE query
    if (mysqli_query($conn, $query)) {
        // User deleted successfully, redirect back to the all_users.php page
        header('Location: all_users.php');
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // No user ID provided, redirect back to the all_users.php page
    header('Location: all_users.php');
    exit();
}
?>
