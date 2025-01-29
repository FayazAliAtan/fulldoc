<?php
// Database connection details
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

// SQL to count current appointments
$sql = "SELECT COUNT(*) AS currentAppointments FROM appointments WHERE appointment_date >= CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(['currentAppointments' => $row['currentAppointments']]);
} else {
    echo json_encode(['currentAppointments' => 0]);
}

$conn->close();
?>
