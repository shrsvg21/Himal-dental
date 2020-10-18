
<!--------------------this is for adding event-------------------------->
<?php
include('security.php');



if(isset($_POST['eventbtn']))
{
    $name=$_POST['name'];
   
    $descrip=$_POST['descrip'];
    $image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($image_tmp,"upload/$image");
    
   
    

      
            $query = "INSERT INTO testimonial(name,img,descrip) VALUES ('$name','$image','$descrip')";
            $query_run = mysqli_query($connection, $query);

            
        }
        
            
            if($query_run)
            {
               
                $_SESSION['status'] = "testimonial Added";
                $_SESSION['status_code'] = "success";
                header('Location: testimonial.php');
            }
            else 
            {
                $_SESSION['status'] = "testimonial Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: testimonial.php');  
            }
       ?>



      