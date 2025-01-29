<?php
include 'authentication.php';


include 'includes/header.php';?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
      <div class="card ">
        <div class="card-header">
          <h4>
            Book Appointment
            <a href="index.php" class="btn btn-danger float-end">Back</a>
            <a href="#" class="btn btn-secondary float-end">Add Appointment</a>
          </h4>
        </div>
        <div class="card-body ">

          <!-- Appointment Section -->
          <section class="appointment-section my-5  ">
            <div class="container">
              <h2 class="text-center mt-5 fs-3 text-primary">
                <i class="bi bi-calendar-check me-2"></i>
              </h2>
              <div class="card shadow p-4 mt-4">
                <form method="post" role="form" action="code.php" novalidate class="mb-5">
                  <div class="row">
                    <!-- User Name -->
                    <div class="col-md-6 mb-3">
                      <label for="userName" class="form-label">
                        <i class="bi bi-person-fill me-2"></i>
                      </label>
                      <input type="text" name="userName" class="form-control" placeholder="Enter Your Name" required />
                      <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <!-- Email ID -->
                    <div class="col-md-6 mb-3">
                      <label for="emailID" class="form-label">
                        <i class="bi bi-envelope-fill me-2"></i>
                      </label>
                      <input type="email" name="emailID" class="form-control" placeholder="Enter Your Email" required />
                      <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Phone Number -->
                    <div class="col-md-6 mb-3">
                      <label for="phoneNo" class="form-label">
                        <i class="bi bi-telephone-fill me-2"></i>
                      </label>
                      <input type="text" name="phoneNo" class="form-control" placeholder="Enter Your Phone Number"
                        required />
                      <div class="invalid-feedback">Please enter your phone number.</div>
                    </div>

                    <!-- Gender -->
                    <div class="col-md-6 mb-3">
                      <label class="form-label">
                        <i class="bi bi-gender-ambiguous me-2"></i>Gender
                      </label>
                      <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                          <input type="radio" name="gender" value="male" class="form-check-input" required />
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check me-3">
                          <input type="radio" name="gender" value="female" class="form-check-input" required />
                          <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                          <input type="radio" name="gender" value="other" class="form-check-input" required />
                          <label class="form-check-label">Other</label>
                        </div>
                      </div>
                      <div class="invalid-feedback">Please select your gender.</div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Age -->
                    <div class="col-md-6 mb-3">
                      <label for="age" class="form-label">
                        <i class="bi bi-calendar-fill me-2"></i>
                      </label>
                      <input type="number" name="age" class="form-control" placeholder="Enter Your Age" required />
                      <div class="invalid-feedback">Please enter your age.</div>
                    </div>

                    <!-- Address -->
                    <div class="col-md-6 mb-3">
                      <label for="address" class="form-label">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                      </label>
                      <input type="text" name="address" class="form-control" placeholder="Enter Your Address"
                        required />
                      <div class="invalid-feedback">Please enter your address.</div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Doctor Selection -->
                    <div class="col-md-6 mb-3">
                      <label for="doctor" class="form-label">
                        <i class="bi bi-person-badge-fill me-2"></i>
                      </label>
                      <select name="doctor" class="form-select" required>
                        <option value="" selected>Select Doctor</option>
                        <option value="Dr. John">Dr. Kaneez Fatima</option>
                        <option value="Dr. Emma">Dr. Ahmed Ali</option>
                        <option value="Dr. Sarah">Dr. Hussain</option>
                        <option value="Dr. Alex">Dr. Haider</option>
                      </select>
                      <div class="invalid-feedback">Please select a doctor.</div>
                    </div>

                    <!-- Appointment Date -->
                    <div class="col-md-6 mb-3">
                      <label for="appointmentDate" class="form-label">
                        <i class="bi bi-calendar-date-fill me-2"></i>
                      </label>
                      <input type="date" name="appointmentDate" class="form-control" required />
                      <div class="invalid-feedback">Please select an appointment date.</div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Appointment Time -->
                    <div class="col-md-6 mb-3">
                      <label for="appointmentTime" class="form-label">
                        <i class="bi bi-clock-fill me-2"></i>
                      </label>
                      <input type="time" name="appointmentTime" class="form-control" required />
                      <div class="invalid-feedback">Please select an appointment time.</div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="col-md-6 mb-3 d-flex align-items-center">
                      <input type="checkbox" name="tc" class="form-check-input me-2" value="1" required />
                      <label for="tc" class="form-label mb-0">Agree to Terms</label>
                      <div class="invalid-feedback">You must agree to the terms.</div>
                    </div>
                  </div>

                  <!-- Submit Button -->
                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-secondary btn-lg">
                      <i class="bi bi-send me-2"></i>Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </section>

          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
          <script>
            // Validation
            (function () {
              'use strict';
              let forms = document.querySelectorAll('form');
              Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                  if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            })();
          </script>

        </div>
      </div>













    </div>
  </div>
</div>



<?php include 'includes/footer.php';?>