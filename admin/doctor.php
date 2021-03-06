
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


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add DOCTORS </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="doc-code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label>Doctor name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Doctor image</label>
                <input type="file" name="image" class="form-control" placeholder="upload image ">
            </div>
            <div class="form-group">
                <label>Field</label>
                <input type="text" name="field" class="form-control" placeholder="Enter review">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="docbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">event
      
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add DOCTORS
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
      $query="SELECT *FROM doctor";
      $query_run= mysqli_query($connection,$query);

      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            
          <th> ID </th>
            <th>Doctor Name</th>
            <th>Dotor image Image</th>
            <th>Field</th>
           
            
            <th> DELETE</th>
            <th>EDIT </th>
            
           
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
          <td> <?php echo $row['name']; ?> </td>
          <td><?php echo '<img src="upload/doctor/'.$row['img'].'" alt="image" width="100px;" height="100px;"></td>'?>
            
            <td><?php  echo $row['field']; ?> </td>
           
           
            <td>
                <form action="test-edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_data_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td> 

                <form action="eventcurd.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="doctor_del_btn" class="btn btn-danger"> DELETE</button>
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