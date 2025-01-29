<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Carousel with Enhanced Features</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .carousel-item {
      position: relative;
      width: 100%;
      height: 80vh;
      /* Fixed height for consistent size */
      background-color: #000;
      background-position: center;
      background-size: cover;
      overflow: hidden;
      /* Crop the image if necessary */
    }

    .carousel-item img {
      object-fit: cover;
      /* Ensure the image is cropped appropriately */
      width: 100%;
      height: 100%;
    }

    .carousel-caption {
      position: absolute;
      top: 50%;
      /* Center vertically */
      left: 50%;
      /* Center horizontally */
      transform: translate(-50%, -50%);
      /* Adjust for exact center alignment */
      padding: 20px;
      color: white;
      text-align: center;
      z-index: 10;
      /* Ensure the caption appears above the image */
    }

    .carousel-caption h1 {
      font-size: 3rem;
      /* Responsive font size */
    }

    .carousel-caption p {
      font-size: 1.1rem;
      margin-top: 10px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      filter: invert(1);
      /* White color for arrows */
    }

    .carousel-indicators button {
      background-color: #fff;
    }

    .carousel-indicators .active {
      background-color: #ff9800;
      /* Active indicator color */
    }

    /* Hide arrows and indicators when hovering */
    #myCarousel:hover .carousel-control-prev,
    #myCarousel:hover .carousel-control-next,
    #myCarousel:hover .carousel-indicators {
      opacity: 1 !important;
    }

    /* Initially hide the navigation controls */
    .carousel-control-prev,
    .carousel-control-next,
    .carousel-indicators {
      opacity: 0;
      transition: opacity 0.3s ease;
    }
  </style>
</head>

<body>
  <!-- main start -->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-pause="hover"
    data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1"
        class="active"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="../images/6.jpg" class="d-block w-100" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>A Step Toward Healing </h1>
          <p>I walk through doors where hope resides,
            A quiet place where my heart confides.
            The weight of worry, the touch of fear,
            I seek the guidance of one who’s near.

            The chair awaits, its arms so wide,
            As questions stir, I cannot hide.
            But in this room, there’s calm to find,
            A gentle voice, a steady mind.

            Each moment spent, a prayer, a plea,
            For answers that will set me free.
            Through every check, each word they say,
            I feel the healing come my way.

            No longer burdened by unknowns,
            With every visit, I feel less alone.
            The road is long, but I’ll stand tall,
            For in this care, I trust it all.

          </p>
          <p><a class="btn btn-lg btn-secondary" href="appointment.php">Book
              Appointment</a></p>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="../images/4.jpg" class="d-block w-100" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>The Doctor’s Call</h1>
          <p>

            To register is to take a stand,
            A promise to care, to heal, to lend a hand.
            In every form, a story is told,
            Of lives that matter, of hearts so bold.

            With each new patient, a trust is formed,
            Through every diagnosis, a life is warmed.
            The journey starts with a single name,
            In the doctor’s care, we find no shame.

            The process may seem long and wide,
            But in these steps, there’s no divide.
            For registration opens the door,
            To health, to healing, to so much more.

            Through forms and checks, we find the way,
            To brighter tomorrows, day by day.
            A healer’s hands, a listening ear,
            A doctor’s call, always near.

            .</p>
          <p><a class="btn btn-lg btn-secondary" href="d_registration.php">Doctor Registration</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/5.jpg" class="d-block w-100" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>The Clinic’s Door</h1>
          <p> A form to fill, a name to write,
            A step toward health, a future bright.
            In the clinic’s care, we trust the start,
            A healing journey, a hopeful heart.

            Each question asked, each answer given,
            A path toward wellness, a life worth livin’.
            Through registration, the journey begins,
            A place for healing, where strength begins.

            With every line, a promise made,
            For care and kindness, never to fade.
            A doctor’s touch, a nurse’s care,
            In this space, we’re treated fair.

            The clinic door is open wide,
            A place for health, a place to confide.
            With every visit, a step we take,
            Toward brighter days, and peace to make.</p>
          <p><a class="btn btn-lg btn-secondary" href="c-registration.php">Clinic Registration</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- main end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>