<?php 

$servername="localhost"; 
$username="root"; 
$password="";
$dabname="bctech_db"; 

$check= mysqli_connect($servername, $username, $password, $dabname );

if ($check) {
  echo "Connection OK !" ;
}
else {
    echo "Faild";
}

$name= $_POST['name'];
$telephone= $_POST['telephone'];
$email= $_POST['email'];
$company= $_POST['company'];
$subject= $_POST['subject'];
$message= $_POST['message'];


$dat= "INSERT INTO bctech_tb VALUES('$name', '$telephone','$email', '$company','$subject', '$message')";

$excute = mysqli_query($check,$dat);

if ($excute) {
    echo "<script>alert('Your Enter Mesage Send successful')</script> ";  
}
else {
    echo "<script>alert('Your Enter Mesage Send  fail')</script> ";
}
?>