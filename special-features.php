<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilgiri</title>
    <!-------------------------------------    MAIN STYLESHEET   ---------------------------------------------------------------------->
    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/featured-page.css"/>
    
    
    <!-------------------  This stylesheet provides the link to social media and contact icons in the header  ------------------------->
    <script src="https://kit.fontawesome.com/4e40b5e662.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>

/*======================Nav style=======================================*/
.nav-bar {
    
    height: 75px;
    background:rgba(0,0,0,0.7);
     position: fixed;
    width: 100%;
    z-index: 1;
   
    }
    html {
    box-sizing: border-box;
    scroll-behavior: smooth;
    
  }
    
    .brand {
      position: absolute;
      padding-left: 20px;
      float: left;
      line-height: 70px;
      text-transform: uppercase;
      font-size: 1.4em;
    }
    .brand a img {
        max-height: 70px;
    }
    .brand a,
    .brand a:visited {
      color: #ffffff;
      text-decoration: none;
    }
    
    .nav-container {
      width:100%;
     
      
      margin: 0 auto;
    }
    
    nav {
      float: right;
    }
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      background: #262626;
    }
    nav ul li {
      float: left;
      position: relative;
    }
    nav ul li a,
    nav ul li a:visited {
      display: block;
      padding: 0 20px;
      line-height: 70px;
     
      color: white;
      text-decoration: none;
    }
    nav ul li a:hover,
    nav ul li a:visited:hover {
      background: #2ab1ce;
      color: #ffffff;
    }
    nav ul li a:not(:only-child):after,
    nav ul li a:visited:not(:only-child):after {
      padding-left: 4px;
      content: ' ▾';
    }
    nav ul li ul li {
      min-width: 190px;
    }
    nav ul li ul li a {
      padding: 15px;
      line-height: 20px;
    }
    
    .nav-dropdown {
      position: absolute;
      display: none;
      z-index: 1;
      box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
    }
    .nav-mobile {
      display: none;
      position: absolute;
      top: 0;
      right: 0;
      background: #262626;
      height: 70px;
      width: 70px;
    }
    
    @media only screen and (max-width: 1329px) {
      .nav-mobile {
        display: block;
  
      }
      .nav-bar{
        background: #262626;
      }
      nav {
        width: 100%;
        padding: 70px 0 15px;
      }
      nav ul {
        display: none;
      }
      nav ul li {
        float: none;
      }
      nav ul li a {
        padding: 15px;
        line-height: 20px;
        padding-left: 25%;
         
      }
      nav ul li ul li a {
        padding-left: 30%;
      }
    
      .nav-dropdown {
        position: static;
      }
        .brand a img {
            max-height: 60px;
            margin-top: 5px;
        }
    }
    @media screen and (min-width: 1329px) {
      .nav-list {
        display: block !important;
      }
    
    }
    #nav-toggle {
      position: absolute;
      left: 18px;
      top: 22px;
      cursor: pointer;
      padding: 10px 35px 16px 0px;
    }
    #nav-toggle span,
    #nav-toggle span:before,
    #nav-toggle span:after {
      cursor: pointer;
      border-radius: 1px;
      height: 5px;
      width: 35px;
      background: #ffffff;
      position: absolute;
      display: block;
      content: '';
      transition: all 300ms ease-in-out;
    }
    #nav-toggle span:before {
      top: -10px;
    }
    #nav-toggle span:after {
      bottom: -10px;
    }
    #nav-toggle.active span {
      background-color: transparent;
    }
    #nav-toggle.active span:before, #nav-toggle.active span:after {
      top: 0;
    }
    #nav-toggle.active span:before {
      transform: rotate(45deg);
    }
    #nav-toggle.active span:after {
      transform: rotate(-45deg);
    }
    
    article {
      max-width: 1000px;
      margin: 0 auto;
      padding: 10px;
    }
    nav li input{
        margin: 21px;
    }
  
    .scrolling-active{
        top: -0.1px;
        background: #262626;
       
  }
  
  /*chnaging image*/
  .brand .img2{
  display:none;
  }
  @media(max-width:423px){
  .brand .img1{
    display:none;
  }
  .brand .img2{
    display:block;
  }
  }
  
  
  /***********************************nav css ends*************************************************/

</style>
</head>
<body>
<!----------------------------------------  social media icon header   ------------------------------------------------------->

<?php include('nav.php'); ?> 

<div id="features">

<h2 style="margin:50px;">Special Features of the Hospital</h2>


<div class="cards">
  <div class="card"style="background:lightgrey">
      <h2>DEPARTMENT OF ORTHODONTICS </h2>
      <p>DEPARTMENT OF ORTHODONTICS 
The Department of Orthodontics is the area of dentistry concerned with the supervision, guidance and correction of the growing and mature dentofacial structures, including those conditions that require movement of teeth or correction of mal-relationships and malformations of related structures by the adjustment of the relationships between and among teeth and facial bones by the application of forces and/or the stimulation and redirection of the functional forces within the craniofacial complex. The ultimate aim of Orthodontic treatment is to achieve functional efficiency, structural balance and esthetic harmony of face and the dentofacial structures.

Presently, various treatment procedures such as: fixed orthodontics, removable orthodontics, dentofacial orthopedics procedures are being carried out.
</p>
  </div>
  <div class="card">
    <img src="assets/img/Dental-Ward.jpg">
    </div>
  <div class="card">
    <h2>DEPARTMENT OF ORAL & MAXILLOFACIAL SURGERY </h2>
    <p>Minor Oral Surgical procedures such as teeth extraction, removal of impacted teeth, cyst enucleation, biopsies etc are routinely carried out in this department      
    </p>
  </div>
  <div class="card" style="background:lightgrey">
    <h2>DEPARTMENT OF PROSTHODONTICS </h2>
    <p>his department provides new artificial tooth for those persons who lose their teeth. This Department carried out replacement of missing teeth. Complete dentures, removable partial dentures, fixed bridges and maxillofacial prosthesis of congenital defects resultant of carcinoma & trauma are routinely fabricated in this department

    </p>
</div>
  <div class="card">
      <img src="assets/img/Dental-Ward.jpg">
</div>
  <div class="card"><h2>DEPARTMENT OF COMMUNITY DENTISTRY </h2>
    <p>
        This department is involved in the community based academic & clinical activities. Research & Oral Health Awareness Programme also are carrying out from the department. This department has its own importance, as the curriculum of BDS is community oriented.
        This department is conducting dental camps, school health programmes, Mother-child dental health awareness programes etc. individually according to the plan of action in accordance with the academic curriculum of CDS programme.
        Initially, the role-played by the Community Dental Service was mostly at a curative level, gradually, department started to consider the aspects of prevention methods, health promotion and health education as well as community activities.
    </p>
  </div>
  
  <div class="card"style="background:lightgrey"><h2>DEPARTMENT OF CONSERVATIVE DENTISTRY & ENDODONTICS</h2>
    <p>
        A separate branch is devoted to the needs of children. The importance of child’s dentition is explained to parents and necessary procedures are carried out in restoring them.
        Procedures like (a) Amalgam Restorations (b) Glass Inomer Restorations (c) Anterior & Posterior Composite Restoration are routinely done.
        Procedures like: (a) Pulpotomy (b) Removable Orthodontic Therapy (c) Serial extractions (d) Pulpectomy are carried out on child patients at present. Management of handicapped patients is also being done.
        With respect to preventive Dentistry –school health programme has been scheduled / recommended from the public health dept
    </p>
  </div>
  <div class="card">
      <img src="assets/img/Dental-Ward.jpg">
      </div>
  <div class="card"><h2>DEPARTMENT OF CONSERVATIVE DENTISTRY & ENDODONTICS</h2>
    <p>
        All types of restorative dentistry as well as Endodontic treatments are carried out in this department. Cosmetic dentistry works carried out in this department is gaining popularity in the recent times.
    </p>
  </div>
  <div class="card"style="background:lightgrey"><h2>DEPARTMENT OF ORAL MEDICINE AND RADIOLOGY</h2>
    <p>
        To cure any disease it is important to provide correct diagnosis. The hospital’s OPD department is equipped with modern technology, machines which include:

        Intra-Oral Cameras
        Ortho Pantomograms
        General IOPA X-ray
    </p>
  </div>
  <div class="card"style="background:lightgrey"><h2>DEPARTMENT OF CONSERVATIVE AND ENDODONTIC SURGERY</h2>
    <p>
        Decay is a wide spreading disease that does not leave any individual. At conservative department, HDH provides restorative treatment on almost all surfaces of the teeth using flowable composites and other dental materials.
    </p>
  </div>
  <div class="card"><h2>Department of Prosthodontia Including Crown and Bridge</h2>
    <p>
        Prostho department are engaged in providing solution for the patients who have lost their teeth prematurely due to negligence or some other reasons. HDH care for senior citizens at fabricating complete dentures for old patients.
    </p>
  </div>
  <div class="card"><h2>DEPARTMENT OF PERIODONTICS</h2>
<p>
    This department specializes in the treatment related to the structures, which supports the tooth. The highlight of the treatment is on how to maintain oral hygiene and with the reconstruction of supporting tissues, which are lost due to periodontal diseases.
</p>
</div>
<div class="card" style="background:lightgrey"><h2>DEPARTMENT OF PEDODONTICS</h2>
<p>
    For the development of healthy permanent teeth, it is important to give emphasis in maintenance of deciduous teeth (milk teeth). We offer general dental treatment to primary teeth in order to prevent cavitations and providing preventive treatment for restoring occlusion etc.
</p>
</div>
<div class="card"style="background:lightgrey"><h2>DEPARTMENT OF ORTHODONTICS</h2>
<p>
    Our major concern is not only with the correction of the position of teeth but also to provide the correct balance to the occlusion so that it leads to normal oral functioning.
</p>
</div>
<div class="card"><h2>DEPARTMENT OF ORAL AND MAXILLOFACIAL SURGERY</h2>
<p>
    Oral and maxillofacial surgery involves minor and major surgical procedures, which include removing infections by procedures such as extraction followed by curettage. Major procedures include removing cyst, tumor and providing first aid medical emergency for trauma cases.
</p>
</div>

<div class="card"><h2>DEPARTMENT OF PERIODONTICS</h2>
<p>

</p>
</div>
<div class="card"style="background:lightgrey"><h2>DEPARTMENT OF PERIODONTICS</h2>
<p>

</p>
</div>
</div>

</div>

<?php include( 'footer.php' ) ;  ?>  
<!-------------------------------------    MAIN script ---------------------------------------------------------------------->
<script src="assets/js/main.js"></script>
