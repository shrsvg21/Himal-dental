
<!--------------------this is for adding news-------------------------->
<?php
include('security.php');



if(isset($_POST['newsbtn']))
{
    $title=$_POST['title'];
    $news=$_POST['news'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $day=$_POST['day'];
    

      
            $query = "INSERT INTO news(title,month,year,day,descrip) VALUES ('$title','$month','$year','$day','$news')";
            $query_run = mysqli_query($connection, $query);

            
        }
        
            
            if($query_run)
            {
               
                $_SESSION['status'] = "News Added";
                $_SESSION['status_code'] = "success";
                header('Location: news.php');
            }
            else 
            {
                $_SESSION['status'] = "News  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: news.php');  
            }
       ?>
