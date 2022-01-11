<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style5.css">
    </head>
    <body>
        <div class="container">
        <?php
            session_start();
            $do='';$user_name='';$pass='';
            if(isset($_POST['submit'])){

                $user_name=$_POST['user_name'];
                $pass=$_POST['password1'];
                require 'DBinfo.php';
                mysqli_select_db($conn,$dbname);
                $sql="SELECT user_name FROM login WHERE user_name='$user_name' and password='$pass'";
                $result= mysqli_query($conn,$sql);
                if(!$result){
                    echo "Filed selection".mysqli_error($conn);
                }
                 else{
                     if(empty(mysqli_num_rows($result))){
                        echo "<span>can not found you are you sure you have an account ?</span>";
                       $user_name="";$pass="";
                   }
                    if(mysqli_num_rows($result)>0){
                        //$do="index.php";
                        $_SESSION['user_name']=$user_name;
                        $_SESSION['success']='You Are Login Now';
                        header('Location: '."index.php");
                 }
                }
               
                
            }
           
        ?>
       
            <h2>Log In</h2>
            <p>Please fill this to login your account</p>
            <form method="post" action="<?php echo $do;?>">
                <div class="form-group">
                    <label for="inputEmail3" class="my-1 mr-2">Username</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name;?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="password1" value="<?php echo $pass;?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"name="submit">submit</button>
                   
                    </div>
                </div>
            </form>
            <p>Do not have an account ? <a  href="signup.php">Sign Up</a></p>
            
       </div>
        <script src="../js/jquery.min.js"></script>
       <script src="../js/popper.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
    </body>
</html>


