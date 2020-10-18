//----------------nav responsive view------------//

window.addEventListener('scroll', function () {
    let header = document.querySelector('.nav-bar');
    let windowPosition = window.scrollY >0;
    header.classList.toggle('scrolling-active', windowPosition);
})




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
