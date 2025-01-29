<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinic Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .registration-section {
      background-color: #f8f9fa;
      padding: 40px 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .registration-section h2 {
      color: #343a40;
    }
    .form-control, .form-select {
      border-radius: 10px;
      padding: 10px;
    }
    .form-control:focus, .form-select:focus {
      box-shadow: 0 0 5px rgba(108, 117, 125, 0.5);
      border-color: #6c757d;
    }
    .btn-secondary {
      background-color: #6c757d;
      border: none;
    }
    .btn-secondary:hover {
      background-color: #565e64;
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



<section class="registration-section mt-5" id="clinic-registration">
  <div class="container">
    <h2 class="text-center mb-4"><i class="bi bi-building me-2"></i>Clinic Registration Form</h2>
    <form method="post" action="clinic_validation.php" enctype="multipart/form-data" novalidate>
      <div class="row">
        <!-- Clinic Name -->
        <div class="col-md-6 mb-3">
          <label for="clinicName" class="form-label"><i class="bi bi-hospital-fill me-2"></i>Clinic Name</label>
          <input type="text" class="form-control" id="clinicName"   name="clinicName" placeholder="Enter clinic name" required>
          <div class="invalid-feedback">Please provide the clinic name.</div>
        </div>

        <!-- Email -->
        <div class="col-md-6 mb-3">
          <label for="email" class="form-label"><i class="bi bi-envelope-fill me-2"></i>Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
          <div class="invalid-feedback">Please provide a valid email address.</div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
  <label for="password" class="form-label"><i class="bi bi-lock-fill me-2"></i>Password</label>
  <div class="input-group">
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
      <i class="bi bi-eye-fill"></i>
    </button>
  </div>
  <div class="invalid-feedback">Please provide a valid password.</div>
</div>
      <div class="row">
        <!-- Phone Number -->
        <div class="col-md-6 mb-3">
          <label for="phone" class="form-label"><i class="bi bi-telephone-fill me-2"></i>Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
          <div class="invalid-feedback">Please provide a valid phone number.</div>
        </div>

        <!-- Address -->
        <div class="col-md-6 mb-3">
          <label for="address" class="form-label"><i class="bi bi-geo-alt-fill me-2"></i>Address</label>
          <input type="text" class="form-control"   id="address" name="address" placeholder="Enter clinic address" required>
          <div class="invalid-feedback">Please provide the clinic address.</div>
        </div>
      </div>

      <div class="row">
        <!-- Lab Services -->
        <div class="col-md-6 mb-3">
          <label for="labServices" class="form-label"><i class="bi bi-flask me-2"></i>Lab Services</label>
          <select class="form-select"  id="labServices" name="labServices" required>
            <option value="" disabled selected>Select lab services offered</option>
            <option value="Blood Test">Blood Test</option>
            <option value="X-Ray">X-Ray</option>
            <option value="Ultrasound">Ultrasound</option>
            <option value="ECG">ECG</option>
            <option value="MRI">MRI</option>
          </select>
          <div class="invalid-feedback">Please select lab services offered by the clinic.</div>
        </div>

        <!-- Insurance Accepted -->
        <div class="col-md-6 mb-3">
          <label for="insurance" class="form-label"><i class="bi bi-shield-check me-2"></i>Insurance Accepted</label>
          <input type="text" class="form-control"  id="insurance"name="insurance" placeholder="Enter insurance providers accepted" required>
          <div class="invalid-feedback">Please provide the insurance providers accepted.</div>
        </div>
      </div>

      <div class="row">
        <!-- Emergency Contact -->
        <div class="col-md-6 mb-3">
          <label for="emergencyContact" class="form-label"><i class="bi bi-person-fill me-2"></i>Emergency Contact</label>
          <input type="tel" class="form-control"   id="emergencyContact" name="emergencyContact"  placeholder="Enter emergency contact number" required>
          <div class="invalid-feedback">Please provide an emergency contact number.</div>
        </div>

        <!-- Operating Hours -->
        <div class="col-md-6 mb-3">
          <label for="operatingHours" class="form-label"><i class="bi bi-clock-fill me-2"></i>Operating Hours</label>
          <select class="form-select" id="operatingHours" name="operatingHours" required>
            <option value="" disabled selected>Select operating hours</option>
            <option value="9:00 AM - 5:00 PM">9:00 AM - 5:00 PM</option>
            <option value="8:00 AM - 4:00 PM">8:00 AM - 4:00 PM</option>
            <option value="10:00 AM - 6:00 PM">10:00 AM - 6:00 PM</option>
            <option value="24/7">24/7</option>
          </select>
          <div class="invalid-feedback">Please select the operating hours.</div>
        </div>
      </div>

      <div class="row">
        <!-- Verification Status (Admin Controlled) -->
        <div class="col-md-6 mb-3">
          <label for="verificationStatus" class="form-label"><i class="bi bi-check-circle me-2"></i>Verification Status</label>
          <input type="text" class="form-control" id="verificationStatus"  name="verificationStatus"  value="Pending (Admin controlled)" readonly>
          <small class="text-muted">Your verification status will be controlled by the admin.</small>
        </div>
      </div>

      <div class="row">
        <!-- Upload Images -->
        <div class="col-md-6 mb-3">
          <label for="clinicImage" class="form-label"><i class="bi bi-image me-2"></i>Upload Clinic Image</label>
          <input type="file" class="form-control" id="clinicImage" name="clinicImage" accept="image/*" required>
          <div class="invalid-feedback">Please upload a clinic image.</div>
        </div>

        <!-- Upload Documents -->
        <div class="col-md-6 mb-3">
          <label for="clinicDocuments" class="form-label"><i class="bi bi-folder-fill me-2"></i>Upload Documents</label>
          <input type="file" class="form-control" id="clinicDocuments" name="clinicDocuments[]" multiple accept=".pdf,.doc,.docx" required>
          <div class="invalid-feedback">Please upload the required documents.</div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-secondary mt-3"><i class="bi bi-person-plus-fill me-2"></i>Register Clinic</button>
      </div>
    </form>
  </div>
</section>

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // JavaScript to toggle password visibility
  document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const toggleIcon = this.querySelector('i');

    // Toggle the input type between password and text
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleIcon.classList.remove('bi-eye-fill');
      toggleIcon.classList.add('bi-eye-slash-fill');
    } else {
      passwordField.type = 'password';
      toggleIcon.classList.remove('bi-eye-slash-fill');
      toggleIcon.classList.add('bi-eye-fill');
    }
  });
</script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
</body>
</html>
