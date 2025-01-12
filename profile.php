<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "swim_club");

// Get the username from the session
// $username = $_SESSION['username'];

// Retrieve user data from the database
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $username = $row['username'];
    $firstname = $row['firstname'];
    $surname = $row['surname'];
    $postcode = $row['postcode'];
    $password = $row['password'];
    $age = $row['age'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
} else {
    echo 'Error fetching user data.';
}
?>


<div class="container">
    <?php if ($age < 18) { ?>
        <!-- Profile Table -->
        <div class="mt-4">
            <h2>Profile</h2>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Username</th>
                        <td><?php echo $username; ?></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><?php echo $firstname; ?></td>
                    </tr>
                    <tr>
                        <th>Surname</th>
                        <td><?php echo $surname; ?></td>
                    </tr>
                    <tr>
                        <th>Postcode</th>
                        <td><?php echo $postcode; ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?php echo $age; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?php echo $phone; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $address; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <!-- Profile Form -->
        <div class="mt-4">
            <h2>Edit Profile</h2>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" required>
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $surname; ?>" required>
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo $postcode; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<?php } ?>

<?php

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $updatedFirstname = $_POST['firstname'];
    $updatedSurname = $_POST['surname'];
    $updatedPostcode = $_POST['postcode'];
    $updatedPassword = $_POST['password'];
    $updatedAge = $_POST['age'];
    $updatedEmail = $_POST['email'];
    $updatedPhone = $_POST['phone'];
    $updatedAddress = $_POST['address'];

    // Update the user records in the database
    $updateQuery = "UPDATE users SET firstname='$updatedFirstname', surname='$updatedSurname', postcode='$updatedPostcode', password='$updatedPassword', age='$updatedAge', email='$updatedEmail', phone='$updatedPhone', address='$updatedAddress' WHERE id='$id'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Records updated successfully
        echo '<script>alert("Profile Updated!");</script>';
        header('Location: profile.php');
        exit();
    } else {
        echo 'Error updating user records.';
    }
}
?>





