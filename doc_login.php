<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Registration</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .modal-header {
      background-color: #007bff;
      color: #fff;
    }
    .modal-footer {
      background-color: #f8f9fa;
    }
    .form-icon {
      position: relative;
    }
    .form-icon i {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #007bff;
    }
    .form-icon input {
      padding-left: 35px;
    }
  </style>
</head>
<body>
  <!-- Button to trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authModal">
    Register / Login
  </button>

  <!-- Modal -->
  <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="authModalLabel">Doctor Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Tabs for Login and Sign-Up -->
          <ul class="nav nav-tabs" id="authTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
            </li>
          </ul>
          <div class="tab-content mt-3" id="authTabsContent">
            <!-- Login Form -->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form id="loginForm">
                <div class="mb-3 form-icon">
                  <i class="fas fa-envelope"></i>
                  <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
                </div>
                <div class="mb-3 form-icon">
                  <i class="fas fa-lock"></i>
                  <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
              </form>
            </div>
            <!-- Sign-Up Form -->
            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
              <form id="signupForm">
                <div class="mb-3 form-icon">
                  <i class="fas fa-user"></i>
                  <input type="text" class="form-control" id="signupName" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3 form-icon">
                  <i class="fas fa-envelope"></i>
                  <input type="email" class="form-control" id="signupEmail" placeholder="Enter your email" required>
                </div>
                <div class="mb-3 form-icon">
                  <i class="fas fa-lock"></i>
                  <input type="password" class="form-control" id="signupPassword" placeholder="Enter a password" required>
                </div>
                <div class="mb-3 form-icon">
                  <i class="fas fa-briefcase-medical"></i>
                  <input type="text" class="form-control" id="signupSpecialization" placeholder="Specialization (e.g., Cardiologist)" required>
                </div>
                <div class="mb-3 form-icon">
                  <i class="fas fa-phone"></i>
                  <input type="text" class="form-control" id="signupPhone" placeholder="Phone number" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Sign Up</button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <p class="text-muted small">By signing up, you agree to our Terms and Privacy Policy.</p>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Example Form Handling Script -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Login functionality goes here!');
    });

    document.getElementById('signupForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Sign-up functionality goes here!');
    });
  </script>
</body>
</html>
