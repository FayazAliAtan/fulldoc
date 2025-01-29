<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DocSphere</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom Styling */
    .hero-section {
      background: #f8f9fa;
      padding: 60px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
      color: #343a40;
    }

    .hero-section p {
      font-size: 1.25rem;
      color: #6c757d;
    }

    .doctor-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .doctor-card img {
      border-radius: 8px 8px 0 0;
    }

    .doctor-card .card-body {
      text-align: center;
      padding: 20px;
    }

    .doctor-card .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .doctor-card .card-text {
      font-size: 1.125rem;
      color: #6c757d;
    }

    .btn-secondary {
      background-color: #007bff;
      border: none;
      color: white;
      font-size: 1rem;
      padding: 10px 20px;
    }

    .btn-secondary:hover {
      background-color: #0056b3;
    }

    .table th, .table td {
      font-size: 1rem;
      text-align: center;
      vertical-align: middle;
    }

    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<!-- nav start -->
<?php  include 'head.php'; ?>
<!-- nav end -->

<!-- carousel start -->
<?php  include 'carousel.php'?>
<!-- carousel end -->

<hr class="featurette-divider">

<!-- Hero Section -->
<section class="hero-section" id="hero">
  <div class="container">
    <h1>Welcome to DocSphere</h1>
    <p>Your health is our priority. Meet our team of expert doctors and book your appointment today.</p>
  </div>
</section>

<!-- Doctor List Section -->
<section id="doctor-list" class="container my-5">
  <h2 class="text-center mb-4" style="font-size: 2rem;">Meet Our Doctors</h2>
  <div class="row">
    <!-- Doctor 1 -->
    <div class="col-md-4">
      <div class="card doctor-card">
        <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 1">
        <div class="card-body">
          <h5 class="card-title">Dr Fayaz Ahmed</h5>
          <p class="card-text">Specialization: General Medicine</p>
          <!-- modal button start -->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            View Profile
          </button>
          <!-- modal button end -->
        </div>
      </div>
    </div>
    <!-- Doctor 2 -->
    <div class="col-md-4">
      <div class="card doctor-card">
        <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 2">
        <div class="card-body">
          <h5 class="card-title">Dr.Fatima Nissa</h5>
          <p class="card-text">Specialization: Pediatrics</p>
          <!-- modal button start -->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            View Profile
          </button>
          <!-- modal button end -->
        </div>
      </div>
    </div>
    <!-- Doctor 3 -->
    <div class="col-md-4">
      <div class="card doctor-card">
        <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 3">
        <div class="card-body">
          <h5 class="card-title">Dr. Khariun Nissa</h5>
          <p class="card-text">Specialization: Cardiology</p>
          <!-- modal button start -->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            View Profile
          </button>
          <!-- modal button end -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// Example PHP script to dynamically generate doctor profile modals
// Assuming you have a database connection established
include 'db.php'; // Include database connection

// Query to get doctor details
$query = "SELECT * FROM `doctor_profile` WHERE id = 2"; // Replace '1' with dynamic ID if needed
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $doctor = mysqli_fetch_assoc($result);
?>

<!-- Modal start for Doctor -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor Profile: <?php echo htmlspecialchars($doctor['name']); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <div class="row">
          <!-- Doctor's Image and Basic Info -->
          <div class="col-md-4 text-center">
            <img src="<?php echo htmlspecialchars($doctor['image_url']); ?>" alt="Doctor Image" class="img-fluid rounded-circle mb-3" width="200" height="200">
            <h4 class="fw-bold"><?php echo htmlspecialchars($doctor['name']); ?></h4>
            <p class="text-muted">Specialization: <?php echo htmlspecialchars($doctor['specialization']); ?></p>
            <p class="text-muted">Gender: <?php echo htmlspecialchars($doctor['Gender']); ?></p>
            <p class="text-muted">Age: <?php echo htmlspecialchars($doctor['DateOfBirth']); ?></p>
            <p class="text-muted">Location: <?php echo htmlspecialchars($doctor['location']); ?></p>
            <p class="text-muted">availability: <?php echo htmlspecialchars($doctor['Status']); ?></p>
          </div>

          <!-- Doctor's Details -->
          <div class="col-md-8">
            <h5 class="mb-3">About</h5>
            <p><?php echo htmlspecialchars($doctor['about']); ?></p>

            <h5 class="mb-3">Contact Information</h5>
            <ul class="list-unstyled">
              <li><strong>Email:</strong> <?php echo htmlspecialchars($doctor['Email']); ?></li>
              <li><strong>Phone:</strong> <?php echo htmlspecialchars($doctor['contact']); ?></li>
             
            </ul>

            <h5 class="mb-3">Professional Details</h5>
            <ul class="list-unstyled">
              <li><strong>Years of Experience:</strong> <?php echo htmlspecialchars($doctor['YearsOfExperience']); ?></li>
              <li><strong>Qualifications:</strong> <?php echo htmlspecialchars($doctor['Qualifications']); ?></li>
              <li><strong>License Number:</strong> <?php echo htmlspecialchars($doctor['LicenseNumber']); ?></li>
            </ul>

            <h5 class="mb-3">Languages Spoken</h5>
            
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="appointment.php"> <button type="button" class="btn btn-secondary">Make Appointment</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Modal end for Doctor -->

<?php
} else {
    echo "<p>No doctor data found.</p>";
}
?>

<!-- Modal start for Doctor 2 -->
<?php
// Example PHP script to dynamically generate doctor profile modals for multiple doctors
include 'db.php'; // Include database connection

// Query to get doctor details for multiple doctors
$query = "SELECT * FROM `doctor_profile` WHERE id=3"; // Replace IDs with dynamic ones if needed
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($doctor = mysqli_fetch_assoc($result)) {
?>

<!-- Modal start for Doctor -->
<div class="modal fade" id="exampleModal2"<?php echo htmlspecialchars($doctor['id']); ?> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor Profile: <?php echo htmlspecialchars($doctor['name']); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <div class="row">
          <!-- Doctor's Image and Basic Info -->
          <div class="col-md-4 text-center">
            <img src="<?php echo htmlspecialchars($doctor['image_url']); ?>" alt="Doctor Image" class="img-fluid rounded-circle mb-3" width="200" height="200">
            <h4 class="fw-bold"> <?php echo htmlspecialchars($doctor['name']); ?></h4>
            <p class="text-muted">Specialization: <?php echo htmlspecialchars($doctor['specialization']); ?></p>
            <p class="text-muted">Gender: <?php echo htmlspecialchars($doctor['Gender']); ?></p>
            <p class="text-muted">Age: <?php echo htmlspecialchars($doctor['DateOfBirth']); ?></p>
            <p class="text-muted">Location: <?php echo htmlspecialchars($doctor['location']); ?></p>
            <p class="text-muted">availability: <?php echo htmlspecialchars($doctor['Status']); ?></p>
          </div>

          <!-- Doctor's Details -->
          <div class="col-md-8">
            <h5 class="mb-3">About</h5>
            <p><?php echo htmlspecialchars($doctor['about']); ?></p>

            <h5 class="mb-3">Contact Information</h5>
            <ul class="list-unstyled">
              <li><strong>Email:</strong> <?php echo htmlspecialchars($doctor['Email']); ?></li>
              <li><strong>Phone:</strong> <?php echo htmlspecialchars($doctor['contact']); ?></li>
              <p class="text-muted">Location: <?php echo htmlspecialchars($doctor['location']); ?></p>
              <p class="text-muted">availability: <?php echo htmlspecialchars($doctor['Status']); ?></p>
            </ul>

            <h5 class="mb-3">Professional Details</h5>
            <ul class="list-unstyled">
              <li><strong>Years of Experience:</strong> <?php echo htmlspecialchars($doctor['yearsOfExperience']); ?></li>
              <li><strong>Qualifications:</strong> <?php echo htmlspecialchars($doctor['Qualification']); ?></li>
              <li><strong>License Number:</strong> <?php echo htmlspecialchars($doctor['LicenseNumber']); ?></li>
            </ul>

           
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <a href="appointment.php"> <button type="button" class="btn btn-secondary">Make Appointment</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Modal end for Doctor -->

<?php
    }
} else {
    echo "<p>No doctor data found.</p>";
}
?>

<!-- Modal start for Doctor 3 -->
<?php
// Example PHP script to dynamically generate doctor profile modals
// Assuming you have a database connection established
include 'db.php'; // Include database connection

// Query to get all doctor details
$query = "SELECT * FROM `doctor_profile` WHERE id=4";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($doctor = mysqli_fetch_assoc($result)) {
?>

<!-- Modal start for Doctor -->
<div class="modal fade" id="exampleModal3"<?php echo htmlspecialchars($doctor['id']); ?> tabindex="-1" aria-labelledby="exampleModalLabel<?php echo htmlspecialchars($doctor['id']); ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo htmlspecialchars($doctor['id']); ?>">Doctor Profile: <?php echo htmlspecialchars($doctor['name']); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <div class="row">
          <!-- Doctor's Image and Basic Info -->
          <div class="col-md-4 text-center">
            <img src="<?php echo htmlspecialchars($doctor['image_url']); ?>" alt="Doctor Image" class="img-fluid rounded-circle mb-3" width="200" height="200">
            <h4 class="fw-bold">Dr. <?php echo htmlspecialchars($doctor['name']); ?></h4>
            <p class="text-muted">Specialization: <?php echo htmlspecialchars($doctor['specialization']); ?></p>
            <p class="text-muted">Gender: <?php echo htmlspecialchars($doctor['Gender']); ?></p>
            <p class="text-muted">Age: <?php echo htmlspecialchars($doctor['DateOfBirth']); ?></p>
            <p class="text-muted">Location: <?php echo htmlspecialchars($doctor['location']); ?></p>
            <p class="text-muted">availability: <?php echo htmlspecialchars($doctor['Status']); ?></p>
          </div>

          <!-- Doctor's Details -->
          <div class="col-md-8">
            <h5 class="mb-3">About</h5>
            <p><?php echo htmlspecialchars($doctor['about']); ?></p>

            <h5 class="mb-3">Contact Information</h5>
            <ul class="list-unstyled">
              <li><strong>Email:</strong> <?php echo htmlspecialchars($doctor['Email']); ?></li>
              <li><strong>Phone:</strong> <?php echo htmlspecialchars($doctor['contact']); ?></li>
              <li><strong>Website:</strong> <a href="<?php echo htmlspecialchars($doctor['website']); ?>" target="_blank"><?php echo htmlspecialchars($doctor['website']); ?></a></li>
            </ul>

            <h5 class="mb-3">Professional Details</h5>
            <ul class="list-unstyled">
              <li><strong>Years of Experience:</strong> <?php echo htmlspecialchars($doctor['YearsOfExperience']); ?></li>
              <li><strong>Qualifications:</strong> <?php echo htmlspecialchars($doctor['Qualification']); ?></li>
              <li><strong>License Number:</strong> <?php echo htmlspecialchars($doctor['LicenseNumber']); ?></li>
            </ul>

          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="appointment.php"> <button type="button" class="btn btn-secondary">Make Appointment</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Modal end for Doctor -->

<?php
    }
} else {
    echo "<p>No doctor data found.</p>";
}
?>

<!-- Contact Information Section with Table for Clinic -->
<section id="contact-info" class="contact-info">
  <div class="container">
    <h2 class="text-center mb-4" style="font-size: 2rem;">Contact Information</h2>
    <table class="table table-bordered table-striped table-hover">
                            <?php
                        // Database connection
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "DocSphere";
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        
                        // Fetch all clinics
                        $sql = "SELECT clinic_name, address, phone, email, operating_hours, status FROM clinics";
                        $result = $conn->query($sql);
                        ?>
                        
                        <!-- Clinics Table -->
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Clinic Name</th>
                              <th>Address</th>
                              <th>Phone Number</th>
                              <th>Email</th>
                              <th>Working Hours</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                // Loop through the rows and display data
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['clinic_name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['operating_hours']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No clinics found</td></tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                        
                        <?php
                        $conn->close();
                        ?>
    </table>
  </div>
</section>

<!-- footer -->
<?php  include 'footer.php'; ?>
<!-- footer end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
