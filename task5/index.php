<html>
    <head><title>Task-5</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style5.css">
    </head>
    <body>
        
        <?php
            session_start();
            if(isset($_GET['logout'])){
                session_destroy();
                header('Location: '."index.php");
            }
            if(isset($_SESSION["user_name"])){
                $name=$_SESSION["user_name"];
                echo "<span>".$_SESSION['success']."</span>".
                "<h5 style='text-align:center;'>Welcome to Our Website :"
                .$_SESSION["user_name"]."<br>
                <a href=\"?logout=$name\">Log Out</a></h5>
                <img src='img1.jpg' width='100%' height='100%'>";
            }else{
                echo "<div class='container'>
                        <div class='card'>
                            <div class='card-body'>
                            <p> Welcome  Guest You Need To <span style='color:red'>Login</span> First to Our Website</p>
                            <a href='login.php' class='btn btn-success'>Log In</a>
                            </div>
                        </div>
                    </div>"; 
            }
            
        ?>
    </body>
</html>