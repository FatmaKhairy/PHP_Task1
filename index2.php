<html>
    <head><title>PHP-Task 2 </title></head>
    <body>
        <h1 style='color:Tomato;text-align:center'>PHP Task 2 3/1/22</h1>
        <?php
           echo "<pre>";
           echo "<h3>***********************Q1*************************</h3>\n <span style=color:red>\\n</span> work for linux
    but in windows can use \\r\\n also can use 'nl2br()'";
           echo"<h3>************************Q2*************************</h3>";
           $str = "FirstStringBuiltFun\n\n";
           echo chunk_split($str,1,"  ");
           print_r(str_split("SecendFun"));
           echo"\n". md5('thirdFun');
           echo"<h3>************************Q3*************************\n</h3>";
           print_r($_SERVER);
           echo"<h3>************************Q4*************************</h3>";
           $numbers=[12,45,10,25];
           foreach($numbers as $number){
               $sum +=$number;
           }
           $avg=$sum/count($numbers);
           echo "SUM : $sum \n";
           echo "AVG : $avg \n\n";
           rsort($numbers);
           print_r($numbers);
          ;
          echo"<h3>************************Q5*************************</h3>";
          $names=array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");

          asort($names);
          echo "<h4>NO.A ascending order sort by value : </h4>\n";
          foreach($names as $key=>$value){
           echo " $key => $value \n";
          }
          ksort($names);
          echo "<h4>NO.B ascending order sort by Key : </h4>\n";
          foreach($names as $key=>$value){
           echo " $key => $value \n";
          }
          arsort($names);
          echo "<h4>NO.C descending order sorting by Value : </h4>\n";
          foreach($names as $key=>$value){
           echo " $key => $value \n";
          }
          krsort($names);
          echo "<h4>NO.D descending order sorting by Key : </h4>\n";
          foreach($names as $key=>$value){
           echo " $key => $value \n";
          }
           echo "</pre>";
        ?>
    </body>
</html>
