<?php
// Start session to track user login status
session_start();

// Database connection settings
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = "";     // Change to your MySQL password
$dbname = "DocSphere"; // Replace with your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error_message = ""; // Initialize error message variable

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user input from the POST request
    $email = $_POST['doctorLoginEmail'];
    $password = $_POST['doctorLoginPassword'];

    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database for the user with the provided email
    $query = "SELECT * FROM doctors WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        // User found, verify the password
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            // Password is correct, log the user in
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // Handle "Remember me" functionality (optional)
            if (isset($_POST['doctorRememberMe'])) {
                // Set cookies to remember the user for 30 days
                setcookie('user_email', $email, time() + 3600 * 24 * 30);  // Cookie for email
                setcookie('user_id', $user['id'], time() + 3600 * 24 * 30); // Cookie for user ID
            }
            
            // Redirect to the dashboard or homepage
            header('Location: dashboard.php');
            exit();
        } else {
            // Password is incorrect
            $error_message = 'Invalid email or password.';
        }
    } else {
        // User not found
        $error_message = 'No user found with that email address.';
    }
}

?>