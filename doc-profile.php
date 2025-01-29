<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h4>
                        Update Doctor Profile
                        <a href="doc-index.php" class="btn btn-danger float-end">Back</a>
                        <a href="doc-profile.php" class="btn btn-primary float-end">Update Profile</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="doc-pro.php">
                        <div class="modal-body">
                            <?php
                            // Check if ID is provided via POST or GET
                            if (isset($_POST['id']) || isset($_GET['id'])) {
                                $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
                                $id = mysqli_real_escape_string($con, $id);

                                // Fetch doctor data
                                $query = "SELECT * FROM doctor_profile WHERE id='$id'";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                            ?>
                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" id="name" name="name" placeholder="Enter Name">
                            </div>

                            <!-- Specialization -->
                            <div class="mb-3">
                                <label for="specialization" class="form-label">Specialization</label>
                                <input type="text" class="form-control" value="<?php echo $row['specialization']; ?>" id="specialization" name="specialization" placeholder="Enter Specialization">
                            </div>

                            <!-- Contact -->
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" value="<?php echo $row['contact']; ?>" id="contact" name="contact" placeholder="Enter Contact Number">
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option value="Male" <?php echo ($row['Gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php echo ($row['Gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                    <option value="Other" <?php echo ($row['Gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>

                            <!-- Date of Birth -->
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" value="<?php echo $row['DateOfBirth']; ?>" name="dob">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" value="<?php echo $row['Email']; ?>" id="email" name="email" placeholder="Enter Email">
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter Address"><?php echo $row['Address']; ?></textarea>
                            </div>

                            <!-- Years of Experience -->
                            <div class="mb-3">
                                <label for="experience" class="form-label">Years of Experience</label>
                                <input type="number" class="form-control" value="<?php echo $row['YearsOfExperience']; ?>" id="experience" name="experience" placeholder="Enter Years of Experience">
                            </div>

                            <!-- Qualification -->
                            <div class="mb-3">
                                <label for="qualification" class="form-label">Qualification</label>
                                <input type="text" class="form-control" value="<?php echo $row['Qualification']; ?>" id="qualification" name="qualification" placeholder="Enter Qualification">
                            </div>

                            <!-- License Number -->
                            <div class="mb-3">
                                <label for="license" class="form-label">License Number</label>
                                <input type="text" class="form-control" value="<?php echo $row['LicenseNumber']; ?>" id="license" name="license" placeholder="Enter License Number">
                            </div>

                            <!-- Created At -->
                            <div class="mb-3">
                                <label for="createdAt" class="form-label">Created At</label>
                                <input type="datetime-local" class="form-control" value="<?php echo $row['CreatedAt']; ?>" id="createdAt" name="createdAt" readonly>
                            </div>

                            <!-- Updated At -->
                            <div class="mb-3">
                                <label for="updatedAt" class="form-label">Updated At</label>
                                <input type="datetime-local" class="form-control" value="<?php echo $row['UpdatedAt']; ?>" id="updatedAt" name="updatedAt" readonly>
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
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" name="doc-edit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
