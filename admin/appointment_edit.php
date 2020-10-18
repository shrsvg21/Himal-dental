<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT appointment Details  </h6>
  </div>
  <div class="card-body">
    
    <?php
$connection=mysqli_connect("localhost","root","","dental");

if(isset($_POST['edit_data_btn']))
{
    $id = $_POST['edit_id'];
    
    $query= "SELECT * FROM appointment WHERE id ='$id'";
    $query_run= mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

    


          <form action="code.php" method="POST" enctype="multipart/form-data">
         
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
              
          <div class="form-group">
                <label> Name </label>
                <input type="text" name="edit_name" class="form-control" placeholder="Enter Username" 
                value="<?php echo $row['name'] ?>">
            </div>

            </div>
            <div class="form-group">
                <label> Address</label>
                <input type="text" name="edit_address" class="form-control" placeholder="Enter address" 
                value="<?php echo $row['address'] ?>">
            </div>
            <div class="form-group">
                <label>Contact No</label>
                <input type="text" name="edit_contact" class="form-control" placeholder="Enter contact"
                value="<?php echo $row['contact'] ?>">
            </div> 
            
            <div class="form-group">
                <label> Doctor </label>
                <input type="text" name="edit_doctor" class="form-control" placeholder="Enter doctor" 
                value="<?php echo $row['doctor'] ?>">
            </div>
            
            <div class="form-group">
                <label> Email </label>
                <input type="text" name="edit_email" class="form-control" placeholder="Enter email" 
                value="<?php echo $row['email'] ?>">
            </div>    
            <div class="form-group">
                <label> Date </label>
                <input type="text" name="edit_date" class="form-control" placeholder="Enter date" 
                value="<?php echo $row['date'] ?>">
            </div>   
            
        
        </div>
              <a href="owners.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="appointment_update_btn" class="btn btn-primary"> Update </button>

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