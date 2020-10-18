<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta charset="UTF-8">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reg_style.css">
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css"/>
    
    <!-------------------  This stylesheet provides the link to social media and contact icons in the header  ------------------------->
    <script src="https://kit.fontawesome.com/4e40b5e662.js" crossorigin="anonymous"></script>
    <!--------------------------------for nav hamburger menu---------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
</head>
<body>
    <!-- header -->
<?php 
    include ('header.php');
    include ('nav.php');

?>

  <div class="container">
        <form action="insert.php" method="POST">
            <br>
           <center><h3> FOR ONLINE APPOINTMENT</h3></center>
           <br>
          <div class="row">
            <div class="col-25">
              <label for="name">Patient's Name:</label>
            </div>
            <div class="col-75">
              <input type="text" id="name" name="name" placeholder="Your name..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="address">Address:</label>
            </div>
            <div class="col-75">
              <input type="text" id="address" name="address" placeholder="Your address..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="contact">Contact no:</label>
            </div>
            <div class="col-75">
              <input type="text" id="contact" name="contact" placeholder="Your contact no ..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="doctor">Doctor:  </label>
            </div>
            <div class="col-75">
              <select id="doctor" name="doctor">
              <option selected hidden value="">Select</option>
                <option value="drmale"> DR MALE</option>
                <option value="drfemale"> DR FEMALE</option>
                <option value="drram"> DR RAM</option>
                <option value="drhari">DR HARI </option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="email">Email Address:</label>
            </div>
            <div class="col-75">
            <input type="email" id="email"name="email" class="field text-field email-field" required placeholder="Your email.." >
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="date">Date:</label>
            </div>
            <div class="col-75">
              <label style="width:50px;"for="birthday">Date:</label>
            <input type="date" id="birthday" name="date">
            </div>
          </div>

          <div class="row">
            <input type="submit" value="Register" name="insert" class="btn">
          </div>
        </form>
      </div>
</body>
<?php
include('footer.php');
?>
</html>

