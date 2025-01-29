<?php
session_start();
include 'authentication.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// authentications
if(isset($_POST['logout_btn']))
{
   session_destroy();
   unset($_SESSION['auth']);
   unset($_SESSION['auth_user']);
   $_SESSION['status']="Logged Out Successfully";
   header('Location:login.php');
   exit(0);
}


// Database Connection
$servername = "localhost";  // Your database server
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "DocSphere";      // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// For defining variables to empty values  
$userNameErr = $emailIDErr = $phoneNoErr = $addressErr = $doctorErr = $appointmentDateErr = $appointmentTimeErr = $tcErr = $genderErr = $dobErr = "";

// Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["userName"];
   $emailID = $_POST["emailID"];
   $phone_number = $_POST["phoneNo"];
   $gender = $_POST["gender"];
   $age = $_POST["age"];
   $address = $_POST["address"];
   $doctor = $_POST["doctor"];
   $appointmentDate = $_POST["appointmentDate"];
   $appointmentTime = $_POST["appointmentTime"];
   $tc = isset($_POST['tc']) ? (int)$_POST['tc'] : 0;
   

    // Validating the User Name 
    if (empty($_POST["userName"])) {
        $userNameErr = "User Name is required";
    } else {
        $userName = input_data($_POST["userName"]);
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $userName)) {
            $userNameErr = "Only alphabets, numbers, and underscores are allowed for User Name";
        }
    }

    // Validating the User EmailID 
    if (empty($_POST["emailID"])) {
        $emailIDErr = "Email ID is required";
    } else {
        $emailID = input_data($_POST["emailID"]);
        if (!filter_var($emailID, FILTER_VALIDATE_EMAIL)) {
            $emailIDErr = "Invalid Email ID format";
        } else {
            // Check if the email already exists in the database
            $result = $conn->query("SELECT * FROM appointments WHERE email = '$emailID'");
            if ($result->num_rows > 0) {
                $emailIDErr = "Email ID already exists!";
            }
        }
    }

    // Validating the User Phone Number 
    if (empty($_POST["phoneNo"])) {
        $phoneNoErr = "Phone Number is required";
    } else {
        $phoneNo = input_data($_POST["phoneNo"]);
        if (!preg_match("/^[0-9]*$/", $phone_number)) {
            $phoneNoErr = "Only numeric values are allowed!!";
        }
        if (strlen($phoneNo) != 10) {
            $phoneNoErr = "Phone number must be 10 digits.";
        } else {
            // Check if the phone number already exists in the database
            $result = $conn->query("SELECT * FROM appointments WHERE phone_number = '$phone_number'");
            if ($result->num_rows > 0) {
                $phoneNoErr = "Phone number already exists!";
            }
        }
    }

    // Validating Address 
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = input_data($_POST["address"]);
    }

    // Validating Doctor Selection
    if (empty($_POST["doctor"])) {
        $doctorErr = "Please select a doctor";
    } else {
        $doctor = input_data($_POST["doctor"]);
    }

    // Validating Appointment Date
    if (empty($_POST["appointmentDate"])) {
        $appointmentDateErr = "Please select an appointment date";
    } else {
        $appointmentDate = input_data($_POST["appointmentDate"]);
        // Check if the appointment date is a future date
        $currentDate = date("Y-m-d");
        if ($appointmentDate < $currentDate) {
            $appointmentDateErr = "Appointment date must be in the future.";
        }
    }
    
    // Validating Appointment Time
    if (empty($_POST["appointmentTime"])) {
        $appointmentTimeErr = "Please select an appointment time";
    } else {
        $appointmentTime = input_data($_POST["appointmentTime"]);
    }

    // Validating Gender 
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = input_data($_POST["gender"]);
    }
    $termsAgreed = isset($_POST['tc']) ? 1 : 0;
    // Checking if user has agreed to the terms and conditions  
    if (!isset($_POST['tc'])) {
        $tcErr = "Please accept our terms & conditions.";
    } else {
        $tc = input_data($_POST["tc"]);
    }
    if (isset($_POST['tc']) && $_POST['tc'] === 'on') {
        $tc = 1; // Checkbox is checked
    } else {
        $tc = 0; // Checkbox is not checked
    }
    
    // If no errors, insert data into the database
    if ($userNameErr == "" && $emailIDErr == "" && $phoneNoErr == "" && $addressErr == "" && $doctorErr == "" && $appointmentDateErr == "" && $appointmentTimeErr == "" && $genderErr == "" && $tcErr == "" && $dobErr == "") {

        // Insert query
        $query = "INSERT INTO `appointments` (`user_name`, `email`, `phone_number`, `gender`, `age`, `address`, `doctor`, `appointment_date`, `appointment_time`, `terms_agreed`, `created_at`) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,NOW())";
        // Prepare the statement
        if ($stmt = $conn->prepare($query)) {
            // Bind parameters
            $stmt->bind_param("ssisisssss", $userName, $emailID, $phoneNo, $gender, $age, $address, $doctor, $appointmentDate, $appointmentTime, $tc);
            // Execute the statement
            if ($stmt->execute()) {
                // Success message
                echo "Appointment successfully registered!";
            } else {
                echo "There was an error registering your appointment: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the statement: " . $conn->error;
        }
    } else {
        // Display error messages if validation failed
        if ($userNameErr) echo "<div class='alert alert-danger'>$userNameErr</div>";
        if ($emailIDErr) echo "<div class='alert alert-danger'>$emailIDErr</div>";
        if ($phoneNoErr) echo "<div class='alert alert-danger'>$phoneNoErr</div>";
        if ($addressErr) echo "<div class='alert alert-danger'>$addressErr</div>";
        if ($doctorErr) echo "<div class='alert alert-danger'>$doctorErr</div>";
        if ($appointmentDateErr) echo "<div class='alert alert-danger'>$appointmentDateErr</div>";
        if ($appointmentTimeErr) echo "<div class='alert alert-danger'>$appointmentTimeErr</div>";
        if ($genderErr) echo "<div class='alert alert-danger'>$genderErr</div>";
        if ($tcErr) echo "<div class='alert alert-danger'>$tcErr</div>";
        if ($dobErr) echo "<div class='alert alert-danger'>$dobErr</div>";
    }
}

// Function to sanitize and escape user input
function input_data($data) {
    $data = trim($data);          // Remove extra spaces
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}

//  for delete patient data
if(isset($_POST['delete_btn'])){
    $id=$_POST['user_id'];

    $delete_query="delete from patients where id='$id'";
    $delete_query_run=mysqli_query($con,$delete_query);
       
    if($delete_query_run){
               $_SESSION['status']="DATA DELETED SUCCESSFULLY ";
               $_SESSION['status_code']="success";
               header('Location:index.php');
    }
    else{
        $_SESSION['status']="Data deletion failed ";
        $_SESSION['status_code']="error";
        header('Location:index.php');
    }
       

}
?>
