<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database Connection Class
class Database {
    private $host = "localhost";
    private $dbname = "DocSphere";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

// Form Validator Class
class Validator {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validatePhone($phone) {
        return preg_match('/^\+?[0-9]{10,15}$/', $phone);
    }

    public static function validateRegistrationId($registrationId) {
        return is_numeric($registrationId); // Ensure registrationId is numeric
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['pass']; // Get password from POST
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $specialization = $_POST['specialization'];
    $experience = (int) $_POST['experience'];
    $hospital = $_POST['hospital'];
    $qualifications = $_POST['qualifications'];
    $registrationId = $_POST['registrationId'];

    // Validate fields
    if (empty($fullName) || empty($email) || empty($phone) || empty($gender) || empty($specialization) || empty($hospital) || empty($registrationId)) {
        die("All fields are required.");
    }

    if (!Validator::validateEmail($email)) {
        die("Invalid email format.");
    }

    if (!Validator::validatePhone($phone)) {
        die("Invalid phone number format.");
    }

    if (!Validator::validateRegistrationId($registrationId)) {
        die("Invalid registration ID format.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection
    $db = new Database();
    $conn = $db->connect();

    // Prepare SQL query using PDO prepared statements
    $sql = "INSERT INTO doctors (full_name, email, password, phone, gender, specialization, experience, hospital, qualifications, verification_status, registration_id)
            VALUES (:fullName, :email, :password, :phone, :gender, :specialization, :experience, :hospital, :qualifications, 'Pending', :registrationId)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword); // Bind hashed password
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':specialization', $specialization);
    $stmt->bindParam(':experience', $experience, PDO::PARAM_INT);
    $stmt->bindParam(':hospital', $hospital);
    $stmt->bindParam(':qualifications', $qualifications);
    $stmt->bindParam(':registrationId', $registrationId, PDO::PARAM_INT);

    try {
        // Execute the query
        $stmt->execute();
        echo "Doctor registered successfully!";
    } catch (PDOException $e) {
        // Handle error and provide feedback
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
}
?>
