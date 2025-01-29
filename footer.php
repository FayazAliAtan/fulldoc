<div class="container">
  <footer class="py-5 bg-light text-dark">
    <div class="row">
      <!-- Column 1 -->
      <div class="col-6 col-md-2 mb-4">
        <h5 class="fs-4">Quick Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Our Service</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Near Clinic</a></li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div class="col-6 col-md-2 mb-4">
        <h5 class="fs-4">Contact</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Contact Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Clinics</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Doctors</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="col-6 col-md-2 mb-4">
        <h5 class="fs-4">Support</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Support</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted active fs-5 hover-link">Privacy</a></li>
        </ul>
      </div>

      <!-- Column 4 (Newsletter) -->
      <div class="col-12 col-md-4 offset-md-1 mb-4">
        <form>
          <h5 class="fs-4">Subscribe to our Newsletter</h5>
          <p class="fs-6">Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control fs-5" placeholder="Email address">
            <button class="btn btn-primary btn-lg" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer Bottom (Social Media & Copyright) -->
    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p class="fs-6">© 2024 DocSphere. All rights reserved.</p>
      <ul class="list-unstyled d-flex gap-3">
        <li>
          <a class="link-dark hover-icon" href="#" aria-label="Twitter">
            <img src="../images/twitt.avif" class="rounded-circle bi" width="32" height="32" alt="Twitter Icon">
          </a>
        </li>
        <li>
          <a class="link-dark hover-icon" href="#" aria-label="Instagram">
            <img src="../images/inst.avif" class="rounded-circle bi" width="32" height="32" alt="Instagram Icon">
          </a>
        </li>
        <li>
          <a class="link-dark hover-icon" href="#" aria-label="Facebook">
            <img src="../images/face.avif" class="rounded-circle bi" width="32" height="32" alt="Facebook Icon">
          </a>
        </li>
      </ul>
    </div>

    <!-- New Section: Contact Information -->
    <div class="d-flex justify-content-between py-4 border-top border-light">
      <div>
        <p class="fs-6">Contact Info:</p>
        <ul class="list-unstyled text-muted">
          <li>Email:docsphere786@gmail.com</li>
          <li>Phone: 91 6005607016</li>
          <li>Address: Trespone Kargil Ladakh</li>
        </ul>
      </div>
      <div>
       <!-- Button to Open Modal -->
<a href="#" class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book an Appointment</a>

<!-- Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="appointmentModalLabel">
          <i class="bi bi-calendar-check me-2"></i>Book Your Appointment
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Appointment Form -->
        <form method="post" role="form" action="validation_user.php" novalidate>
          <div class="row">
            <!-- User Name -->
            <div class="col-md-6 mb-3">
              <label for="userName" class="form-label">
                <i class="bi bi-person-fill me-2"></i>Name
              </label>
              <input
                type="text"
                name="userName"
                class="form-control"
                placeholder="Enter Your Name"
                required
              />
              <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <!-- Email ID -->
            <div class="col-md-6 mb-3">
              <label for="emailID" class="form-label">
                <i class="bi bi-envelope-fill me-2"></i>Email
              </label>
              <input
                type="email"
                name="emailID"
                class="form-control"
                placeholder="Enter Your Email"
                required
              />
              <div class="invalid-feedback">Please enter a valid email.</div>
            </div>
          </div>
          <div class="row">
            <!-- Phone Number -->
            <div class="col-md-6 mb-3">
              <label for="phoneNo" class="form-label">
                <i class="bi bi-telephone-fill me-2"></i>Phone Number
              </label>
              <input
                type="text"
                name="phoneNo"
                class="form-control"
                placeholder="Enter Your Phone Number"
                required
              />
              <div class="invalid-feedback">Please enter your phone number.</div>
            </div>
            <!-- Gender -->
            <div class="col-md-6 mb-3">
              <label class="form-label">
                <i class="bi bi-gender-ambiguous me-2"></i>Gender
              </label>
              <div class="d-flex align-items-center">
                <div class="form-check me-3">
                  <input
                    type="radio"
                    name="gender"
                    value="male"
                    class="form-check-input"
                    required
                  />
                  <label class="form-check-label">Male</label>
                </div>
                <div class="form-check me-3">
                  <input
                    type="radio"
                    name="gender"
                    value="female"
                    class="form-check-input"
                    required
                  />
                  <label class="form-check-label">Female</label>
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    name="gender"
                    value="other"
                    class="form-check-input"
                    required
                  />
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
                <i class="bi bi-calendar-fill me-2"></i>Age
              </label>
              <input
                type="number"
                name="age"
                class="form-control"
                placeholder="Enter Your Age"
                required
              />
              <div class="invalid-feedback">Please enter your age.</div>
            </div>
            <!-- Address -->
            <div class="col-md-6 mb-3">
              <label for="address" class="form-label">
                <i class="bi bi-geo-alt-fill me-2"></i>Address
              </label>
              <input
                type="text"
                name="address"
                class="form-control"
                placeholder="Enter Your Address"
                required
              />
              <div class="invalid-feedback">Please enter your address.</div>
            </div>
          </div>
          <div class="row">
            <!-- Doctor Selection -->
            <div class="col-md-6 mb-3">
              <label for="doctor" class="form-label">
                <i class="bi bi-person-badge-fill me-2"></i>Doctor
              </label>
              <select
                name="doctor"
                class="form-select"
                required
              >
                <option value="" selected>Select Doctor</option>
                <option value="Dr. John">Dr. John</option>
                <option value="Dr. Emma">Dr. Emma</option>
                <option value="Dr. Sarah">Dr. Sarah</option>
                <option value="Dr. Alex">Dr. Alex</option>
              </select>
              <div class="invalid-feedback">Please select a doctor.</div>
            </div>
            <!-- Appointment Date -->
            <div class="col-md-6 mb-3">
              <label for="appointmentDate" class="form-label">
                <i class="bi bi-calendar-date-fill me-2"></i>Appointment Date
              </label>
              <input
                type="date"
                name="appointmentDate"
                class="form-control"
                required
              />
              <div class="invalid-feedback">Please select an appointment date.</div>
            </div>
          </div>
          <div class="row">
            <!-- Appointment Time -->
            <div class="col-md-6 mb-3">
              <label for="appointmentTime" class="form-label">
                <i class="bi bi-clock-fill me-2"></i>Appointment Time
              </label>
              <input
                type="time"
                name="appointmentTime"
                class="form-control"
                required
              />
              <div class="invalid-feedback">Please select an appointment time.</div>
            </div>
            <!-- Terms and Conditions -->
            <div class="col-md-6 mb-3 d-flex align-items-center">
              <input
                type="checkbox"
                name="tc"
                class="form-check-input me-2"
                value="1"
                required
              />
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
  </div>
</div>

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
  </footer>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom CSS for Hover Effects -->
<style>
  .hover-link:hover {
    color: #343a40 !important; /* Dark text color for better contrast on hover */
    text-decoration: underline;
    transition: color 0.3s ease, text-decoration 0.3s ease;
  }

  .hover-icon:hover {
    transform: scale(1.1);
    transition: transform 0.3s ease;
  }
</style>
