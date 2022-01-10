<?php
 require 'DBinfo.php';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
 if(!$conn){
     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
     exit;
 }
 if(isset($_GET['user_id']))
 {
   $sql = "DELETE FROM users WHERE user_id=".$_GET['user_id'];
   if(mysqli_query($conn,$sql)){
      echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    
 }
 mysqli_close($conn);
 header('Location: '.'index.php');
?>