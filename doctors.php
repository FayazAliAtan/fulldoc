<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor's Page</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* Removed rounded circle images and new features */
    .hover-effect {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-effect:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .image-container {
      overflow: hidden;
      position: relative;
    }

    .image-container img {
      transition: transform 0.3s ease;
    }

    .image-container:hover img {
      transform: scale(1.1);
    }

    /* Modal header and body styles */
    .modal-title {
      font-size: 1.8rem;
      font-weight: bold;
      color: #007bff;
    }

    .modal-body {
      font-size: 1.2rem;
      color: #555;
    }

    .modal-footer {
      border-top: 1px solid #e9ecef;
    }

    .btn-outline-secondary {
      transition: background-color 0.3s ease, color 0.3s ease;
      border-radius: 25px;
    }

    .btn-outline-secondary:hover {
      background-color: #007bff;
      color: white;
    }

    @media (max-width: 768px) {
      .doctor-card {
        margin-bottom: 20px;
      }
    }

    .form-control, .form-select {
      border-radius: 10px;
      transition: border-color 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
      border-color: #007bff;
    }

    .btn-secondary {
      border-radius: 10px;
      padding: 10px 20px;
      font-size: 1.2rem;
    }

    /* Booking form layout */
    .booking-form {
      background-color: #f8f9fa;
      padding-top: 50px;
      padding-bottom: 50px;
      border-radius: 10px;
    }

    /* Removed circular images */
    .doctor-img {
      object-fit: cover;
      width: 150px;
      height: 150px;
      margin: 0 auto;
    }

  </style>
</head>

<body>

<!-- nav start -->
<?php include 'head.php'; ?>
<!-- nav end -->

<!-- carousel start -->
<?php include 'carousel.php'; ?>
<!-- carousel end -->

<!-- Doctor List Section -->
<section id="doctor-list" class="container my-5">
  <h2 class="text-center mb-4">Meet Our Doctors</h2>
  <div class="row">
    <!-- Doctor 1 -->
    <div class="col-md-4">
      <div class="card doctor-card shadow-sm hover-effect">
        <div class="image-container">
          <img src="../images/3.jpg" class="card-img-top doctor-img" alt="Doctor 1">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Fayaz Ahmed</h5>
          <p class="card-text">Specialization: General Medicine</p>
          <!-- Modal button -->
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">View Profile</button>
        </div>
      </div>
    </div>

    <!-- Doctor 2 -->
    <div class="col-md-4">
      <div class="card doctor-card shadow-sm hover-effect">
        <div class="image-container">
          <img src="../images/2.jpg" class="card-img-top doctor-img" alt="Doctor 2">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Fatima Nissa</h5>
          <p class="card-text">Specialization: Cardiology</p>
          <!-- Modal button -->
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Profile</button>
        </div>
      </div>
    </div>

    <!-- Doctor 3 -->
    <div class="col-md-4">
      <div class="card doctor-card shadow-sm hover-effect">
        <div class="image-container">
          <img src="../images/1.jpg" class="card-img-top doctor-img" alt="Doctor 3">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title">Dr.Khariun Nissa</h5>
          <p class="card-text">Specialization: Pediatrics</p>
          <!-- Modal button -->
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3">View Profile</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal for Dr. John Doe -->
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

<!-- Modal for Dr. Alice Brown -->
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

<!-- Booking Form Section -->
<?php include 'appointment1.php'?>
<!-- Additional Custom Styles -->
<style>
  #booking-form .form-label {
    font-weight: bold;
  }

  #booking-form .form-control, #booking-form .form-select {
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  #booking-form .form-control:focus, #booking-form .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 2px 10px rgba(0, 123, 255, 0.5);
  }

  #booking-form button {
    font-size: 1.2rem;
    padding: 10px 20px;
    border-radius: 25px;
  }

  #booking-form button:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }

  /* Additional Input Group styling */
  .input-group-text {
    background-color: #f1f1f1;
    border-radius: 10px;
  }

  @media (max-width: 768px) {
    #booking-form .container {
      padding: 0 15px;
    }

    #booking-form .row {
      flex-direction: column;
    }
  }
</style>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<!-- footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
