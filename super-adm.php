<?php
include 'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['save_admin'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // Validate input fields
    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('All fields are required');</script>";
        exit;
    }

    // Sanitize inputs to prevent SQL injection
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);

    // Insert into database without hashing the password
    $insert_query = "INSERT INTO admin (username, password, email) VALUES ('$name', '$password', '$email')";

    if (mysqli_query($con, $insert_query)) {
        echo "<script>alert('Admin added successfully');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error adding admin: " . mysqli_error($con) . "');</script>";
    }
}
?>
