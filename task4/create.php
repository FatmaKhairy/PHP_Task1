<html>
    <head>
        <title>Add </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style4.css">
    </head>
    <body>
        <?php
           
     
           /*
                * 
                *  //2-sql file WORK ONLY WITH ONE STATMENT
                    *$sql_file="sql.txt";
                *  //3-open file
                    *$opFile=fopen($sql_file,'r');
                *  //4-read from file 
                    *$sql=fread($opFile,filesize($sql_file));
                *   //select DB
                    *mysqli_select_db($conn,$dbname);
                *   //do query
                    *$retval = mysqli_query($conn,$sql);
                    *if(! $retval ) {
                    *die('Could not create table: ' . mysqli_error($conn));
                *}
            */
           // $sql_insert="INSERT INTO users VALUES ('$name','$email','$gender','$receive')";
            

      

        ?>
       <div class="container">
            <h2 style='color:#198754;text-align:center'>ADD New User</h2>
            <form method="post" action="insert.php">
                <div class="form-group">
                    <label for="inputEmail3" class="my-1 mr-2">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2">E-Mail</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name= "email"  placeholder="E-Mail">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                         <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    </div>
                    <div class="col-sm-10">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="gender" id="customControlValidation2" value="female" required>
                            <label class="custom-control-label" for="customControlValidation2">Female</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" name="gender" id="customControlValidation3" value="male" required>
                            <label class="custom-control-label" for="customControlValidation3">Male</label>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input"  type="checkbox" name="receive" id="sendMail">
                            <label class="form-check-label" for="sendMail">
                            Receive E-Mails From US.
                            </label>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-success" value="submit" name="submit">ADD User</button>
                    <a  class="btn btn-primary" href="index.php">Cancel</a>
                    </div>
                </div>
            </form>
       </div>
        <script src="../js/jquery.min.js"></script>
       <script src="../js/popper.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
    </body>
</html>


