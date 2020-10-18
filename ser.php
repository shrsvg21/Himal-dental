<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilgiri</title>
    <!-------------------------------------    MAIN STYLESHEET   ---------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/services.css"/>
    
    <!-------------------  This stylesheet provides the link to social media and contact icons in the header  ------------------------->
    <script src="https://kit.fontawesome.com/4e40b5e662.js" crossorigin="anonymous"></script>
    
</head>

 <?php include( 'header.php' ) ;  ?>  
 <body>
 	<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:green;">
    Box 1
  </div>
  <div class="column" onclick="openTab('b2');" style="background:blue;">
    Box 2
  </div>
  <div class="column" onclick="openTab('b3');" style="background:red;">
    Box 3
  </div>
</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:green">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Box 1</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b2" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Box 2</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<div id="b3" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Box 3</h2>
  <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
 </body>