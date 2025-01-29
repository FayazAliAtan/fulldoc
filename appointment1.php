<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DocSphere";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch doctors from the database
$doctors = [];
$sql = "SELECT id, full_name FROM doctors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $doctors[] = $row; // Store doctor details in an array
    }
} else {
    echo "No doctors found in the database.";
}
?>




<!-- Appointment Section -->
<section class="appointment-section my-5">
  <div class="container">
    <h2 class="text-center mt-5 fs-3 text-primary">
      <i class="bi bi-calendar-check me-2"></i>Book Your Appointment
    </h2>
    <div class="card shadow p-4 mt-4">
      <form method="post" role="form" action="validation_user.php" novalidate>
        <div class="row">

        <!-- Appointment Count (hidden field or visible for demo purposes) -->
           <div class="col-md-6 mb-3">
             <label for="currentAppointments" class="form-label">
               <i class="bi bi-list-check me-2"></i>Current Appointments
             </label>
             <input
               type="number"
               id="currentAppointments"
               name="currentAppointments"
               class="form-control"
               value="0"
               min="0"
               readonly
             />
           </div>

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
                  <select name="doctor" class="form-select" required>
                      <option value="" selected>Select Doctor</option>
                      <?php foreach ($doctors as $doctor): ?>
                          <option value="<?php echo htmlspecialchars($doctor['full_name']); ?>">
                              <?php echo htmlspecialchars($doctor['full_name']); ?>
                          </option>
                      <?php endforeach; ?>
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
        <button
               type="submit"
               id="submitButton"
               class="btn btn-secondary btn-lg"
               >
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


<script>
 document.addEventListener('DOMContentLoaded', function () {
  const maxAppointments = 6; // Fixed appointment limit
  const appointmentInput = document.getElementById('currentAppointments');
  const submitButton = document.getElementById('submitButton');

  // Function to update button state based on appointment count
  function updateButtonState(currentAppointments) {
    if (currentAppointments >= maxAppointments) {
      submitButton.disabled = true;
      submitButton.classList.add('btn-danger');
      submitButton.classList.remove('btn-secondary');
      submitButton.textContent = 'Appointment Full';
    } else {
      submitButton.disabled = false;
      submitButton.classList.remove('btn-danger');
      submitButton.classList.add('btn-secondary');
      submitButton.textContent = 'Submit';
    }
  }

  // Function to fetch the current appointment count from the server
  function fetchAppointmentCount() {
    fetch('fetch_appointments.php') // Server-side script to return appointment count
      .then(response => response.json())
      .then(data => {
        if (data && typeof data.currentAppointments !== 'undefined') {
          const currentAppointments = parseInt(data.currentAppointments, 10);
          appointmentInput.value = currentAppointments; // Update hidden field with current count
          updateButtonState(currentAppointments); // Update the button state based on count
        } else {
          console.error('Invalid data format received:', data);
        }
      })
      .catch(error => {
        console.error('Error fetching appointment count:', error);
      });
  }

  // Initial fetch and state update
  fetchAppointmentCount();

  // Periodic update every 10 seconds
  setInterval(fetchAppointmentCount, 10000); // Update every 10 seconds
});

</script>
