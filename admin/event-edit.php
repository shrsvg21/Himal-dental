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
    
    $query= "SELECT * FROM event WHERE id ='$id'";
    $query_run= mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

    


          <form action="eventcurd.php" method="POST" enctype="multipart/form-data">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                <label> Event Day (in number) </label>
                <input type="text" name="day" class="form-control" value="<?php echo $row['day'] ?>">
                     </div>
            <div class="form-group">
                <label>Event month </label>
                <input type="text" name="month" class="form-control" value="<?php echo $row['month'] ?>">
                        </div>
            <div class="form-group">
                <label>Event year </label>
                <input type="text" name="year" class="form-control" value="<?php echo $row['year'] ?>">
                      </div>
            <div class="form-group">
                <label>Event start time </label>
                <input type="text" name="start" class="form-control" value="<?php echo $row['start'] ?>">

            </div>
            <div class="form-group">
                <label>Event end time </label>
                <input type="text" name="end" class="form-control" value="<?php echo $row['end'] ?>">
                          </div>
            <div class="form-group">
                <label> Event Title </label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
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