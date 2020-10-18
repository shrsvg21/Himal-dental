<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="assets/css/review.css">
</head>
<body>
  

<div class="slideshow-container">
  
  <center><h2> <i>REVIEWS </i> </h2></center> <BR>
    <?php
    $conn = new mysqli('localhost','root','','dental');
   $query ="SELECT * FROM testimonial";
   $query_run = mysqli_query($conn, $query);

   $check_products=mysqli_num_rows($query_run)>0;
   if($check_products)
   {
       while($row = mysqli_fetch_array($query_run))
       {
           ?>
<div class="mySlides">
   
   <?php echo '<img src="admin/upload/'.$row['img'].'" alt="image" width="100px;" height="100px;">'?> <br>
  <q> <?php echo $row['descrip']; ?> </q>
  <p class="author">- <?php echo $row['name']; ?> </p>
</div>
<?php
                        
}
}
else
{
echo "no record foun";
}
?> 


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>




<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<BR>

</body>
</html> 
