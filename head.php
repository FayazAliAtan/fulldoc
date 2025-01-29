<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocSphere Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons for better visual clarity -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom navbar styling */
        .navbar {
            background-color: #2D3E50;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-nav .nav-link {
            color: #f8f9fa !important;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff9800 !important;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #ff9800 !important;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #ff9800;
        }

        .dropdown-menu {
            background-color: #2D3E50;
            border-radius: 0.5rem;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .dropdown-menu.show {
            opacity: 0.5;
        }

        .dropdown-item {
            color: #f8f9fa !important;
            padding: 12px 20px;
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #444f60;
            color: #fff !important;
        }

        .dropdown-item.active {
            background-color: #ff9800;
            color: #fff !important;
        }

        .dropdown-toggle::after {
            content: '\f0d7';
            font-family: 'Bootstrap Icons' !important;
            font-size: 1rem;
            margin-left: 5px;
        }

        .navbar-brand img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f8f9fa !important;
        }

        .navbar-brand:hover {
            color: #ff9800 !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo Section -->
            <a class="navbar-brand" href="index.php">
                <img src="../images/logo1.png" alt="">
                DocSphere
            </a>

            <!-- Toggler Button for Small Screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Link with Icon -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>

                    <!-- About Link with Icon -->
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">
                            <i class="bi bi-info-circle"></i> About
                        </a>
                    </li>

                    <!-- Doctors Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="doctors.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> Doctors
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active" href="doctors.php">Dr Kaneez</a></li>
                            <li><a class="dropdown-item active" href="doctors.php">Dr Zakir</a></li>
                            <li><a class="dropdown-item active" href="doctors.php">Dr Owise</a></li>
                        </ul>
                    </li>

                    <!-- Clinic Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="clinic.php" id="navbarDropdownClinic"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-hospital"></i> Clinic
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownClinic">
                            <li><a class="dropdown-item active" href="clinic.php">Only one Clinic</a></li>
                            <li><a class="dropdown-item active" href="clinic.php">Fast Healing</a></li>
                            <li><a class="dropdown-item active" href="clinic.php">Wow</a></li>
                        </ul>
                    </li>

                    <!-- Appointment Link with Icon -->
                    <li class="nav-item">
                        <a class="nav-link active" href="appointment.php">
                            <i class="bi bi-calendar-plus"></i> Appointment
                        </a>
                    </li>

                    <!-- Doctor Registration Link with Modal -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#doctorModal">
                            <i class="bi bi-person-plus"></i> Doctor Registration
                        </a>
                    </li>

                    <!-- Clinic Registration Link with Modal -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#clinicModal">
                            <i class="bi bi-plus-square"></i> Clinic Registration
                        </a>
                    </li>

                    <!-- Doctor Registration Modal -->
                    <div class="modal fade" id="doctorModal" tabindex="-1" aria-labelledby="doctorModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow-lg border-0">
                                <div class="modal-header bg-dark text-white">
                                    <h5 class="modal-title" id="doctorModalLabel">Doctor Registration</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body bg-light">
                                    <ul class="nav nav-tabs" id="doctorTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active bg-primary text-white fs-5"
                                                id="doctor-login-tab" data-bs-toggle="tab"
                                                data-bs-target="#doctor-login" type="button" role="tab"
                                                aria-controls="doctor-login" aria-selected="true">Login</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link bg-secondary text-white fs-5" id="doctor-signup-tab"
                                                data-bs-toggle="tab" data-bs-target="#doctor-signup" type="button"
                                                role="tab" aria-controls="doctor-signup" aria-selected="false">Sign
                                                Up</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-4">
                                        <!-- Doctor Login Form -->
                                        <div class="tab-pane fade show active" id="doctor-login" role="tabpanel"
                                            aria-labelledby="doctor-login-tab">

                                            <a href="../Admin/doc-index.php"
                                                class="btn btn-success w-100">
                                                <button type="submit"
                                                    class="btn btn-success w-100">Login</button>
                                                
                                            </a>

                                        </div>

                                        <!-- Doctor Sign-Up Form -->
                                        <div class="tab-pane fade" id="doctor-signup" role="tabpanel"
                                            aria-labelledby="doctor-signup-tab">

                                            <a href="d_registration.php" class="btn btn-success w-100"><button
                                                    type="submit" class="btn btn-success w-100">Sign Up</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Clinic Registration Modal -->
                    <div class="modal fade" id="clinicModal" tabindex="-1" aria-labelledby="clinicModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow-lg border-0">
                                <div class="modal-header bg-dark text-white">
                                    <h5 class="modal-title" id="clinicModalLabel">Clinic Registration</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body bg-light">
                                    <ul class="nav nav-tabs" id="clinicTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active bg-primary text-white fs-5"
                                                id="clinic-login-tab" data-bs-toggle="tab"
                                                data-bs-target="#clinic-login" type="button" role="tab"
                                                aria-controls="clinic-login" aria-selected="true">Login</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link bg-secondary text-white fs-5" id="clinic-signup-tab"
                                                data-bs-toggle="tab" data-bs-target="#clinic-signup" type="button"
                                                role="tab" aria-controls="clinic-signup" aria-selected="false">Sign
                                                Up</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-4">
                                        <!-- Clinic Login Form -->
                                        <div class="tab-pane fade show active" id="clinic-login" role="tabpanel"
                                            aria-labelledby="clinic-login-tab">

                                            <a href="../Admin/cli_index.php" class="btn btn-success w-100"><button
                                                    type="submit" class="btn btn-success w-100">Login</button></a>

                                        </div>
                                        <!-- Clinic Sign-Up Form -->
                                        <div class="tab-pane fade" id="clinic-signup" role="tabpanel"
                                            aria-labelledby="clinic-signup-tab">



                                            <a href="c-registration.php" class="btn btn-success w-100"><button
                                                    type="submit" class="btn btn-success w-100">Sign Up</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Toggle Password Visibility for Doctor Login
        document.getElementById('password-toggle').addEventListener('click', function () {
            const passwordField = document.getElementById('doctorLoginPassword');
            const passwordIcon = this.querySelector('i');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        });

        // Toggle Password Visibility for Doctor Sign Up
        document.getElementById('password-toggle-signup').addEventListener('click', function () {
            const passwordField = document.getElementById('doctorSignUpPassword');
            const passwordIcon = this.querySelector('i');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        });

        // Toggle Password Visibility for Clinic Registration
        document.getElementById('clinic-password-toggle').addEventListener('click', function () {
            const passwordField = document.getElementById('clinicPassword');
            const passwordIcon = this.querySelector('i');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        });
    </script>

</body>

</html>