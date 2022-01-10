<html>
    <head>
        <title>Connect to DB</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
<?php
 require 'DBinfo.php';
 $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
 if(!$conn){
     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
     exit;
 }
 if(isset($_GET['user_id']))
 {
    $sql="SELECT * FROM users WHERE user_id=".$_GET['user_id'];
    mysqli_select_db($conn,$dbname);
    $result= mysqli_query($conn,$sql);
    if(!$result){
        echo "Filed selection".mysqli_error($conn);
    }
    if(mysqli_num_rows($result)>=0){
        while($row=mysqli_fetch_assoc($result)){
           
           echo "
                <div class='card'>
                    <div class='card-header'>Welcome : {$row['name']}</div>
                    <div class='card-body'>
                            <h6 class='card-subtitle mb-3 text-muted'>Name :</h6>
                            <p class='card-text'>{$row['name']}</p>
                            <h6 class='card-subtitle mb-3 text-muted'>E-Mail :</h6>
                            <p class='card-text'>{$row['email']}</p>
                            <h6 class='card-subtitle mb-3 text-muted'>Gender :</h6></h6>
                            <p class='card-text'>{$row['gender']}</p>
                            <h6 class='card-subtitle mb-3 text-muted'>Sending E-maill :</h6>
                            <p class='card-text'>{$row['receive']}</p>
                            <a href='index.php' class='btn btn-secondary'>Go Back</a>
                    </div>
                    </div>
                </div>";
        }
    }
    
    
 }
 mysqli_close($conn);
 //header('Location: '.'index.php');
?>
</body>
</html>