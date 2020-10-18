<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="assets/css/eventstab.css">
</head>
<body>
<div style="background: rgba(0,0,0,.2);margin-bottom:70px;" class="container">  

  <h3>EVENTS & NEWS</h3>
  
  <hr>
  <div class="row">
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <div class="searchForm type2">
        <form action="" class="searchForm"><!-- Add The Appropriate Action for Your Site's Search Form/Page -->
          <label class="sr-only" for="searchNewsEvents">Search News and Events</label>
           <input id="searchNewsEvents" name="q" placeholder="What are you looking for?" type="search"> <input type="submit" value="Search">
        </form>
      </div>
    </div>
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <div class="dropdownCategories">
      <label class="sr-only" for="dropdownNewsEvents">Category dropdown for News and Events</label>
      <select>
        <option value="">
          Select Category
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Marketing
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Design
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Programming
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Support
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Training
        </option>
      </select>
      </div>
    </div>  
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
      <ul class="nav nav-pills" role="tablist">
        <li class="active">
          <a data-toggle="tab" href="#tab1" role="tab">Events</a>
        </li>
        <li>
          <a data-toggle="tab" href="#tab2" role="tab">News</a>
        </li>
      </ul>
    </div>
  </div><!-- / row -->
  <hr>
  <div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">
      <div class="row">
          <?php
          $conn = new mysqli('localhost','root','','dental');
         $query ="SELECT * FROM event";
         $query_run = mysqli_query($conn, $query);
      
         $check_products=mysqli_num_rows($query_run)>0;
         if($check_products)
         {
             while($row = mysqli_fetch_array($query_run))
             {
                 ?>
        <div class="col-md-6">
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em><?php echo $row['day']; ?></em><?php echo $row['month']; ?></span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#"><?php echo $row['title']; ?> </a>
              </h4>
              <div class="meta-data">
                <span class="longDate"><?php echo $row['day']; ?><?php echo $row['month']; ?>, <?php echo $row['year']; ?></span> <span class="timeEl"><?php echo $row['start']; ?> - <?php echo $row['end']; ?></span>
              </div>
              <p>
              <?php echo $row['descrip']; ?>
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
      
        </div><!-- / .col-md-6 -->

        <?php
                        
}
}
else
{
echo "no record foun";
}
?> 
        
      </div><!-- / row -->
      <div class="text-center">
        <br>
        <a class="btn btn-default" href="#">SEE ALL EVENTS</a>
      </div>
    </div>



    <div class="tab-pane fade in active" id="tab2">
      <div class="row">
          <?php
          $conn = new mysqli('localhost','root','','dental');
         $query ="SELECT * FROM news";
         $query_run = mysqli_query($conn, $query);
      
         $check_products=mysqli_num_rows($query_run)>0;
         if($check_products)
         {
             while($row = mysqli_fetch_array($query_run))
             {
                 ?>
        <div class="col-md-6">
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em><?php echo $row['day']; ?></em><?php echo $row['month']; ?></span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#"><?php echo $row['title']; ?> </a>
              </h4>
              <div class="meta-data">
                <span class="longDate"><?php echo $row['day']; ?><?php echo $row['month']; ?>, <?php echo $row['year']; ?></span> 
              </div>
              <p>
              <?php echo $row['descrip']; ?>
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
      
        </div><!-- / .col-md-6 -->

        <?php
                        
}
}
else
{
echo "no record foun";
}
?> 
        
      </div><!-- / row -->
      <div class="text-center">
        <br>
        <a class="btn btn-default" href="#">SEE ALL NEWS</a>
      </div>
    </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>