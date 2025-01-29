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
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                        <a href="#" class="btn btn-primary float-end">Patient Profile</a>
                    </h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="pat-val.php" method="POST">
                        <div class="modal-body">
                            <!-- Name Input -->
                            <div class="mb-3">
                                <input type="text" name="fullName" value="<?php echo $row['name']; ?>" class="form-control" id="fullName" placeholder="Enter Your Name">
                            </div>

                            <!-- Age Input -->
                            <div class="mb-3">
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
                                <input type="tel" name="phone" class="form-control" id="phone" value="<?php echo $row['contact']; ?>" placeholder="Enter Your Contact">
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" placeholder="Enter Your Email">
                            </div>

                            <!-- Address Input -->
                            <div class="mb-3">
                                <input type="text" name="address" class="form-control" id="address" value="<?php echo $row['address']; ?>" placeholder="Enter Your Address">
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" name="reg_patient" class="btn btn-primary">Update Patient</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
