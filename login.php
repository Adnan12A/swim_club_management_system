<?php
session_start();

$errorMessage = ""; // Initialize the error message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Connect to the database (replace hostname, username, password, and dbname with your actual database credentials)
        $conn = mysqli_connect("localhost", "root", "", "swim_club");

        // Check if the connection was successful
        if ($conn) {
            // Sanitize the username to prevent SQL injection
            $username = mysqli_real_escape_string($conn, $username);

            // Query the users table to check if the username and password match
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $query);

            // Check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
                // Username and password match, create a session
                $_SESSION['username'] = $username;

                // Redirect to the dashboard or any desired page
                header("Location: dashboard.php");
                exit();
            } else {
                // Username and password do not match, show an error message
                $errorMessage = "Invalid username or password.";
            }

            // Close the database connection
            mysqli_close($conn);
        } else {
            // Database connection error
            $errorMessage = "Error connecting to the database.";
        }
    }
}
?>

<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <?php if (!empty($errorMessage)) { ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="card-footer">
                    <p>Don't have an account? <a href="#">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
