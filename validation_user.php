<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DocSphere";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define variables and set to empty values
$userNameErr = $emailIDErr = $phoneNoErr = $addressErr = $doctorErr = $appointmentDateErr = $appointmentTimeErr = $tcErr = $genderErr = "";
$successMessage = "";

// Input validation and form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $emailID = $_POST["emailID"];
    $phoneNo = $_POST["phoneNo"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $doctor = $_POST["doctor"];
    $appointmentDate = $_POST["appointmentDate"];
    $appointmentTime = $_POST["appointmentTime"];
    $tc = isset($_POST['tc']) ? (int)$_POST['tc'] : 0;

    // Validate User Name
    if (empty($userName)) {
        $userNameErr = "User Name is required";
    } elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $userName)) {
        $userNameErr = "Only alphabets, numbers, and underscores are allowed for User Name";
    }

    // Validate Email ID
    if (empty($emailID)) {
        $emailIDErr = "Email ID is required";
    } elseif (!filter_var($emailID, FILTER_VALIDATE_EMAIL)) {
        $emailIDErr = "Invalid Email ID format";
    } else {
        $result = $conn->query("SELECT * FROM appointments WHERE email = '$emailID'");
        // if ($result->num_rows > 0) {
            // $emailIDErr = "Email ID already exists!";
        // }
    }

    // Validate Phone Number
    if (empty($phoneNo)) {
        $phoneNoErr = "Phone Number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $phoneNo)) {
        $phoneNoErr = "Phone number must be exactly 10 digits.";
    } else {
        $result = $conn->query("SELECT * FROM appointments WHERE phone_number = '$phoneNo'");
        // if ($result->num_rows > 0) {
            // $phoneNoErr = "Phone number already exists!";
        // }
    }

    // Validate Address
    if (empty($address)) {
        $addressErr = "Address is required";
    }

    // Validate Doctor Selection
    if (empty($doctor)) {
        $doctorErr = "Please select a doctor";
    }

    // Validate Appointment Date
    if (empty($appointmentDate)) {
        $appointmentDateErr = "Please select an appointment date";
    } elseif ($appointmentDate < date("Y-m-d")) {
        $appointmentDateErr = "Appointment date must be in the future.";
    }

    // Validate Appointment Time
    if (empty($appointmentTime)) {
        $appointmentTimeErr = "Please select an appointment time";
    }

    // Validate Gender
    if (empty($gender)) {
        $genderErr = "Gender is required";
    }

    // Validate Terms and Conditions
    if (!$tc) {
        $tcErr = "You must agree to the terms and conditions.";
    }

    // Check current appointment limit
    $sql = "SELECT COUNT(*) AS currentAppointments FROM appointments WHERE appointment_date = CURDATE()";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $currentAppointments = $row['currentAppointments'] ?? 0;
    $maxAppointments = 6;

    if ($currentAppointments >= $maxAppointments) {
        echo "Appointment limit reached for today.";
        exit;
    }

    // Insert data if no errors
    if (empty($userNameErr) && empty($emailIDErr) && empty($phoneNoErr) && empty($addressErr) &&
        empty($doctorErr) && empty($appointmentDateErr) && empty($appointmentTimeErr) && empty($genderErr) && empty($tcErr)) {
        
        $query = "INSERT INTO appointments (user_name, email, phone_number, gender, age, address, doctor, appointment_date, appointment_time, terms_agreed, created_at) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("ssisisssss", $userName, $emailID, $phoneNo, $gender, $age, $address, $doctor, $appointmentDate, $appointmentTime, $tc);
            if ($stmt->execute()) {
                $successMessage = "Appointment successfully registered!";
                $submittedData = [
                    "User Name" => $userName,
                    "Email" => $emailID,
                    "Phone Number" => $phoneNo,
                    "Gender" => $gender,
                    "Age" => $age,
                    "Address" => $address,
                    "Doctor" => $doctor,
                    "Appointment Date" => $appointmentDate,
                    "Appointment Time" => $appointmentTime,
                ];
            } else {
                echo "Error registering appointment: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing the statement: " . $conn->error;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Submission</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
<div class="container">
    <?php if (!empty($successMessage)): ?>
        <!-- Success Message -->
        <div class="alert alert-success text-center">
            <h2><?php echo $successMessage; ?></h2>
        </div>

        <!-- User Submitted Details -->
        <div class="card shadow mt-4">
            <div class="card-header bg-primary text-white text-center">
                <h3>Your Submitted Details</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php foreach ($submittedData as $key => $value): ?>
                        <li class="list-group-item">
                            <strong><?php echo $key; ?>:</strong> <?php echo htmlspecialchars($value); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>


        <!-- Print Button -->
        <div class="text-center mt-4">
            <button class="btn btn-primary" onclick="printDetails()">Print All Pages</button>
        </div>

        <script>
            function printDetails() {
                const printContent = document.body.innerHTML;

                // Set the page for printing
                document.body.innerHTML = `
                    <div class="container">
                        ${printContent}
                    </div>
                `;

                // Trigger the print dialog
                window.print();

                // Restore the original content
                document.body.innerHTML = printContent;
                location.reload(); // Reload the page to restore functionality
            }
        </script>
    <?php endif; ?>
</div>
<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


    <!-- Error messages -->
    <?php if (!empty($userNameErr)) echo "<div class='error'>$userNameErr</div>"; ?>
    <?php if (!empty($emailIDErr)) echo "<div class='error'>$emailIDErr</div>"; ?>
    <?php if (!empty($phoneNoErr)) echo "<div class='error'>$phoneNoErr</div>"; ?>
    <?php if (!empty($addressErr)) echo "<div class='error'>$addressErr</div>"; ?>
    <?php if (!empty($doctorErr)) echo "<div class='error'>$doctorErr</div>"; ?>
    <?php if (!empty($appointmentDateErr)) echo "<div class='error'>$appointmentDateErr</div>"; ?>
    <?php if (!empty($appointmentTimeErr)) echo "<div class='error'>$appointmentTimeErr</div>"; ?>
    <?php if (!empty($genderErr)) echo "<div class='error'>$genderErr</div>"; ?>
    <?php if (!empty($tcErr)) echo "<div class='error'>$tcErr</div>"; ?>
</body>
</html>
