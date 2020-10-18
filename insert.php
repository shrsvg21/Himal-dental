
<?php
     $name=$_POST['name'];
     $address=$_POST['address'];
     $contact=$_POST['contact'];
     $doctor=$_POST['doctor'];
     $email=$_POST['email'];
     $date=$_POST['date'];
     

      $conn = new mysqli('localhost','root','','dental');
      if($conn->connect_error){
          echo "$conn->connect_error";
          die("Connection Failed : ". $conn->connect_error);
      } else {
          $stmt = $conn->prepare("insert into appointment(name,address,contact,doctor,email,date) values(?, ?,?, ?, ?,?)");
          $stmt->bind_param("ssssss", $name,$address,$contact,$doctor,$email,$date);
          $execval = $stmt->execute();
          echo $execval;
          header('Location:appointment.php');
          $stmt->close();
          $conn->close();
      }

    ?>
