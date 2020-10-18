<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <style>
   
   .container-m {
  width: 80%;
  margin:20px auto;
 
}
.carousel {
  
  max-height: 1121px;
  overflow: hidden;
  position: relative;
  border-radius: 5px;
  background: #fff;
  
}
.slider {
  display: flex;
  height: 100%;
  width: 200%;
}
.slider section {
  flex-basis: 100%;
  justify-content: center;
  align-items: center;
  display: flex;
  font-size: 20px;
}
.left, .right {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
.arrow i {
  font-size: 30px;
  -webkit-user-select: none;
  color: black;
}
.left {
  left: 10px;
}
.right {
  right: 10px;
}
.control ul {
  list-style: none;
  display: flex;
  position: absolute;
  bottom: 0;
  left: 50%;
  bottom:0%;
  margin: 0;
  padding: 0;
  transform: translate(-50%);
}
.control ul li {
  width: 10px;
  height: 10px;
  background: #333;
  border: 2px solid #333;
  border-radius: 50px;
  margin: 10px;
  cursor: pointer;
}
.control ul li.selected {
  background: transparent;
}
.message-internal{
   
    padding:20px 70px 20px 70px;
    text-align: justify;
}
.princi-pic{
    padding:0px 30px 0px 0px;
    
    box-sizing:border-box;
    
    
}
.princi-pic img{
    width:100%;
    height:100%;
    border-radius: 50%;
    border:1px solid black;
}
.princi-text{
  border-radius:10px;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), 0 4px 10px rgba(0, 0, 0, 0.1);
  padding:10px;
}
@media(max-width:862px){
    
      .message-internal{
   
   padding:20px;
    }
    .princi-pic{
        width:100%;
        padding:20px 100px 20px 100px;
    }
    .slider section{
        display:block;
    }
    .container-m {
  width: 100%;
}
.left,
.right {
  top:33%;
}
}
@media(max-width:500px){
  .left,
.right {
  top:20%;
}
}
    </style>
</head>

        <div class="container-m">
                <div class="carousel">
                  <div class="slider">
                    
                    <section class="message-internal">
                            <div class="princi-pic">
                                <img src="assets/img/B.jpg">
                            </div >
                            <div class="princi-text">
                                    <h2>Message from the Director</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa vitae, totam rerum nesciunt et possimus quidem corporis molestiae magni incidunt mollitia nisi, debitis, voluptate consequuntur consequatur necessitatibus dignissimos quod ut?</p>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique minima repudiandae rerum vel dolor totam, ad sequi animi! Aliquam optio debitis rem ad ab facere explicabo tempore mollitia quod enim.</p>
                            </div>
                        </section>
                        <section class="message-internal">
                                <div class="princi-pic">
                                    <img src="assets/img/A.jpg">
                                </div >
                                <div class="princi-text">
                                    <h2>Message from the Principal</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa vitae, totam rerum nesciunt et possimus quidem corporis molestiae magni incidunt mollitia nisi, debitis, voluptate consequuntur consequatur necessitatibus dignissimos quod ut?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias magni quidem voluptas veritatis, nemo veniam voluptates quibusdam, odio, pariatur ipsum necessitatibus ut impedit. Voluptates ipsum non omnis rem maxime facilis.</p>
                                </div>
                            </section>
                    
                  </div>
                  <div class="control">
                    <span class="arrow left">
                            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                    </span>
                    <span class="arrow right">
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                    </span>
                    <ul style="display:none;">
                      <li class="selected"></li>
                      <li></li>
                     
                    </ul>
                  </div>
                </div>
              </div>

<script>
    const left = document.querySelector('.left');
const right = document.querySelector('.right');

const slider = document.querySelector('.slider');

const indicatorParent = document.querySelector('.control ul'); 
const indicators = document.querySelectorAll('.control li');
index = 0;

indicators.forEach((indicator, i) => {
  indicator.addEventListener('click', () => {
    document.querySelector('.control .selected').classList.remove('selected');
    indicator.classList.add('selected');
    slider.style.transform = 'translateX(' + (i) * -50 + '%)';  
    index = i;
    
  });
});

left.addEventListener('click', function() {
  index = (index > 0) ? index -1 : 0;
  document.querySelector('.control .selected').classList.remove('selected');
  indicatorParent.children[index].classList.add('selected');
  slider.style.transform = 'translateX(' + (index) * -100 + '%)';
});

right.addEventListener('click', function() {
  index = (index < 1) ? index+1 : 0;
  document.querySelector('.control .selected').classList.remove('selected');
  indicatorParent.children[index].classList.add('selected');
  slider.style.transform = 'translateX(' + (index) * -50+ '%)';
});
</script>
</html>