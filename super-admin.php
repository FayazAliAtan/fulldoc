<?php  
include 'includes/header.php'; 
include 'db.php'; 
?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
            <?php include 'message.php'; ?>

            <!-- Clinic Management Section -->
            <div class="card mt-2">
                <div class="card-header">
                    <h4>Clinic Management</h4>
                    <a href="#" class="btn btn-primary float-end me-2"> Clinic Details</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Address</th>
                                <th scope="col">Clinic Image</th>
                                <th scope="col">Clinic Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $fetch_query = "SELECT * FROM clinics";
                            $fetch_query_run = mysqli_query($con, $fetch_query);

                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                foreach ($fetch_query_run as $row) {
                                    echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['clinic_name']}</td>
                                        <td>{$row['phone']}</td>
                                        <td>{$row['address']}</td>
                                        <td>{$row['clinic_image']}</td>
                                        <td>{$row['clinic_documents']}</td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr>
                                    <td colspan='6' class='text-center'>No records found</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Doctor Management Section -->
            <div class="card mt-2">
                <div class="card-header">
                    <h4>Doctor Management</h4>
                   
                    <a href="#" class="btn btn-primary float-end me-2">Doctor Details</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Email</th>
                                <th scope="col">Registration_Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $fetch_query = "SELECT * FROM doctors";
                            $fetch_query_run = mysqli_query($con, $fetch_query);

                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                foreach ($fetch_query_run as $row) {
                                    echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['full_name']}</td>
                                        <td>{$row['phone']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['registration_id']}</td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr>
                                    <td colspan='5' class='text-center'>No records found</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Admin Management Section -->
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Add Admin</h4>
                   
                </div>
                <div class="card-body">
                    <form method="POST" action="super-adm.php">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" >
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" >
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                        <button type="submit" name="save_admin" class="btn btn-primary">Save Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
