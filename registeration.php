<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<div class="container register_wrapper">

    <h1>Registration</h1>
    <small class="form-text text-danger" id="form-error-msg" style="font-size:18px;"></small>

    <form method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
            <small class="form-text text-danger" id='username-msg'></small>
        </div>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" pattern="[A-Za-z]+" maxlength="50"
                required>
            <small class="form-text text-danger" id="firstname-msg"></small>
        </div>

        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" pattern="[A-Za-z]+" maxlength="50"
                required>
            <small class="form-text text-danger" id="surname-msg"></small>

        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <small class="form-text text-danger" id="password-msg"></small>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
            <small class="form-text text-danger" id="dob-msg"></small>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <small class="form-text text-danger" id="email-msg"></small>

        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                placeholder="Please enter a phone number with country code in the format XXX-XXX-XXXX" required>
            <small class="form-text text-danger" id="phone-msg"></small>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="text" class="form-control" id="postcode" name="postcode" required>
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-block center" onclick="return register()">Register</button>
        </center>
    </form>
</div>
<script>
   
    function register() {
        <?php $x=0; ?>
        const username = document.getElementById('username').value;
        const firstname = document.getElementById('firstname').value;
        const lastname = document.getElementById('surname').value;
        const dob = document.getElementById('dob').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
        const postcode = document.getElementById('postcode').value;
        const password = document.getElementById('password').value;
        let passwordError = '';
        let usernameError = '';
        let firstnameError = '';
        let lastnameError = '';
        let dobError = '';
        let emailError = '';
        let phoneError = '';
        // Validate username
        const alphanumericRegex = /^[a-zA-Z0-9]{5,20}$/;
        if (!alphanumericRegex.test(username)) {
            usernameError = 'Username should be between 5 and 20 characters and contain only alphanumeric characters.';
        }
        // Validate first name
        const nameRegex = /^[a-zA-Z]+$/;
        if (!nameRegex.test(firstname)) {
            firstnameError = 'First name should contain only alphabetic characters.';
        }
        // Validate last name
        if (!nameRegex.test(lastname)) {
            lastnameError = 'Last name should contain only alphabetic characters.';
        }
        // Validate date of birth
        if (dob.trim() === '') {
            dobError = 'Please enter a valid date of birth.';
        } else if (!/^\d{4}-\d{2}-\d{2}$/.test(dob)) {
            dobError = 'Please enter a valid date of birth (YYYY-MM-DD).';
        } else {
            const [year, month, day] = dob.split('-');
            const dobDate = new Date(year, month - 1, day);
            const currentDate = new Date();
            const minDOB = new Date(currentDate.getFullYear() - 80, currentDate.getMonth(), currentDate.getDate());
            const maxDOB = new Date(currentDate.getFullYear() - 10, currentDate.getMonth(), currentDate.getDate());
            if (dobDate < minDOB || dobDate > maxDOB) {
                dobError = 'Please enter a valid date of birth.';
            }
        }
        // Validate email address
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            emailError = 'Please enter a valid email address.';
        }
        // Validate phone number pattern
        const phoneRegex = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;
        if (!phoneRegex.test(phone)) {
            phoneError = 'Please enter a phone number in the format XXX-XXX-XXXX.';
        }
        // Validate password
        if (password.trim() === '') {
            passwordError = 'Please enter a password.';
        } else if (password.length < 8) {
            passwordError = 'Password should be at least 8 characters long.';
        }
        // Display errors
        document.getElementById('username-msg').textContent = usernameError;
        document.getElementById('firstname-msg').textContent = firstnameError;
        document.getElementById('surname-msg').textContent = lastnameError;
        document.getElementById('dob-msg').textContent = dobError;
        document.getElementById('email-msg').textContent = emailError;
        document.getElementById('phone-msg').textContent = phoneError;
        document.getElementById('password-msg').textContent = passwordError;
        // Check if any field is empty
        if (
            username.trim() === '' ||
            firstname.trim() === '' ||
            lastname.trim() === '' ||
            dob.trim() === '' ||
            email.trim() === '' ||
            phone.trim() === '' ||
            address.trim() === '' ||
            postcode.trim() === '' ||
            usernameError !== '' ||
            firstnameError !== '' ||
            lastnameError !== '' ||
            dobError !== '' ||
            emailError !== '' ||
            phoneError !== '' ||
            passwordError !== ''
        ) {
            // Show error message for empty fields
           
            document.getElementById('form-error-msg').textContent = '* Please fill in all the required fields.';
            return false;
        } else {
            // Clear the error message for empty fields
            document.getElementById('form-error-msg').textContent = '';
            <?php $x=3; ?>
        }
        // Show success message
        alert('Registration successful!');
         x = 3;
        // Allow form submission
        return true;
    }
if(x==3)
{

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['surname'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];

    $dob = $_POST['dob']; 
// Create a DateTime object for the date of birth
$birthdate = new DateTime($dob);

// Get the current date
$currentDate = new DateTime();

// Calculate the difference between the current date and the date of birth
$ageInterval = $birthdate->diff($currentDate);

// Get the age in years
$age = $ageInterval->y;

    // Create a new MySQLi connection
    $conn = new mysqli('localhost', 'root', '', 'swim_club');

    // Check if the connection was successful
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO users (username, firstname, surname, password, age, email, phone, address, postcode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters with the form data
    $stmt->bind_param("sssssssss", $username, $firstname, $lastname, $password, $age, $email, $phone, $address, $postcode);

    // Execute the statement
    if ($stmt->execute()) {
        // Registration successful
        echo "Registration successful!";
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
}
</script>


</body>

</html>


