<?php
session_start();
include('authentication.php');
include 'db.php';
//  insert the patient data
if (isset($_POST['reg_patient'])) {
    $name = $_POST['fullName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Sanitize the data
    $name = mysqli_real_escape_string($con, $name);
    $age = mysqli_real_escape_string($con, $age);
    $gender = mysqli_real_escape_string($con, $gender);
    $email = mysqli_real_escape_string($con, $email);
    $phone = mysqli_real_escape_string($con, $phone);
    $address = mysqli_real_escape_string($con, $address);

    // Insert query
    $insert_query = "INSERT INTO patients(name, age, gender, contact, email, address) 
                     VALUES ('$name', '$age', '$gender', '$phone', '$email', '$address')";

    // Debugging: Print the query to check
    echo $insert_query;  // This will print the SQL query to check for errors

    // Execute the query
    $insert_query_run = mysqli_query($con, $insert_query);

    // Check if the query ran successfully
    if ($insert_query_run) {
        $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        // Log the exact error
        $_SESSION['status'] = "DATA IS NOT INSERTED SUCCESSFULLY: " . mysqli_error($con);
        header('Location: patients.php');
    }
}
//  update the patient 
if (isset($_POST['update_btn'])) {
  // Ensure the ID is passed correctly
  if (isset($_POST['id'])) {
      $id = $_POST['id'];
      $name = $_POST['fullName'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      // Sanitize inputs
      $name = mysqli_real_escape_string($con, $name);
      $age = mysqli_real_escape_string($con, $age);
      $gender = mysqli_real_escape_string($con, $gender);
      $email = mysqli_real_escape_string($con, $email);
      $phone = mysqli_real_escape_string($con, $phone);
      $address = mysqli_real_escape_string($con, $address);

      // Check if the ID exists in the database
      $check_query = "SELECT * FROM patients WHERE id='$id'";
      $check_result = mysqli_query($con, $check_query);

      if (mysqli_num_rows($check_result) > 0) {
          // Update query
          $query = "UPDATE patients SET 
                    name='$name', age='$age', gender='$gender', contact='$phone', email='$email', address='$address' 
                    WHERE id='$id'";

          $query_run = mysqli_query($con, $query);

          if ($query_run) {
              $_SESSION['status'] = "DATA UPDATED SUCCESSFULLY";
              header('Location: index.php');
              exit;
          } else {
              $_SESSION['status'] = "ERROR: " . mysqli_error($con);
              header('Location: edit.php');
              exit;
          }
      } else {
          $_SESSION['status'] = "PATIENT ID DOES NOT EXIST";
          header('Location: edit.php');
          exit;
      }
  } else {
      $_SESSION['status'] = "PATIENT ID IS MISSING";
      header('Location: edit.php');
      exit;
  }
}


?>
