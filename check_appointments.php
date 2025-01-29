<?php
// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'database');

if ($conn->connect_error) {
    echo json_encode(['error' => 'Database connection failed']);
    exit();
}

// Get the selected date from the query parameter
$date = $_GET['date'] ?? '';

if ($date) {
    // Query to count appointments for the selected date
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM appointments WHERE appointment_date = ?");
    $stmt->bind_param("s", $date);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    echo json_encode(['count' => $result['count']]);
} else {
    echo json_encode(['error' => 'Invalid date']);
}

$conn->close();
?>
