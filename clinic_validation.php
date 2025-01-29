<?php
// clinic_validation.php

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "DocSphere";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $clinicName = $conn->real_escape_string($_POST['clinicName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $labServices = $conn->real_escape_string($_POST['labServices']);
    $insurance = $conn->real_escape_string($_POST['insurance']);
    $emergencyContact = $conn->real_escape_string($_POST['emergencyContact']);
    $operatingHours = $conn->real_escape_string($_POST['operatingHours']);

    // Handle file uploads
    $clinicImage = $_FILES['clinicImage']['name'];
    $clinicDocuments = $_FILES['clinicDocuments']['name'];

    $imagePath = "uploads/profile_images/" . basename($clinicImage);
    $documentPath = "uploads/documents/";

    // Move uploaded files
    if (!move_uploaded_file($_FILES['clinicImage']['tmp_name'], $imagePath)) {
        die("Error uploading clinic image.");
    }

    $documentPaths = [];
    foreach ($_FILES['clinicDocuments']['tmp_name'] as $key => $tmpName) {
        $docName = basename($_FILES['clinicDocuments']['name'][$key]);
        $fullPath = $documentPath . $docName;
        if (move_uploaded_file($tmpName, $fullPath)) {
            $documentPaths[] = $fullPath;
        } else {
            die("Error uploading document: $docName.");
        }
    }

    $documentPathsSerialized = serialize($documentPaths);

    // Insert data into the database
    $sql = "INSERT INTO clinics (clinic_name, email, password, phone, address, lab_services, insurance, emergency_contact, operating_hours, clinic_image, clinic_documents, verification_status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $verificationStatus = "Pending";
    $stmt->bind_param("ssssssssssss", $clinicName, $email, $password, $phone, $address, $labServices, $insurance, $emergencyContact, $operatingHours, $imagePath, $documentPathsSerialized, $verificationStatus);

    if ($stmt->execute()) {
        echo "<p>Clinic registered successfully! Your application is pending approval.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
