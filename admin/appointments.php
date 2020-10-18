<script src=vendor/bootstrap/js/bootstrap.bundle.min.js> </script>
<script src=vendor/jquery-easing/jqeury.easing.min.js> </script>
<script src="js/sb-admin-2.min.js"></script>
<script src=vendor/chart.js/Chart.min.js> </script>
<script src="js/demo/chart-area-demo.js"> </script>
<script src="js/demo/chart-pie-demo.js"> </script>


<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addstudentprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add appointement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="image.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label>Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Address </label>
                <input type="text" name="address" class="form-control" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label>Contact No</label>
                <input type="text" name="contact" class="form-control" placeholder="Enter contact">
            </div> 
            <div class="form-group">
                <label>Doctor</label>
                <input type="text" name="doctor" class="form-control" placeholder="Enter doctor name">
            </div> 
          
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder=" enter email" required>
        </div>
        <div class="form-group">
            <label>Date </label>
            <input type="date" name="date" class="form-control" required>
        </div>
            
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">APPOINTMENT LIST
      
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addstudentprofile">
              Add APPOINTMENT
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php  
if(isset($_SESSION['success']) && $_SESSION['success']!='') {
   echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].' </h2>';
   unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status']!='') {
   echo '<h2 class="bg-info">'.$_SESSION['status'].' </h2>';
   unset($_SESSION['status']);
}
?>
    <div class="table-responsive">
      <?php 
      $connection=mysqli_connect("localhost","root","","dental");
      $query="SELECT *FROM appointment";
      $query_run= mysqli_query($connection,$query);

      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            
          <th> ID </th>
            <th> Patient Name</th>
            <th> Address </th>
            <th>Contact</th>
            <th>Doctor</th>
            <th>Email</th>
            <th>Date</th>
            <th>EDIT </th>
            <th>DELETE </th>
           
          </tr>
        </thead> 
        <tbody>
          <?php 
          if(mysqli_num_rows($query_run)>0) {
            while($row=mysqli_fetch_assoc($query_run))
            {
              ?>


     
          <tr>
           

          <td> <?php echo $row['id']; ?> </td>
            <td><?php  echo $row['name']; ?> </td>
            <td><?php  echo $row['address']; ?> </td>
            <td><?php  echo $row['contact']; ?> </td>
            <td><?php  echo $row['doctor']; ?> </td>
            <td><?php  echo $row['email']; ?> </td>
            <td><?php  echo $row['date']; ?> </td>
           
            <td>
                <form action="appointment_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_data_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>

                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_data_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
             

            }
          } else{
            echo"No records found";
          }

          ?>
        
        </tbody>
      </table>
     

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
<script type="text/javascript">
  
</script>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>