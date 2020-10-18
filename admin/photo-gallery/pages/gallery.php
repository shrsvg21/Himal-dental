<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilgiri</title>
    <!-------------------------------------    MAIN STYLESHEET   ---------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" media="screen" href="../../../assets/css/style.css"/>
    
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
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
        
    <?php
	//Get the connection info for the DB. 
	require_once '../includes/config.php';
        $mysqli = new mysqli('localhost','root','','info230_SP16_hi52sp16');
        
        //Was there an error connecting to the database?
	if ($mysqli->errno) {
	    print($mysqli->error);
	    exit();
        }
        
       $sqlrows = "SELECT * FROM Albums;";
        
        //Get the data
	$rows = $mysqli->query($sqlrows);
			
	//If no result, print the error
	if (!$rows) {
	    print($mysqli->error);
	    exit();
        }
        
        $row_count = $rows->num_rows;
        
        $count = 1;
        
        while ($count <= $row_count) {
            
            $cover = "SELECT aCover FROM Albums WHERE aID=$count;";
            $coverdata = $mysqli->query($cover);
            
            while ($row = $coverdata->fetch_assoc()) {
            
                if (empty($row[ 'aCover' ])) {
                    $sets = "aCover = '../images/default.jpg'";
                
                    $setcover = "UPDATE Albums SET $sets WHERE aID=$count;";
                    $mysqli->query($setcover);
                }
            }
            
            $count=$count+1;
        }
        
        $sql = "SELECT * FROM Albums;";
        
        //Get the data
	$result = $mysqli->query($sql);
			
	//If no result, print the error
	if (!$result) {
	    print($mysqli->error);
	    exit();
        }
        
    ?>
    
</head>

<body>

    
 
    

    <?php include "../../../nav.php";?>
    
    <div id = "table">
    
    <?php   
        print("<table><tbody>");
	
	$count = 1;
	
	print ("<tr>");
            
        while ($row = $result->fetch_assoc()) {
            
            $album_id = $row['aID'];
	    $href = "images.php?album_id=$album_id";
            print("<td><a href='$href' title='$href'>
	    <img src='{$row[ 'aCover' ]}' alt='Image'></a><p></p>
	    {$row[ 'title' ]}</td>");
	    
	    if ($count%3 == 0) {
		print ("<tr>");
	    }
            
	    $count ++;
        }
        
        print('</tbody>');
        print('</table>')
    ?>
    
    </div>
  <!-------------------------------------    MAIN script ---------------------------------------------------------------------->
  <script src="assets/js/main.js"></script>
</body>

</html>






