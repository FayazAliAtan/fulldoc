<?php include 'includes/header.php';?>
<?php include 'db.php';?>

<div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
                <div class="col-12">

                        <?php include 'message.php'?>

                        <div class="card mt-2">
                                <div class="card-header">
                                        <h4>
                                                Book Appointment

                                                <a href="Appointment.php" class="btn btn-primary float-end">Add
                                                        Appointment</a>
                                        </h4>
                                </div>
                        </div>



                        <div class="card mt-2">
                                <div class="card-header">
                                        <h4>
                                        Update Doctor Profile

                                                <a href="doc-profile.php" class="btn btn-primary float-end">Update Profile</a>
                                        </h4>
                                </div>
                        </div>


                        <div class="card-body">
                                <table class="table">
                                        <thead>
                                                <tr>
                                                        <th scope="col">#id</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Specialization</th>
                                                        <th scope="col">Contact</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Age</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">YearsOfExperience</th>
                                                        <th scope="col">Qualification</th>
                                                        <th scope="col">LicenseNumber</th>
                                                        <th scope="col">Edit</th>
                                                        
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php

                            $fetch_query="SELECT * FROM `doctor_profile` LIMIT 1";
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
                                                                <?php  echo $row['specialization']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['contact']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['Gender']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['DateOfBirth']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['Email']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['Address']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['YearsOfExperience']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['Qualification']?>
                                                        </td>
                                                        <td>
                                                                <?php  echo $row['LicenseNumber']?>
                                                        </td>
                                                        <td>
                                                                <a href="doc-profile.php?id=<?php echo  $row['id']?>" class="btn btn-primary">Edit</a>
                                                        </td>
                                                     

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
    
                             $fetch_query="select * from patients";
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
                                                                        <a href="edit.php?id=<?php echo  $row['id']?>"
                                                                                class="btn btn-primary">Edit</a>
                                                                </td>
                                                                <td>
                                                                        <form action="delete.php" method="POST">
                                                                                <input type="hidden"
                                                                                        class="form-control "
                                                                                        name="user_id"
                                                                                        value="<?php  echo $row['id'];?>">
                                                                                <button type="submit" name="delete_btn"
                                                                                        class="btn btn-danger btn-sm">Delete</button>
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