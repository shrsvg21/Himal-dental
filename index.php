<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-------------------  This stylesheet provides the link to social media and contact icons in the header  ------------------------->
     <script src="https://kit.fontawesome.com/4e40b5e662.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/message.css">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <style>
    

    </style>
</head>
<body>
<?php include('header.php'); ?>
<?php include('nav-for-home.php'); ?>

<div id="slider">
      <figure id="slidy">
              <img class="banner-img" src="assets/img/hospital.jpg" />
                <img class="banner-img" src="assets/img/banner.jpg"  />
                <img class="banner-img" src="assets/img/Dental-Ward.jpg" />
                <img class="banner-img" src="assets/img/19.jpg" />
             <img  class="banner-img" src="assets/img/dc.jpg" />
              <img class="banner-img"  src="assets/img/footer-back.jpg" />
             
            </figure>
  
    </div>
   


 
  <hr>
</div>
<style>
.slider-down{
  display:flex;
 
  padding:50px;
  justify-content:space-between;
  flex-wrap: wrap;
  
}
.slider-down .viddeo{
  width:50%;
  text-align:justify;
}
.slider-down .video-content{
width:40%;

}
@media(max-width:1295px){
  .slider-down .viddeo{
  width:30%;
}
.slider-down .video-content{
width:60%;

}}
@media(max-width:900px){

  .slider-down{
  display:block;
  padding-top:0px;
 
}
.slider-down .viddeo{
  width:100%;
 text-align:center;
  
}
.slider-down .video-content{
width:100%;
height:500px;

}

}
@media(max-width:400px){
  .slider-down .video-content{
    height:250px;
    
  }
  .slider-down{
    padding-left:20px;
    padding-right:20px;
  }
}
</style>
<div style="border-bottom:3px solid black;max-height: 1344px;">

<div class="slider-down">

  <div class="viddeo">
  <h2 style="padding-bottom:50px;"> <b>Welcome to Himal Dental Hospital</b></h2> 
    <p>Himal institute of dental science  was established in 2008 with a motive of producing qualified dental man powers to bridge the gap between the dental service providers and those who need services. Currently the institution operates three types of academic courses in Dental Science, Dental Nursing (Assistant) Training and Dental Lab Mechanics training. We are extending our courses to BDS (Bachelor in Dental Surgery)  and BDH (Bachelor in Dental Hygiene) in near  our  future.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! 
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus similique perspiciatis voluptas autem, incidunt nobis? Sint ducimus possimus sunt magni cupiditate iste aut distinctio veniam facilis consectetur, tenetur eos?
    </p>
  </div>
  <div class="video-content">
  <iframe width="100%" height="100%"
      src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
</iframe>
  </div>
  
</div>
</div>
 


        <!-------------------VIDEO SECTION ends--------------------------------------------------------------->

  <style>
    .hosp-pic{
     max-height: 3000px; 
      display:flex;
      flex-wrap:wrap;
      justify-content:space-between;
      padding:20px 100px 20px 100px;
      overflow: hidden;
      box-sizing:border-box;
      background-color:#f0f5f5;
      border-bottom:2px solid black;
    }
    .hosp-pic .h-pic{
      width:50%;
      box-sizing:border-box;
      background-color:white;
    
    }
    .hosp-pic .h-pic img{
      width:100%;
      height:100%;
      padding:20px;
      border:1px solid black;
      
    }
    .hosp-pic .h-text{
      width:40%;
    }
    @media(max-width:1322px){
      .hosp-pic .h-pic{
      width:60%;}
      .hosp-pic .h-text{
      width:30%;
    }
    .hosp-pic{
      padding:20px 50px 20px 50px;
    }
    }
    @media(max-width:1080px){
      .hosp-pic{padding:0px 20px 0px 20px;}
    }
    @media(max-width:930px){
     
      .hosp-pic .h-pic{
        width:100%;
      }
      .hosp-pic .h-text{
      width:100%;
      margin-top:20px;
    }

    }
  </style>
        <div class="hosp-pic">
          <div class="h-pic">
            <img src="assets/img/hospital.jpg">
          </div>
          <div class="h-text">
            <h2>ABOUT US </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi mollitia itaque est. Reiciendis, neque atque totam vel distinctio earum obcaecati quasi fugit esse soluta mollitia. Ex itaque officia excepturi ratione?</P>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit facilis earum esse ipsa quaerat deserunt repudiandae sequi quia eveniet tempora voluptatibus non vitae magnam ab, corporis corrupti laudantium id?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit facilis earum esse ipsa quaerat deserunt repudiandae sequi quia eveniet tempora voluptatibus non vitae magnam ab, corporis corrupti laudantium id?</p>

          </div>
        </div>
        
        <!---------------------------about us overlapping image wala---------------------------------------------------->
      <!--  <style>
        .info{         
        
          
            display:grid;
            height:500px;  
          }
          #text{
            border:1px solid black;
            grid-column: 2/ span 3;
            grid-row:2 /span 1;
            padding-left:300px;
          background-color:white;
            
            
          }
          
          #picture img{
            width:100%;
            height:100%;
          
          }
          #picture {
           
           height:400px;
           width:500px;
           grid-column: 1 /span 2;
           grid-row:1/ span 2;
          }
          @media (max-width:917px){
           .info{
               display:block;
               
               height: fit-content;
           }
           #picture{
               width:100%;
               
               box-sizing: border-box;
           }
           #text{
               padding:20px;
           }
          
           }
           
        </style>
        
        <div class="info">
        <div id="text">
          <center>  <h2> Director's message</h2> </center>

  <center>  <img src="assets/img/r.jpg" class="profile-pic"> </center>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum maxime iusto aliquid officiis cupiditate repellat dolor consequatur? Dolor, blanditiis quia repellendus obcaecati aperiam facilis minus distinctio aliquid assumenda quis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum maxime iusto aliquid officiis cupiditate repellat dolor consequatur? Dolor, blanditiis quia repellendus obcaecati aperiam facilis minus distinctio aliquid assumenda quis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum maxime iusto aliquid officiis cupiditate repellat dolor consequatur? Dolor, blanditiis quia repellendus obcaecati aperiam facilis minus distinctio aliquid assumenda quis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum maxime iusto aliquid officiis cupiditate repellat dolor consequatur? Dolor, blanditiis quia repellendus obcaecati aperiam facilis minus distinctio aliquid assumenda quis.</p>
        </div>
        <div id="picture">
        <img src="assets/img/hospital.jpg">
        </div>
    </div>-->


<!-------------------THree boxes starts--------------------------------------------------------------->
<div class="threebox" id="mission">
    <br>
   
    
    <br>
    <br>
    <div class="about-inner-wrap">
      <div class="each-box">
        
        <h3>MISSION</h3>
        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sequi? Voluptate sit, ab laudantium alias accusantium optio temporibus sequi, aliquid aspernatur sint obcaecati possimus magni! Doloribus perspiciatis architecto natus quis.</p>
        
        <a href="#"style="color:black; background:white;">READ MORE</a>
      </div>
      <div class="each-box">
          
          <h3>VISSION</h3>
          <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! </p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sequi? Voluptate sit, ab laudantium alias accusantium optio temporibus sequi, aliquid aspernatur sint obcaecati possimus magni! Doloribus perspiciatis architecto natus quis.</p>
          
          <a href="#" style="color:black; background:white;">READ MORE</a>
        </div>
      <div class="each-box">
          
          <h3>OBJECTIVE</h3>
          <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deleniti obcaecati odio sunt maxime ab esse iure beatae possimus magni corrupti quas ipsam, aut officia earum unde quidem neque adipisci! </p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sequi? Voluptate sit, ab laudantium alias accusantium optio temporibus sequi, aliquid aspernatur sint obcaecati possimus magni! Doloribus perspiciatis architecto natus quis.</p>
         
          <a href="#" style="color:black; background:white;">READ MORE</a>
        </div>
    </div>
  </div>
  
<!--***************************there boxes ends*************************************************-->
<!------------------------------ABOUT US section starts--------------------------------------------->
<div id="story-behind">
    <div class="story-container">
      <br>
      <h1 style="color: white">HISTORY</h1>
      <br>
      <p  style="color: white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
      <br>
      <p style="color: white">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, </p>
     
    <br>
    <!--   <center><img src="assets/img/service3.jpg"></center> -->
    </div>
  </div>
  <!-- Message from principal-->
  <?php include('message.php'); ?>
 
<!--*************************** our story SECTION ENDS *************************************************-->
<!-- services -->
<br >
<center><h2> OUR SERVICES </h2></center>
<div class="serv">
  <div class="serv1" style="background-color:#ddd;">
  <img src="assets/img/d1.jpg">
    <h3>DENTAL IMPLANT</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus similique perspiciatis voluptas autem. </p>
  </div>
  <div class="serv1" style="background-color:#ddd;">
  <img src="assets/img/d2.jpg">
    <h3>BRACES</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus similique perspiciatis voluptas autem.</p>
  </div>
  <div class="serv1" style="background-color:#ddd;">
  <img src="assets/img/d1.jpg">
    <h3>DENTURES</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus similique perspiciatis voluptas autem.</p>
  </div>
  <div class="serv1" style="background-color:#ddd;">
  <img src="assets/img/d2.jpg">
    <h3>TEETH WHITENING</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus similique perspiciatis voluptas autem.</p>
  </div>
  <center><a href="services.php" class="w3-btn w3-black">MORE SERVICES</a></center>
</div>
 <!--=================================meet our team,=================================================================-->
 <div id= "team" class="meet-team-wrapper" style="margin-bottom:100px;">
        <h1>MEET OUR DOCTORS</h1>
        <div class="our_team">
        <?php
    $conn = new mysqli('localhost','root','','dental');
   $query ="SELECT * FROM doctor";
   $query_run = mysqli_query($conn, $query);

   $check_products=mysqli_num_rows($query_run)>0;
   if($check_products)
   {
       while($row = mysqli_fetch_array($query_run))
       {
           ?>
            <div class="team_member">
              <div class="member_img">
                 
                 <?php echo '<img src="admin/upload/doctor/'.$row['img'].'" alt="image"class="banner-img">'?>
                <div class="social_media">
                   <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
                   <div class="twitter item"><i class="fab fa-twitter"></i></div>
                   <div class="instagram item"><i class="fab fa-instagram"></i></div>
                 </div>
              </div>
              <h3> <?php echo $row['name']; ?></h3>
              <span>-<?php echo $row['field']; ?></span>
              
            </div>
              

                  <?php
                        
                    }
                    }
                    else
                    {
                    echo "no record found";
                    }
                    ?> 
        </div>
    </div>


   <!------------------news and events------------------------------>
   <?php include ('awards.php'); ?> 
<?php include ('events.php'); ?> 
<?php include ('review.php'); ?> 



<!--------------------------messenger------------------------------------------------------->
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="571305969637566"
  theme_color="#0084ff">
      </div>
      <!-----------------------------------messenger ends------------------------------------------------------>



<!-------------------------------------    MAIN script ---------------------------------------------------------------------->


<script src="assets/js/main.js"></script>

<!------------------------------map section starts--------------------------------------------->
<div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2284450934135!2d85.32597571506214!3d27.710232082790792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19095b21d71f%3A0x39d8259ac8898f60!2sHimal%20Hospital!5e0!3m2!1sen!2snp!4v1594647475028!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!--*************************** map SECTION ENDS *************************************************-->


<!------------------------------footer section starts--------------------------------------------->
<?php include('footer.php'); ?>



<!--*************************** footer SECTION ENDS *************************************************-->

</body>
</html>