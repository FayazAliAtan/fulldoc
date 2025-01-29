<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DocSphere</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

 <!-- nav start -->
<?php  include 'head.php'; ?>
 <!-- nav end -->

<!-- carousel start -->
<?php  include 'carousel.php'?>
 <!-- carousel end -->
 
 
  <style>
    /* Scroll-to-top button */
    #scroll-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      background-color: #ff9800;
      color: white;
      border: none;
      border-radius: 50%;
      padding: 10px 15px;
      font-size: 18px;
      z-index: 1000;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    #scroll-to-top:hover {
      background-color: #e68900;
    }

    /* About Us Icons */
    .about-icon {
      font-size: 1.5rem;
      color: #ff9800;
      margin-right: 10px;
    }

    /* Team Section Hover Effect */
    .card:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

<!-- About Us Section -->
<section class="about-section mt-5 pt-5" id="about-us">
  <div class="container">
    <div class="row">
      <!-- About Text Section -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow-lg border-light p-4 rounded">
          <h2 class="text-primary mb-4 fw-bold" style="font-size: 2.5rem;">
            <i class="bi bi-info-circle about-icon me-2"></i>About DocSphere
          </h2>
          <p class="lead" style="font-size: 1.25rem;">We are committed to providing high-quality medical care in a compassionate and friendly environment. Our team of experienced doctors and staff ensure personalized attention for every patient.</p>
          <p class="mb-4" style="font-size: 1.2rem;">Serving the community for over 10 years, we offer services in general medicine, pediatrics, cardiology, and more. Our state-of-the-art facilities ensure effective treatments with the latest technology.</p>
          <a href="#services" class="btn btn-primary btn-lg mt-3 px-4" style="font-size: 1.1rem;">Learn More</a>
        </div>
      </div>

      <!-- About Image Section with Modal Trigger -->
      <div class="col-lg-6 mb-4">
        <div class="image-container shadow-lg rounded">
          <img src="../images/3.jpg" class="img-fluid rounded shadow hover-effect" alt="Clinic Image" data-bs-toggle="modal" data-bs-target="#profileModal">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary fw-bold" id="profileModalLabel" style="font-size: 1.8rem;">Meet the Team</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Team Member 1 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm rounded">
              <img src="../images/3.jpg" class="card-img-top" alt="Doctor 1">
              <div class="card-body text-center">
                <h5 class="card-title" style="font-size: 1.2rem;">Fayaz Ali</h5>
                <p class="card-text text-muted" style="font-size: 1rem;">Developer</p>
              </div>
            </div>
          </div>
          <!-- Team Member 2 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm rounded">
              <img src="../images/3.jpg" class="card-img-top" alt="Doctor 2">
              <div class="card-body text-center">
                <h5 class="card-title" style="font-size: 1.2rem;">Saif Uf Din</h5>
                <p class="card-text text-muted" style="font-size: 1rem;">Developer</p>
              </div>
            </div>
          </div>
          <!-- Team Member 3 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm rounded">
              <img src="../images/3.jpg" class="card-img-top" alt="Doctor 3">
              <div class="card-body text-center">
                <h5 class="card-title" style="font-size: 1.2rem;">MR Hussain</h5>
                <p class="card-text text-muted" style="font-size: 1rem;">Supervisor</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>
  /* Hover effect for images */
  .image-container {
    position: relative;
    overflow: hidden;
    border-radius: 10px; /* Rounded edges */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .hover-effect {
    transition: transform 0.3s ease, filter 0.3s ease;
  }

  .hover-effect:hover {
    transform: scale(1.05); /* Slight zoom on hover */
    filter: brightness(1.2); /* Brighten the image on hover */
  }

  .hover-effect:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2); /* Overlay on hover */
    transition: background 0.3s ease;
  }

  /* Add padding and margin to the section for better alignment */
  .about-section {
    margin-top: 5rem;
  }

  /* Adjusting card shadow and padding for team members */
  .card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
  }

  .card-body {
    padding: 1.5rem;
  }

  /* For the modal header and title */
  .modal-title {
    font-size: 1.8rem;
  }

  /* Improved button size and padding */
  .btn-lg {
    font-size: 1.2rem;
    padding: 0.75rem 2rem;
  }

  /* Customize the modal's content and body for better visuals */
  .modal-body {
    font-size: 1.1rem;
    line-height: 1.6;
  }
</style>

<!-- Scroll to top button -->
<button id="scroll-to-top" class="btn btn-primary btn-lg position-fixed bottom-0 end-0 m-3" onclick="scrollToTop()" aria-label="Scroll to top">
  <i class="bi bi-arrow-up"></i>
</button>

<script>
  // Scroll to top function
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Our Team Section -->
<section class="team-section mt-5" id="team">
  <div class="container">
    <h2 class="text-center mb-5 text-primary">
      <i class="bi bi-people about-icon me-2"></i>Meet Our Team
    </h2>
    <div class="row">
      <!-- Team Member 1 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow">
          <img src="../images/3.jpg" class="card-img-top" alt="Fayaz Ali">
          <div class="card-body text-center">
            <h5 class="card-title">Fayaz Ali</h5>
            <p class="card-text">Developer</p>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileModal1">
              View Profile
            </button>
          </div>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow">
          <img src="../images/3.jpg" class="card-img-top" alt="Saif Uf Din">
          <div class="card-body text-center">
            <h5 class="card-title">Saif Uf Din</h5>
            <p class="card-text">Developer</p>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileModal2">
              View Profile
            </button>
          </div>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow">
          <img src="../images/3.jpg" class="card-img-top" alt="MR Hussain">
          <div class="card-body text-center">
            <h5 class="card-title">MR Hussain</h5>
            <p class="card-text">Supervisor</p>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileModal3">
              View Profile
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Profile Modals -->
<!-- Modal 1 -->
<div class="modal fade" id="profileModal1" tabindex="-1" aria-labelledby="profileModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModal1Label">Fayaz Ali - Developer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../images/3.jpg" class="img-fluid rounded-circle mb-3" alt="Fayaz Ali">
        <p>
          Fayaz Ali is a highly skilled developer specializing in front-end and back-end technologies. 
          He has a passion for creating user-friendly web applications and ensuring optimal performance.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-envelope me-2"></i>fayaz@example.com</li>
          <li><i class="bi bi-telephone me-2"></i>+123 456 7890</li>
          <li><i class="bi bi-linkedin me-2"></i><a href="#">LinkedIn Profile</a></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="profileModal2" tabindex="-1" aria-labelledby="profileModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModal2Label">Saif Uf Din - Developer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../images/3.jpg" class="img-fluid rounded-circle mb-3" alt="Saif Uf Din">
        <p>
          Saif Uf Din is an expert in software development with a focus on delivering efficient and scalable solutions.
          He loves collaborating on innovative projects and mentoring junior developers.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-envelope me-2"></i>saif@example.com</li>
          <li><i class="bi bi-telephone me-2"></i>+123 456 7891</li>
          <li><i class="bi bi-linkedin me-2"></i><a href="#">LinkedIn Profile</a></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="profileModal3" tabindex="-1" aria-labelledby="profileModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModal3Label">MR Hussain - Supervisor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../images/3.jpg" class="img-fluid rounded-circle mb-3" alt="MR Hussain">
        <p>
          MR Hussain oversees the team’s operations and ensures the quality and timeliness of all deliverables.
          With years of experience in leadership, he is a driving force behind the team’s success.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-envelope me-2"></i>hussain@example.com</li>
          <li><i class="bi bi-telephone me-2"></i>+123 456 7892</li>
          <li><i class="bi bi-linkedin me-2"></i><a href="#">LinkedIn Profile</a></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Scroll-to-Top Button -->
<button id="scroll-to-top" class="btn btn-primary btn-lg position-fixed bottom-0 end-0 m-3" onclick="scrollToTop()" aria-label="Scroll to top">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- JavaScript for Scroll-to-Top -->
<script>
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
</script>

 <!-- footer -->
 <?php  include 'footer.php'; ?>

<!-- end footer -->
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Scroll-to-top functionality
    const scrollToTopButton = document.getElementById('scroll-to-top');

    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 200) {
        scrollToTopButton.style.display = 'block';
      } else {
        scrollToTopButton.style.display = 'none';
      }
    });

    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>


  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
