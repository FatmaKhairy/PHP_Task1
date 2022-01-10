<html>
    <head>
        <title>Connect to DB</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
           require 'DBinfo.php';
           $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
           if(!$conn){
               echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
               exit;
           }
           //select string
           $sql="select * from users";
           //select db
           mysqli_select_db($conn,$dbname);
           //do selection return values
           $result= mysqli_query($conn,$sql);
           if(!$result){
               echo "Filed selection".mysqli_error($conn);
           }
           
           
       ?>
     
       
       <div class="container">
            <h2>Task NO.4 PHP_connectDB 9/1/22</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Receive E-mail</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(mysqli_num_rows($result)>=0){
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<pre>";
                                echo "<tr>
                                        <th scope='row'>{$row['user_id']}</th>
                                        <td>{$row['name']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['gender']}</td>
                                        <td>{$row['receive']}</td>
                                        <td>
                                        <button class='btn btn-sm'><a href=\"show.php?user_id={$row['user_id']}\"><i class='fa fa-eye'></i></a></button>
                                        <button class='btn btn-sm'><a href=\"update.php?user_id={$row['user_id']}\"><i class='fa fa-edit'></i></a></button>
                                        <button class='btn btn-sm'><a href=\"delete.php?user_id={$row['user_id']}\"><i class='fa fa-trash'></i></a></button>
                                        </td>
                                </tr>";
                                echo "</pre>";
                                
                            }
                        }
                    mysqli_close($conn);
                    ?>
                   
                </tbody>
            </table>
            <a type="button" class="btn btn-info" href="create.php">Add New User</a>
        </div>
       <script src="../js/jquery.min.js"></script>
       <script src="../js/popper.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
    </body>
</html>