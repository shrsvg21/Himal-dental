
<!--================================= main nav bar ==================================================-->
<section class="nav-bar">
        <div class="nav-container"> 
        <div class="brand">
                <a href="index.php" class="img1"><img src="assets/img/logo.png"></a>
                <a href="index.php" class="img2"><img src="assets/img/dum-logo.png"></a>
            </div>
            <nav>
            
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="#">ABOUT</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="introduction.php">INTRODUCTION</a>
                            </li>
                            <li>
                                <a href="#mission">MISSION VISSION & OBJECTIVE</a>
                            </li>
                            <li>
                                <a href="special-features.php">SPECIAL FEATURES</a>
                            </li>
                            <li>
                                <a href="introduction.php">SALIENT FEATURES</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.php">SERVICES</a>
                    </li>
                    
                    <li>
                    <a href="index.php#team">DOCTORS</a>
                    </li>
                    <li>
                        <a href="#">INSTITUTE</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="institute.php">LABS & LIBRARY</a>
                            </li>
                            <li>
                                <a href="institute.php#Labs">COURSE</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="admin/photo-gallery/pages/gallery.php">GALLERY</a>
                    </li>
                    <li>
                        <a href="#">BRANCHES</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="branches.php">KATHMANDU</a>
                            </li>
                            <li>
                                <a href="branches.php">LALITPUR</a>
                            </li>
                          
                        </ul>
                    </li>
                    
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>
                   
                </ul>
            </nav>
            
        </div>
       
  </section>
<style>
.spacer
{
    width: 100%;
    height: 75px;
}
</style>
<div class="spacer">
    &nbsp;
</div>
<script src="assets/js/main.js"></script>

  
  <!---**********************************NAV BAR ENDS HERE************************************************-->
  <script>
  window.addEventListener('scroll', function () {
    let header = document.querySelector('.nav-bar');
    let windowPosition = window.scrollY >0;
    header.classList.toggle('scrolling-active', windowPosition);
})

</script>

<script>
(function($) { 
$(function() { 
$('nav ul li a:not(:only-child)').click(function(e) {
$(this).siblings('.nav-dropdown').toggle();
$('.dropdown').not($(this).siblings()).hide();
e.stopPropagation();
});
$('html').click(function() {
$('.nav-dropdown').hide();
});
$('#nav-toggle').click(function() {
$('nav ul').slideToggle();
});
$('#nav-toggle').on('click', function() {
this.classList.toggle('active');
});
}); 
})(jQuery);
</script>