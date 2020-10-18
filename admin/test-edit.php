<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Testimonials  </h6>
  </div>
  <div class="card-body">
    
    <?php
$connection=mysqli_connect("localhost","root","","dental");

if(isset($_POST['edit_data_btn']))
{
    $id = $_POST['edit_id'];
    
    $query= "SELECT * FROM testimonial WHERE id ='$id'";
    $query_run= mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

    


          <form action="testcurd.php" method="POST" enctype="multipart/form-data">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                <label>Name of reviewer</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                     </div>
            
            <div class="form-group">
                <label>Upload Image </label>
                <input type="file" name="image" class="form-control" value="<?php echo $row['img'] ?>">
                          </div>
            
            <div class="form-group">
                <label>Event description</label>
                <input type="text" name="descrip" class="form-control" value="<?php echo $row['descrip'] ?>">

            </div>
            
              <a href="owners.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="event_update_btn" class="btn btn-primary"> Update </button>

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