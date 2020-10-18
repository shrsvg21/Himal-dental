<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilgiri</title>
    <!-------------------------------------    MAIN STYLESHEET   ---------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css"/>
    
    <!-------------------  This stylesheet provides the link to social media and contact icons in the header  ------------------------->
    <script src="https://kit.fontawesome.com/4e40b5e662.js" crossorigin="anonymous"></script>
    <!--------------------------------for nav hamburger menu---------------------------------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <!------------for blog slider------------------------------>
     <link rel="stylesheet" type="text/css" media="screen" href="css/lightslider.css"/>
      <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
      <script type="text/javascript" src="js/lightslider.js"></script>
</head>
<body>
<!----------------------------------------  social media icon header   ------------------------------------------------------->

<?php include('nav.php'); ?>

    <!------------------------------map section starts--------------------------------------------->
<div class="map-responsive" style="padding-top:300px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2284450934135!2d85.32597571506214!3d27.710232082790792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19095b21d71f%3A0x39d8259ac8898f60!2sHimal%20Hospital!5e0!3m2!1sen!2snp!4v1594647475028!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<div class="container">
    <div class="col-25">
    <div class="container">
      <hr>
      <h2 style="color: RED"> Quick Contact </h2>
      <h3>If you have any questions simply use the following contact details.</span></h3>
      <p><i class="fas fa-home" style="font-size:20px;color:black;"></i><b>ADDRESS: </b><br> Boudha-6, Kathmandu 44600</span></p>
      <p><i class="fas fa-envelope" style="font-size:20px;color:black;"></i><b>EMAIL:</b> <br>himaldental@g.com.np</span></p> 
      <p><i class="fas fa-phone" style="font-size:20px;color:black;"></i><b>PHONE: </b><br> 34343</span></p>
      <br>
      <hr>
        <div>
        <a class="facebookBtn smGlobalBtn" href="social-media-profile-url" ></a>
<a class="twitterBtn smGlobalBtn" href="social-media-profile-url" ></a>
<a class="googleplusBtn smGlobalBtn" href="social-media-profile-url" ></a>
<a class="linkedinBtn smGlobalBtn" href="social-media-profile-url" ></a>
</div>
<hr>
    
    </div>
  </div>
  
  <center ><h2 style="color: RED">Send us a message</h2> </center>

  <form action="connect.php" method="POST">
    <div class="row">
      <div class="col-25">
      <!--   <label for="fname">First Name</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="firstname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
       <!--  <label for="lname">Last Name</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      <!--   <label for="lname">Subject</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="Subject..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
       <!--  <label for="lname">Phone</label> -->
      </div>
      <div class="col-75">
        <input type="text" id="phone"  name="phone" placeholder="Your phone number..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
    <!--     <label for="subject">Message</label> -->
      </div>
      <div class="col-75">
        <textarea  name="message" id="message"placeholder="Write something.." style="height:200px"></textarea>
      </div>

    </div>  <br>
   <center> <button style="background-color: green;height: 30px;width: 60px" name="insert"> Submit</button> </center>
  
  </form>
  <hr>
</div>

</body>
<?php include('footer.php'); ?>
</html>

<!--*************************** map SECTION ENDS *************************************************-->
<!-------------------------------------    MAIN script ---------------------------------------------------------------------->
<script src="assets/js/main.js"></script>
