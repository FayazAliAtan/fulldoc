<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DocSphere</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Roboto', sans-serif;
      }
      .navbar, .footer {
        background-color: #2D3E50;
      }
      .navbar-nav .nav-link {
        color: #f8f9fa !important;
        transition: color 0.3s ease;
      }
      .navbar-nav .nav-link:hover {
        color: #ff9800 !important;
      }
      .featurette-heading {
        font-size: 2.5rem;
        font-weight: 600;
      }
      .btn-primary {
        background-color: #007bff;
        border: none;
      }
      .btn-primary:hover {
        background-color: #0056b3;
      }
      .card-img-top {
        border-radius: 50%;
      }
      .container-marketing {
        margin-top: 50px;
      }
      .featurette-image {
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }
      .modal-content {
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
   
    <!-- navigation start -->
    <?php include 'head.php'?>
    <!-- navigation end -->

    <!-- carousel start -->
    <?php include 'carousel.php' ?>
    <!-- carousel end -->

    <div class="container marketing  mt-5">
  <div class="row">
    <!-- Doctor 1 -->
<div class="col-lg-4 text-center">
  <div class="card border-0 shadow hover-card">
    <!-- Image container, centered and ensuring the shape is a perfect circle -->
    <div class="d-flex justify-content-center align-items-center" style="height: 200px; width: 200px; margin: 0 auto;">
      <img src="../images/1.jpg" class="rounded-circle" style="object-fit: cover;" width="140" height="140" alt="Doctor Image">
    </div>
    <div class="card-body">
      <h2 class="fw-normal">Dr.Fayaz Ahmed</h2>
      <p>Click the profile button to see the profile of the doctor and availability</p>     
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Dr. Profile</button>
    </div>
  </div>
</div>

    <!-- Doctor 2 -->
<div class="col-lg-4 text-center">
  <div class="card border-0 shadow hover-card">
    <!-- Image container, centered and ensuring the shape is a perfect circle -->
    <div class="d-flex justify-content-center align-items-center" style="height: 200px; width: 200px; margin: 0 auto;">
      <img src="../images/2.jpg" class="rounded-circle" style="object-fit: cover;" width="140" height="140" alt="Doctor Image">
    </div>
    <div class="card-body">
      <h2 class="fw-normal">Dr.Fatima Nissa</h2>
      <p>Click the profile button to see the profile of the doctor and availability</p>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Dr. Profile</button>
    </div>
  </div>
</div>


    <!-- Doctor 3 -->
<div class="col-lg-4 text-center">
  <div class="card border-0 shadow hover-card">
    <!-- Image container, centered and ensuring the shape is a perfect circle -->
    <div class="d-flex justify-content-center align-items-center" style="height: 200px; width: 200px; margin: 0 auto;">
      <img src="../images/3.jpg" class="rounded-circle" style="object-fit: cover;" width="140" height="140" alt="Doctor Image">
    </div>
    <div class="card-body">
      <h2 class="fw-normal">Dr. Kharun Nissa</h2>
      <p>Click the profile button to see the profile of the doctor and availability</p>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Dr. Profile</button>
    </div>
  </div>
</div>



  <!-- Modal for Doctor Profile -->
   <!-- Doctor 1 -->
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

<!-- Modal end for Doctor 2 -->

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

<!-- Modal end for Doctor 3 -->


  <hr class="featurette-divider">

  <!-- Featurette Section -->
<div class="container marketing mt-5">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Welcome to Khan Clinic
      <span class="text-muted">We are dedicated to providing exceptional healthcare services with compassion and care</span></h2>
      <p class="lead">Khan Clinic offers compassionate, patient-first healthcare with skilled doctors, advanced technology, and a holistic approach to overall well-being.</p>
    </div>
    <div class="col-md-5">
      <div class="image-hover">
        <img src="../images/4.jpg" class="featurette-image img-fluid mx-auto rounded shadow" alt="Feature Image">
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Welcome to DocSphere Clinic <span class="text-muted">We are dedicated to providing exceptional healthcare services with compassion and care</span></h2>
      <p class="lead">Khan Clinic offers compassionate, patient-first healthcare with skilled doctors, advanced technology, and a holistic approach to overall well-being.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <div class="image-hover">
        <img src="../images/5.jpg" class="featurette-image img-fluid mx-auto rounded shadow" alt="Feature Image">
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">One Stop Clinic <span class="text-muted">We are dedicated to providing exceptional healthcare services with compassion and care.</span></h2>
      <p class="lead">This is the last block of placeholder content. Again, not really intended to be read, but to show you the layout in action.</p>
    </div>
    <div class="col-md-5">
      <div class="image-hover">
        <img src="../images/6.jpg" class="featurette-image img-fluid mx-auto rounded shadow" alt="Feature Image">
      </div>
    </div>
  </div>

  <hr class="featurette-divider">
</div>


<!-- Custom CSS for Hover Effects -->


<!-- features start -->

<style>
  .image-hover img {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.image-hover img:hover {
  transform: scale(1.05); /* Slight zoom effect */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Elevated shadow */
}
</style>


<!-- featurese   end-->

<style>
  .hover-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }

  .hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .hover-card h2 {
    color: #333;
    font-weight: bold;
  }

  .hover-card:hover h2 {
    color:rgb(67, 79, 81);
  }

  .hover-card img {
    transition: transform 0.3s ease-in-out;
  }

  .hover-card:hover img {
    transform: scale(1.1);
  }
</style>


    <!-- Appointment Section -->
    <?php include 'appointment1.php' ?>

    <!-- Footer Section -->
    <?php include 'footer.php' ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb/3f6PyP6Yc5qJwe0g0Xre6cJ5xe6MjB1g4J97fU6v4YNFQJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0L2FcM9Ha24g8+q1ceW3z5dldgL4kJmWhJCEwHNjk3HtHn22" crossorigin="anonymous"></script>

  </body>
</html>
