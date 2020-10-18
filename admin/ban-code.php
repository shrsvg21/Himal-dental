 <!------------------THIS is for bannerrrrrrrrrrrrr---------------------------------------->  

<?php
include('security.php');



if(isset($_POST['bannerbtn']))
{
  
   
    
    $image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($image_tmp,"upload/banner/$image");
    
   
    

      
            $query = "INSERT INTO banner(img) VALUES ('$image')";
            $querys_run = mysqli_query($connection, $query);

            
        }
        
            
            if($querys_run)
            {
               
                $_SESSION['status'] = "event Added";
                $_SESSION['status_code'] = "success";
                header('Location: banner.php');
            }
            else 
            {
                $_SESSION['status'] = "event  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: banner.php');  
            }
       ?>


      