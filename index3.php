<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <h1 style='text-align:center'>Task NO.3 PHP_Form 7/1/22</h1>
        <?php
            if(isset($_POST['click']))
            {
                if (empty($_REQUEST['name'])) {
                    $nameErr = "Name is required";
                } else {
                    $name = $_REQUEST["name"];
                }
                if (empty($_REQUEST['email'])) {
                    $emailErr = "Email is required";
                } else {
                    $email = $_REQUEST["email"];
                }
                if (empty($_REQUEST['gender'])) {
                    $genderErr = "Gender is required";
                } else {
                    $gender = $_REQUEST["gender"];
                }
                if (empty($_REQUEST['agree'])) {
                    $agreeErr = "this filed is required";
                } else {
                    $agree = $_REQUEST["agree"];
                }
                $courses = $_REQUEST["courses"];
                $group = $_REQUEST["group"];
                $details = $_REQUEST["details"];
            
            }
        ?>
        <h3 style='color:DodgerBlue;'>Aplication Name : AAST_BIS Calss registration</h3>
        <form action="<?php $_PHP_SELF?>" method="post">
            <table>
                <tr>
                    <td>
                        <label> Name : </label>
                        </td>
                     <td>
                        <input type="text" name="name" value="<?php echo $name?>">
                        <span class="error">* <?php echo  $nameErr;?></span>
                        </td>
                </tr>
                <tr>
                    <td>
                        <label> Email : </label>
                    </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $email?>">
                        <span class="error">* <?php echo $emailErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Group # : </label>
                        </td>
                    <td>
                        <input type="text" name="group" value="<?php echo $group?>"> 
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Class details :</label>
                    </td>
                    <td>
                        <textarea rows="4" cols="40" name="details" wrap="hard" 
                        class="textarea"><?php echo $details?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender :</label>
                    </td>
                    <td>
                        <input type="radio"  name="gender" value="Female"> Female
                        <input type="radio"  name="gender" value="Male"> Male
                        <span class="error">* <?php echo $genderErr;?></span>
                    </td>    
                </tr>
                <tr>
                    <td>
                       <label>Select Courses :</label>
                    </td>
                    <td>
                        <select name="courses[]" multiple>
                            <option value="php">PHP</option>
                            <option value="js">JavaScript</option>
                            <option value="css">CSS</option>
                            <option value="html">HTML</option>
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Agree</label>
                    </td>
                    <td>
                        <input type="checkbox" name="agree">
                        <span class="error">* <?php echo $agreeErr;?></span>
                    </td>
                </tr>
            </table> 
            <input type="submit"  name="click" value="submit" class="btn btn-primary">
       </form>
       <?php
        if ($_POST['click'] == "submit"){
            echo '<p>Name    : '.$name ."</p>";
            echo '<p>Email   : '.$email."</p>";
            echo '<p>Group # : '.$group."</p>";
            echo '<p>Class details  :'. $details."</p>";
            echo '<p>Gender  : '.$gender."</p>";
            print_r('<p>Courses : '.implode(" - ",$courses)."</p>");
        }
       ?>
        <script src="js/jquery.min.js"></script>
       <script src="js/popper.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>


