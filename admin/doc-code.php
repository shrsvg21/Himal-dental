 <!------------------------this is for doctor---------------------------->

       
       <?php
include('security.php');



if(isset($_POST['docbtn']))
{
    $name=$_POST['name'];
   
    $field=$_POST['field'];
    $image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($image_tmp,"upload/doctor/$image");
    
   
    

      
            $query = "INSERT INTO doctor(name,img,field) VALUES ('$name','$image','$field')";
            $queryi_run = mysqli_query($connection, $query);

            
        }
        
            
            if($queryi_run)
            {
               
                $_SESSION['status'] = "event Added";
                $_SESSION['status_code'] = "success";
                header('Location: doctor.php');
            }
            else 
            {
                $_SESSION['status'] = "event  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: doctor.php');  
            }
       ?>