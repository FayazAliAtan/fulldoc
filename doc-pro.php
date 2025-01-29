<?php
session_start(); // Start the session


include 'db.php';

// Check if the form has been submitted
if (isset($_POST['doc-edit'])) {
    // Get form data and sanitize input
    $id = mysqli_real_escape_string($con, $_POST['user_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $specialization = mysqli_real_escape_string($con, $_POST['specialization']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $experience = mysqli_real_escape_string($con, $_POST['experience']);
    $qualification = mysqli_real_escape_string($con, $_POST['qualification']);
    $license = mysqli_real_escape_string($con, $_POST['license']);
    $updatedAt = date('Y-m-d H:i:s'); // Current time for updating

    // Validate required fields
    if (empty($name) || empty($email) || empty($contact)) {
        echo "<script>alert('Please fill in all the required fields');</script>";
        exit;
    }

    // Update query
    $query = "UPDATE doctor_profile SET
                name='$name',
                specialization='$specialization',
                contact='$contact',
                gender='$gender',
                date_of_birth='$dob',
                email='$email',
                address='$address',
                years_of_experience='$experience',
                qualification='$qualification',
                license_number='$license',
                updated_at='$updatedAt'
              WHERE id='$id'";

    // Execute query
    if (mysqli_query($con, $query)) {
        // Store success message in session variable (optional)
        $_SESSION['success_msg'] = "Profile updated successfully!";
        
        // Redirect to profile page
        header('Location: doc-profile.php');
        exit;
    } else {
        // Display error message
        echo "<script>alert('Error updating profile: " . mysqli_error($con) . "');</script>";
    }
}
?>
