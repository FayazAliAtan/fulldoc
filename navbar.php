<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
  navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <h6 class="font-weight-bolder mb-0">DocSphere</h6>
    </nav>
    
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group input-group-outline">
          <label class="form-label">Type here...</label>
          <input type="text" class="form-control">
        </div>
      </div>
    </div>


    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
        aria-expanded="false">
          <?php
          if(isset($_SESSION['auth_user']))
          {
            echo $_SESSION['auth_user']['user_name'];
          }else{
            echo "Not Logged In ";
          }
          ?>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
         <form action="code.php" method="POST">
              <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
         </form>
        </div>
    </div>


  </div>
</nav>