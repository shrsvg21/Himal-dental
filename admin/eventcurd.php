<?php
session_start();
include('security.php');

$connection=mysqli_connect("localhost","root","","dental");
?>
<?php
include('security.php');


$connection=mysqli_connect("localhost","root","","dental");
if(isset($_POST['event_update_btn'])){
    $edit_id= $_POST['edit_id'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    
    $start=$_POST['start'];
    $end=$_POST['end'];
    $title=$_POST['title'];
    $descrip=$_POST['descrip'];
         


            $query=  "UPDATE event SET day='$day', month='$month', year='$year', start='$start',end='$end',title='$title',descrip='$descrip' WHERE id='$edit_id'";
            $query_run=mysqli_query($connection,$query);

            if($query_run){

                
                $_SESSION['success']="updated";
                header('Location:events.php');


            }else{
                $_SESSION['status']="Not updated";
                header('Location:events.php');

            }

}
if(isset($_POST['delete_data_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM event WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: events.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: events.php'); 
    }    
}

////this is for delte tesomonials

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM testimonial WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: testimonial.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: testimonial.php'); 
    }    
}

////deletye for banner

if(isset($_POST['banner_delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM banner WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location:banner.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: banner.php'); 
    }    
}

/////delete for doctor

if(isset($_POST['doctor_del_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM doctor WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location:doctor.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: doctor.php'); 
    }    
}


?>


