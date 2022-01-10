<html>
    <head>
        <title>Edit User</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style4.css">
    </head>
    <body>
        <?php
         require 'DBinfo.php';
         $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
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
                
        ?>
       <div class="container">
            <h4 style='color:#777;text-align:center'>U Need To Update UR Data ?</h4>
            <form method="post" action="edit.php?user_id=<?php echo $row['user_id']?>">
                <div class="form-group">
                    <label for="inputEmail3" class="my-1 mr-2">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value ="<?php echo $row['name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2">E-Mail</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name= "email"  value="<?php echo $row['email']?>">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                         <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    </div>
                    <div class="col-sm-10">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="gender" value="female" 
                               <?php if($row['gender'] == 'female') echo 'checked';?> > 
                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" name="gender" value="male"  <?php if($row['gender'] == 'male') echo 'checked';?>>
                            <label class="custom-control-label" for="customControlValidation3">Male</label>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input"  type="checkbox" name="receive" 
                            <?php if($row['receive'] == 'yes'){echo 'checked';}?> id="sendMail">
                            <label class="form-check-label" for="sendMail">
                            Receive E-Mails From US.
                            </label>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-warning" value="submit" name="submit">Edit User</button>
                    <a  class="btn btn-secondary" href="index.php">Cancel</a>
                    </div>
                </div>
            </form>
            <?php }}}?>
       </div>
        <script src="../js/jquery.min.js"></script>
       <script src="../js/popper.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
    </body>
</html>




























