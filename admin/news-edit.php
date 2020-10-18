<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT product details  </h6>
  </div>
  <div class="card-body">
    
    <?php
$connection=mysqli_connect("localhost","root","","dental");

if(isset($_POST['edit_data_btn']))
{
    $id = $_POST['edit_id'];
    
    $query= "SELECT * FROM news WHERE id ='$id'";
    $query_run= mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

    


          <form action="newscurd.php" method="POST" enctype="multipart/form-data">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
          <div class="form-group">
                <label> News Title </label>
                <input type="text" name="edit_title" class="form-control" placeholder="Enter Username" 
                value="<?php echo $row['title'] ?>">
            </div>
            <div class="form-group">
                <label> News Year </label>
                <input type="text" name="edit_year" class="form-control" placeholder="Enter Username" 
                value="<?php echo $row['year'] ?>">
            </div>
            <div class="form-group">
                <label> News Month</label>
                <input type="text" name="edit_month" class="form-control" placeholder="Enter Username" 
                value="<?php echo $row['month'] ?>">
            </div>
            <div class="form-group">
                <label> News Day </label>
                <input type="text" name="edit_day" class="form-control" placeholder="Enter Username" 
                value="<?php echo $row['day'] ?>">
            </div>
            <div class="form-group">
                <label> News </label>
                <input type="text" name="edit_news" class="form-control" placeholder="Enter Username" 
                value="<?php echo $row['descrip'] ?>">
            </div>
            
              <a href="news.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="news_update_btn" class="btn btn-primary"> Update </button>

          </form>
           <?php
    }
}
?>

         
 
  </div>
  </div>
</div>










<?php
include('includes/scripts.php');
include('includes/footer.php');
?>