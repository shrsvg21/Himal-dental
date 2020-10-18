<?php
session_start();
include('security.php');

$connection=mysqli_connect("localhost","root","","dental");
?>
<?php
include('security.php');


$connection=mysqli_connect("localhost","root","","dental");
if(isset($_POST['news_update_btn'])){
    $edit_id= $_POST['edit_id'];
      $edit_title= $_POST['edit_title'];
        $edit_news= $_POST['edit_news'];
        $edit_year= $_POST['edit_year'];
        $edit_month= $_POST['edit_month'];
        $edit_day= $_POST['edit_day'];


        
         
            $query=  "UPDATE news SET title='$edit_title', year='$edit_year', month='$edit_month', day='$edit_day', descrip='$edit_news' WHERE id='$edit_id'";
            $query_run=mysqli_query($connection,$query);

            if($query_run){

                
                $_SESSION['success']=" News updated";
                header('Location:news.php');


            }else{
                $_SESSION['status']="News Not updated";
                header('Location:news.php');

            }

}
if(isset($_POST['delete_data_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM news WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your news is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: news.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your news is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: news.php'); 
    }    
}


?>


