<?php
include('security.php');

$connection=mysqli_connect("localhost","root","","dental");

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
?>
<?php
$connection=mysqli_connect("localhost","root","","admins");
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_ID'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE tbl_users SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

if(isset($_POST['admin_delete_btn']))
{
    $id = $_POST['delete_ID'];

    $query = "DELETE FROM tbl_users WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}

?>

<?php
$connection=mysqli_connect("localhost","root","","dental");
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_ID'];

    $query = "DELETE FROM appointment WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}?>
<?php 
$connection=mysqli_connect("localhost","root","","admins");
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM tbl_users WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
   }
    
}
?>
<?php 
$connection=mysqli_connect("localhost","root","","dental");
if(isset($_POST['student_update_btn'])){
    $ID = $_POST['edit_id'];
    $name=$_POST['edit_name'];
    $address=$_POST['edit_address'];
    $contact=$_POST['edit_contact'];
    $doctor=$_POST['edit_doctor'];
    $email=$_POST['edit_email'];
    $date=$_POST['edit_date'];



            $query=  "UPDATE appointment SET name='$name', address='$address', contact='$contact',doctor='$doctor',email='$email', date='$date' WHERE id='$ID'";
            $query_run=mysqli_query($connection,$query);

            if($query_run){

                
                $_SESSION['success']= "updated";
                header('Location:appointments.php');


            }else{
                $_SESSION['status']="Not updated";
                header('Location:appointments.php');

            }

}
if(isset($_POST['delete_data_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM appointment WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: appointments.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location:appointments.php'); 
    }    
}


?>