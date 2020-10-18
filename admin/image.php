<?php
include('security.php');

$connection=mysqli_connect("localhost","root","","dental");

if(isset($_POST['registerbtn']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $doctor=$_POST['doctor'];
    $email=$_POST['email'];
    $date=$_POST['date'];

      
            $query = "INSERT INTO appointment(name,address,contact,doctor,email,date) VALUES ('$name','$address','$contact','$doctor','$email','date')";
            $query_run = mysqli_query($connection, $query);

            
        }
        
            
            if($query_run)
            {
               
                $_SESSION['status'] = "Appointment Added";
                $_SESSION['status_code'] = "success";
                header('Location: appointments.php');
            }
            else 
            {
                $_SESSION['status'] = "Student Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: appointments.php');  
            }
       
    


if(isset($_POST['updatebtn']))
{
    $name=$_POST['edit_name'];
    $address=$_POST['edit_address'];
    $contact=$_POST['edit_contact'];
    $doctor=$_POST['edit_doctor'];
    $email=$_POST['edit_email'];
    $date=$_POST['edit_date'];

    $query = "UPDATE appointment SET name='$name',,address='$address',contact='$contact',doctor='$doctor,' email='$email',date='$date', ' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: appointments.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: appointments.php'); 
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_ID'];

    $query = "DELETE FROM appointment WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location:appointments.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: appointments.php'); 
    }    
}

?>