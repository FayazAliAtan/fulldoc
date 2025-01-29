<?php
session_start();
include 'includes/header.php'; 
include 'db.php'; 
if(isset($_SESSION['auth']))
{
      $_SESSION['status']="You are already logged In";
      header('Location: super-admin.php');
      exit();
}
?>
<div class="container-fluid py-4">
  <div class="row justify-content-center align-items-center min-vh-80">
    <div class="col-lg-4 col-md-6 col-sm-8">
      <div class="card shadow-lg">

        <div class="card-header text-center bg-primary text-primary">
          <h4>User Login</h4>
        </div>
        <div class="card-body p-4">
              
        <?php 

               if(isset($_SESSION['auth_status'])){
                   ?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                          <strong>HEY!!</strong> <?php echo $_SESSION['auth_status'] ?>
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
               
                   <?php
                   unset($_SESSION['auth_status']);
               }
               
               
       ?>

          <?php  include 'message.php';?>

          <form action="logincode.php" method="POST">
            <!-- Username -->
            <div class="mb-3">
              <label for="username" class="form-label"><i class="bi bi-person-fill me-2"></i></label>
              <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your username"
                required>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label"><i class="bi bi-lock-fill me-2"></i></label>
              <input type="password" class="form-control" name="password" id="password" 
                placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary" name="sup_login_btn">
                <i class="bi bi-box-arrow-in-right me-2"></i>Login
              </button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center bg-light">
          <small class="text-muted">Don't have an account? <a href="../User/c-registration.php" class="text-primary">Register
              here</a></small>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>