<?php
 require 'DBinfo.php';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
 if(!$conn){
     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
     exit;
 }
 
 if(isset($_POST['submit']))
 {
     $name = $_REQUEST["name"];
     $email = $_REQUEST["email"];
     $gender = $_REQUEST["gender"];
     if(isset($_REQUEST['receive'])){
     $sql = "UPDATE users SET name='$name',email='$email',gender='$gender',receive='yes'
     WHERE user_id=".$_GET['user_id'];
  
     }
     else {
        $sql = "UPDATE users SET name='$name',email='$email',gender='$gender',receive='no'
        WHERE user_id=".$_GET['user_id'];
         }
     if ($conn->query($sql) === TRUE) {
         echo "update record  successfully";
     }
     else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
 } 
 mysqli_close($conn);
 header('Location: '.'index.php');
?>