<?php
require_once('connection.php');
$firstname = $lastname = $contact = $subject = $message ='';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO contact
(firstname,lastname,phone,subject,message) VALUES ('$firstname','$lastname','$phone','$subject','$message')";
$result = mysqli_query($conn, $sql);
if($result)
{
   echo "registered successfully";
}
else
{
   echo "Error :".$sql;
}
?>