<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Registration</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .registration-section {
      background-color: #f8f9fa;
      padding: 50px 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .registration-section h2 {
      color: #343a40;
    }
    .form-control, .form-select {
      border-radius: 10px;
      border: 1px solid #ced4da;
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
<?php  include 'head.php'; ?>
 <!-- nav end -->

<!-- carousel start -->
<?php  include 'carousel.php'?>
 <!-- carousel end -->
 <hr class="featurette-divider">
  <!-- Doctor Registration Section -->
  <section class="registration-section" id="doctor-registration">
    <div class="container">
        <h2 class="text-center mb-4">Doctor Registration Form</h2>
        <div class="progress mb-4">
            <div class="progress-bar progress-bar-striped bg-success" id="formProgress" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
        <form method="POST" action="validation_doctor.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="row">
                <!-- Full Name -->
                <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label"><i class="bi bi-person-fill me-2"></i>Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required>
                    <div class="invalid-feedback">Please enter your full name.</div>
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label"><i class="bi bi-envelope-fill me-2"></i>Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="col-md-6 mb-3">
                 <label for="password" class="form-label"><i class="bi bi-lock-fill me-2"></i>Password</label>
                  <div class="input-group">
                      <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password" require>
                      <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="bi bi-eye-fill"></i>
                      </button>
                    </div>
                    <div class="invalid-feedback">Please provide a valid password.</div>
                 </div>


            </div>
           

            <div class="row">
                <!-- Phone Number -->
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label"><i class="bi bi-telephone-fill me-2"></i>Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                    <div class="invalid-feedback">Please enter your phone number.</div>
                </div>

                <!-- Gender -->
                <div class="col-md-6 mb-3">
                    <label for="gender" class="form-label"><i class="bi bi-gender-ambiguous me-2"></i>Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="" selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <div class="invalid-feedback">Please select a gender.</div>
                </div>
            </div>

            <div class="row">
                <!-- Specialization -->
                <div class="col-md-6 mb-3">
                    <label for="specialization" class="form-label"><i class="bi bi-award-fill me-2"></i>Specialization</label>
                    <input type="text" class="form-control" id="specialization" name="specialization" placeholder="Enter specialization" required>
                    <div class="invalid-feedback">Please enter your specialization.</div>
                </div>

                <!-- Experience -->
                <div class="col-md-6 mb-3">
                    <label for="experience" class="form-label"><i class="bi bi-briefcase-fill me-2"></i>Experience (in years)</label>
                    <input type="number" class="form-control" id="experience" name="experience" placeholder="Enter years of experience" required>
                    <div class="invalid-feedback">Please enter your years of experience.</div>
                </div>
            </div>

            <div class="row">
                <!-- Hospital -->
                <div class="col-md-6 mb-3">
                    <label for="hospital" class="form-label"><i class="bi bi-hospital-fill me-2"></i>Hospital</label>
                    <input type="text" class="form-control" id="hospital" name="hospital" placeholder="Enter hospital name" required>
                    <div class="invalid-feedback">Please enter the hospital name.</div>
                </div>

                <!-- Qualifications -->
                <div class="col-md-6 mb-3">
                    <label for="qualifications" class="form-label"><i class="bi bi-journal-text me-2"></i>Qualifications</label>
                    <textarea class="form-control" id="qualifications" name="qualifications" rows="3" placeholder="Enter qualifications" maxlength="250" required></textarea>
                    <small class="text-muted"><span id="charCount">0</span>/250 characters</small>
                    <div class="invalid-feedback">Please enter your qualifications.</div>
                </div>
            </div>

            <div class="row">
                <!-- Profile Image -->
                <div class="col-md-6 mb-3">
                    <label for="profileImage" class="form-label"><i class="bi bi-image me-2"></i>Upload Profile Image</label>
                    <input type="file" class="form-control" id="profileImage" name="profileImage" accept="image/*" required>
                    <div class="invalid-feedback">Please upload a profile image.</div>
                </div>

                <!-- Upload Documents -->
                <div class="col-md-6 mb-3">
                    <label for="documents" class="form-label"><i class="bi bi-folder-fill me-2"></i>Upload Documents</label>
                    <input type="file" class="form-control" id="documents" name="documents[]" multiple accept=".pdf,.doc,.docx" required>
                    <div class="invalid-feedback">Please upload required documents.</div>
                </div>
            </div>

            <!-- Verification Status - Admin Controlled -->
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="verificationStatus" class="form-label"><i class="bi bi-check-circle me-2"></i>Verification Status</label>
                    <input type="text" class="form-control" id="verificationStatus" name="verificationStatus" value="Pending (Admin controlled)" readonly>
                    <small class="text-muted">Your verification status will be managed by the admin.</small>
                </div>
            </div>

            <div class="row">
                <!-- Input Registration ID -->
                <div class="col-md-6 mb-3">
                    <label for="inputRegistrationId" class="form-label"><i class="bi bi-key me-2"></i>Doctor Registration ID</label>
                    <input type="text" class="form-control" id="inputRegistrationId" name="registrationId" placeholder="Enter Doctor Registration ID" required>
                    <div class="invalid-feedback">Please enter a valid registration ID.</div>
                </div>
            </div>

            <div class="row">
                <!-- Submit Button -->
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-gradient">
                        <i class="bi bi-person-plus-fill me-2"></i>Register Doctor
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

 <!-- footer -->
 <?php  include 'footer.php'; ?>
 <!-- end footer -->

  <!-- Bootstrap JS -->

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
