<?php 
  session_start();
  include 'authentication.php';
  include 'db.php';
  if(isset($_POST['doc_login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $log_query="SELECT * FROM `admin` WHERE username='$username' AND `password`='$password' ";
    $log_query_run=mysqli_query($con,$log_query);
     
         if(mysqli_num_rows($log_query_run)>0){

            foreach($log_query_run as $row){
                $user_id=$row['id'];
                $user_name=$row['username'];
                $user_email=$row['email'];
                $user_password=$row['password'];
               
            }
            
            $_SESSION['auth']=true;
            $_SESSION['auth_user']=[
              'user_id'=>$user_id,
              'user_name'=>$user_name,
               'user_email'=>$user_email,
              'user_password'=>$user_password,
            ];
            $_SESSION['status']="Logged In Successfully";
             header('Location: doc-index.php');
             
                 exit(0);
             }
           else{
            $_SESSION['status']="Invalid username or password";
             header('Location: doc-login.php');
             exit(0);
           } 
  }
 else{
    $_SESSION['status']="Access Denied";
    header('Location: doc-login.php');
    exit(0);
 }



?>