
<!--------------------this is for adding event-------------------------->
<?php
include('security.php');



if(isset($_POST['eventbtn']))
{
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    
    $start=$_POST['start'];
    $end=$_POST['end'];
    $title=$_POST['title'];
    $descrip=$_POST['descrip'];
    

      
            $query = "INSERT INTO event(day,month,year,start,end,title,descrip) VALUES ('$day','$month','$year','$start','$end','$title','$descrip')";
            $query_run = mysqli_query($connection, $query);

            
        }
        
            
            if($query_run)
            {
               
                $_SESSION['status'] = "event Added";
                $_SESSION['status_code'] = "success";
                header('Location: events.php');
            }
            else 
            {
                $_SESSION['status'] = "event  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: events.php');  
            }
       ?>
