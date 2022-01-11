<?php
    session_start();
    $name=$_SESSION['user_name'];
    $password=$_SESSION['password'];
    require 'DBinfo.php';
    $sql = "INSERT INTO login (user_name,password) VALUES ('$name','$password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success']='You Are Login Now';
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    mysqli_close($conn);
    header('Location: '."index.php");
?>