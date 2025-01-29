<?php 
include 'authentication.php';
include 'includes/header.php';  
include 'db.php';
?>
<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">

      <?php include 'message.php';?>


<div class="card mt-2">
        <div class="card-header">
          <h4>
            Book Appointment
            <a href="Appointment.php" class="btn btn-primary float-end">Add Appointment</a>
          </h4>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Doctor</th>
                <th scope="col">Appointment_Date</th>
                <th scope="col">Appointment_Time</th>
              </tr>
            </thead>
            <tbody>
              <?php
    
    $fetch_query="SELECT  * FROM appointments";
    $fetch_query_run=mysqli_query($con,$fetch_query);
    
    if(mysqli_num_rows($fetch_query_run)>0){
                foreach($fetch_query_run as $row){
                    ?>

              <tr>

                <td>
                  <?php  echo $row['id']?>
                </td>
                <td>
                  <?php  echo $row['user_name']?>
                </td>
                <td>
                  <?php  echo $row['age']?>
                </td>
                <td>
                  <?php  echo $row['gender']?>
                </td>
                <td>
                  <?php  echo $row['phone_number']?>
                </td>
                <td>
                  <?php  echo $row['email']?>
                </td>
                <td>
                  <?php  echo $row['address']?>
                </td>
                <td>
                  <?php  echo $row['doctor']?>
                </td>
                <td>
                  <?php  echo $row['appointment_date']?>
                </td>
                <td>
                  <?php  echo $row['appointment_time']?>
                </td>
              </tr>

              <?php
                }
    }
    else{

        ?>
              <tr>
                <td colspan="5"> NO record found</td>
              </tr>


              <?php
    }
    
    
    ?>
        </div>
        </tbody>
        </table>
      </div>


      <div class="card mt-2">
        <div class="card-header">
          <h4>
            Add Doctor

            <a href="doctor.php" class="btn btn-primary float-end">Add Doctor</a>
          </h4>
        </div>
      </div>

      <div class="card mt-2">
        <div class="card-header">
          <h4>
            patient insert and display

            <a href="patients.php" class="btn btn-primary float-end">Add Patient</a>
          </h4>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
    
    $fetch_query="SELECT  * FROM patients";
    $fetch_query_run=mysqli_query($con,$fetch_query);
    
    if(mysqli_num_rows($fetch_query_run)>0){
                foreach($fetch_query_run as $row){
                    ?>

              <tr>

                <td>
                  <?php  echo $row['id']?>
                </td>
                <td>
                  <?php  echo $row['name']?>
                </td>
                <td>
                  <?php  echo $row['age']?>
                </td>
                <td>
                  <?php  echo $row['gender']?>
                </td>
                <td>
                  <?php  echo $row['contact']?>
                </td>
                <td>
                  <?php  echo $row['email']?>
                </td>
                <td>
                  <?php  echo $row['address']?>
                </td>
                <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary float-end">Edit</a>
                </td>
                <td>
                  <form action="delete.php" method="POST">
                    <input type="hidden" class="form-control " name="user_id" value="<?php  echo $row['id'];?>">
                    <button type="submit" name="delete_btn" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>

              <?php
                }
    }
    else{

        ?>
              <tr>
                <td colspan="5"> NO record found</td>
              </tr>


              <?php
    }
    ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include 'includes/footer.php';?>