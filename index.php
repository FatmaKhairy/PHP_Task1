<?php
echo "<h2 style='color:DodgerBlue;text-align:center'>Task NO.1 PHP 1/1/22</h2>";
define('TITLE','PhpCourseLap1');
define('FIlEN',basename(__FILE__));

echo "<pre>";
echo "<H3 style='color:Tomato;'>FOR</H3>";
$a = 0;$b = 0;
for( $i = 0; $i<5; $i++ ) {
   $a += 10; //$a=$a+10
   $b += 5;
}
echo "Value of A = $a  BUT Value of B = $b";
echo "<H3 style='color:DodgerBlue;'>While</H3>";
$i = 0;$num = 50;
while( $i < 10) {
   $num--;
   $i++;
}
echo ("Loop stopped at i = $i and num = $num" );
echo "<H3 style='color:MediumSeaGreen;'>DO While</H3>";
$i = 0;$num = 0;
do{
    $i++;
}while( $i < 10 );
   echo ("Loop stopped at i = $i" ); 
echo "<H3 style='color:Violet;'>Foreach</H3>"; 
$array = array( 1, 2, 3, 4, 5);           
   foreach( $array as $value ) {
      echo "Value is $value <br />";
   }  
echo "<hr><H3 style='color:Tomato;'>Switch</H3>";
$age = 10;  
switch ($age) {
    case ($age < 5):
       echo "Stay at home";
       break;
    case ($age == 5):
        echo "Go to Kindergarden";
        break;
    case ($age>6 or $age<12):
        echo "Go to grade :XXX <hr>";
        break; 
    default:
        echo 'Go to bed';
  }

class car{
    public $x="";
    function car(){
        return $this->x="X => 5";
    }
    function xcar(){
       echo $this->x="<br>X => 10";
    }
}    
$mod=new car();
echo $mod->car();//$mod->car() only not work
$mod->xcar(); //$mod->xcar() == echo $mod->xcar()
echo "</pre>";  
?>
<html>
    <head><title><?php echo TITLE;?></title></head>
    <body>
        <hr>
        <p><?php echo 'Server Name -> '.$_SERVER['HTTP_HOST'];?></p>
        <p><?php echo 'User IP -> '.$_SERVER['REMOTE_ADDR'];?></p>
        <p><?php echo 'Port -> '.$_SERVER['REMOTE_PORT'];?></p>
        <p><?php echo 'File Name -> '. FIlEN ;?></p>
        <p><?php echo 'File PATH -> '.realpath(FIlEN);?></p>
    </body>
</html>
<?php
echo "<hr>";
/**
 * error_reporting(E_ALL);
 *ini_set('display_errors', 1);
 *car();
 */

?>