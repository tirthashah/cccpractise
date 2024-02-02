<?php
//  require"classauto/first.php";
//  require"classauto/second.php";

  function __autoload($class){
    require"classauto/". $class .".php";

  }
 $test = new first();
 echo"<br>";
 $test1 = new second();


 echo"<br>";
 
 //autoload jeni file no path autoload ma automatically dynamically add krvano ane autoload ae tya thi j file ne call karavse
//file nd class mame similar j rakhvana



?>
