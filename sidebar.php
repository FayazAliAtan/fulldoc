<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <span class="ms-1 font-weight-bold text-white">DocSphere  Admin Page</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark  active bg-gradient-primary" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">HOME</i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item text-danger">
          <a class="nav-link text-success active bg-gradient-primary" href="login.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">Login</i>
            </div>
            <span class="nav-link-text ms-1"></span>
          </a>
        </li>
        <li class="nav-item dropdown">
               <a 
                 class="nav-link dropdown-toggle text-white active bg-gradient-primary" 
                 href="#" 
                 id="navbarDropdown" 
                 role="button" 
                 data-bs-toggle="dropdown" 
                 aria-expanded="false"
               >
                 <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                   <i class="material-icons opacity-10">Admin</i>
                 </div>
                 <span class="nav-link-text ms-1">Login</span>
               </a>
               <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                 <li><a class="dropdown-item" href="login.php">Clinic Login</a></li>
                 <li><a class="dropdown-item" href="super-login.php">Super Login</a></li>
                 <li><a class="dropdown-item" href="doc-login.php">Doctor Login</a></li>
               </ul>
         </li>
      </ul>
    </div>
   
  </aside>