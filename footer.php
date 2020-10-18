<!---------------to the top button------------------------------->
<!-- BACK TO TOP ARROW-->
<button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fas fa-angle-up"></i></button>
<script type="text/javascript">
  
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
  <!--------------------------------footer----------------------->
 <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Himal<span> Hospital</span></h3>

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="#">About</a>
          
          <a href="#">Faq</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Himal Hospital© 2015</p>
      </div>

      <div class="footer-center">

        <div>
        <a name="contact">  <i class="fa fa-map-marker"></i></a>
          <p><span>DILLIBAZAR, KATHMANDU</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>345345353455</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">himalhospital@gmail.com</a></p>
        </div>
        <br>
      <div>
        <a class="facebookBtn smGlobalBtn" href="social-media-profile-url" ></a>
<a class="twitterBtn smGlobalBtn" href="social-media-profile-url" ></a>
<a class="googleplusBtn smGlobalBtn" href="social-media-profile-url" ></a>
<a class="linkedinBtn smGlobalBtn" href="social-media-profile-url" ></a>
</div>



      </div>

      <div class="footer-right">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbakerycafe&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
         width="280" height="350" style="border:none;overflow:hidden" 
        scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>

      </div>

    </footer>