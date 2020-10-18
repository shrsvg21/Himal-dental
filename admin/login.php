<?php
session_start();

include ('includes/header.php');
 ?>
 <div class="container">
  <center> <h2 style="padding-top:100px;color:green;"> Registration Successful ! Please Login to view records <h2><center>
  <center>
  <center>
  <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p=0">
        <div class="row">
          

          </div>
         <Center> <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
               <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>

              </div>
              <form class="user" action="code.php" method="POST">
                <div class="form-group">
                  <input type="email" name="emaill" class="form-control form-control-user" placeholder="Enter Email Address...">

                </div>
                 <div class="form-group">
                 <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password">

                </div>
               
                 <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>


                </div>

                
                 <hr>
              
                </div>
              </form></center>

             
              

            </div>


          </div>


        </div>


      </div>


    </div>
  </div>
</div>



 <?php 
 


 
 $connection=mysqli_connect("localhost","root","","admins");
 
 if(isset($_POST['registerbtn']))
 {
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $cpassword = $_POST['confirmpassword'];
 
     $email_query = "SELECT * FROM tbl_users WHERE email='$email' ";
     $email_query_run = mysqli_query($connection, $email_query);
     if(mysqli_num_rows($email_query_run) > 0)
     {
         $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
         $_SESSION['status_code'] = "error";
         header('Location: register.php');  
     }
     else
     {
         if($password === $cpassword)
         {
             $query = "INSERT INTO tbl_users(username,email,password) VALUES ('$username','$email','$password')";
             $query_run = mysqli_query($connection, $query);
             
             if($query_run)
             {
                 // echo "Saved";
                 $_SESSION['status'] = "Admin Profile Added";
                 $_SESSION['status_code'] = "success";
                 header('Location: register.php');
             }
             else 
             {
                 $_SESSION['status'] = "Admin Profile Not Added";
                 $_SESSION['status_code'] = "error";
                 header('Location: register.php');  
             }
         }
         else 
         {
             $_SESSION['status'] = "Password and Confirm Password Does Not Match";
             $_SESSION['status_code'] = "warning";
             header('Location: register.php');  
         }
     }
 
 }
 include('includes/scripts.php');
  include('includes/footer.php');

 ?>