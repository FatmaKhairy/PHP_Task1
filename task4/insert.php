<?php
 require 'DBinfo.php';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
 if(!$conn){
     echo "Error: Unable to connect to MySQL." . PHP_EOL;//not work
     echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;//not work
     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
     exit;
 }
 if(isset($_POST['submit']))
 {
     $name = $_REQUEST["name"];
     $email = $_REQUEST["email"];
     $gender = $_REQUEST["gender"];
     if(isset($_REQUEST['receive'])){
     $sql = "INSERT INTO users (name,email,gender,receive) VALUES ('$name','$email','$gender','yes')";
     }
     else {
     $sql = "INSERT INTO users (name,email,gender,receive) VALUES ('$name','$email','$gender','no')";
     }
     if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
     }
     else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
 }
 mysqli_close($conn);
 header('Location: '.'index.php');
?>