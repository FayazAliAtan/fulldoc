<?php 
include 'authentication.php';
include 'db.php' ;


//  for delete patient data
if(isset($_POST['delete_btn'])){
    $id=$_POST['user_id'];

    $delete_query="DELETE   FROM patients where id='$id'";
    $delete_query_run=mysqli_query($con,$delete_query);
       
    if($delete_query_run){
               $_SESSION['status']="DATA DELETED SUCCESSFULLY ";
               $_SESSION['status_code']="success";
               header('location:index.php');
    }
    else{
        $_SESSION['status']="Data deletion failed ";
        $_SESSION['status_code']="error";
        header('location:index.php');
    }
       

}

?>