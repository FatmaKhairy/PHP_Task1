<?php session_start();?>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style5.css">
    </head>
    <body>
        <?php
            $do="";$user_name='';$pass='';$conPass='';
            if(isset($_POST['submit'])){
                $user_name=$_POST['user_name'];
                $pass=$_POST['password1'];
                $conPass=$_POST['password2'];

                require 'DBinfo.php';
                mysqli_select_db($conn,$dbname);
                $sql="SELECT user_name FROM login WHERE user_name='$user_name'";
                $result= mysqli_query($conn,$sql);
                if(!$result){
                    echo "Filed selection".mysqli_error($conn);
                }
                if(mysqli_num_rows($result)>0){
                    echo "<span>Sorry We have another user with same name</span><br>";
                }
                if(empty(mysqli_num_rows($result))){
                    if($pass !== $conPass ){
                        echo '<span>password should be same</span>';
                    }
                    else{
                        $_SESSION["user_name"]=$user_name;
                        $_SESSION["password"]=$pass;
                        header('Location: '."insert.php");
                    }
                  
                }
                
                mysqli_close($conn);
                
            }
        ?>
       <div class="container">
            <h2>Sign UP</h2>
            <p>Please fill this form to create an account</p>
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
                    <label class="my-1 mr-2">Confirm Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name= "password2" value="<?php echo $conPass;?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-success"name="submit">submit</button>
                    </div>
                </div>
            </form>
            <p>Already have an account ? <a href="login.php">Log In</a> </p>
            
       </div>
        <script src="../js/jquery.min.js"></script>
       <script src="../js/popper.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
    </body>
</html>


