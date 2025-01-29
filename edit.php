<?php
include 'authentication.php';
include 'db.php';
include 'includes/header.php';
?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">

            <?php include 'message.php'; ?>

            <div class="card mt-2">
                <div class="card-header">
                    <h4>
                        Patient Details
                        <a href="cli_index.php" class="btn btn-danger float-end">Back</a>
                        <a href="#" class="btn btn-primary float-end">Patient Profile</a>
                    </h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="pat-val.php" method="POST">
                        <div class="modal-body">
                            <?php
                            if (isset($_POST['id']) || isset($_GET['id'])) {
                                $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
                                
                                $fetch_query = "SELECT * FROM `patients` WHERE id='$id' LIMIT 1";
                                $fetch_query_run = mysqli_query($con, $fetch_query);
                            
                                if (mysqli_num_rows($fetch_query_run) > 0) {
                                    foreach ($fetch_query_run as $row) {
                                        ?>
                                         <!-- Hidden ID Field -->
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> <!-- Ensure this value is passed -->
                                         <!-- Name Input -->
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Name</label>
                                            <input type="text" name="fullName" value="<?php echo $row['name']; ?>" class="form-control" id="fullName" placeholder="Enter Your Name">
                                        </div>
                                        
                                        <!-- Age Input -->
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="number" name="age" value="<?php echo $row['age']; ?>" class="form-control" id="age" placeholder="Enter Your Age">
                                        </div>
                                        
                                        <!-- Gender Selection -->
                                        <div class="mb-3">
                                            <label class="form-label">Gender</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="genderMale">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="genderFemale">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other" <?php echo ($row['gender'] == 'other') ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="genderOther">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Contact Input -->
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Contact</label>
                                            <input type="tel" name="phone" value="<?php echo $row['contact']; ?>" class="form-control" id="phone" placeholder="Enter Your Contact">
                                        </div>
                                        
                                        <!-- Email Input -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" placeholder="Enter Your Email">
                                        </div>
                                        
                                        <!-- Address Input -->
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="address" placeholder="Enter Your Address">
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "<h4>No Record Found!</h4>";
                                }
                            } else {
                                echo "<h4>No ID Provided!</h4>";
                            }
                            ?>
                            
                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" name="update_btn" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
