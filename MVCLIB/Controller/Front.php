<?php

class Controller_Front{
public function init(
    
){
    $request=new Model_Request();
        $uri=$request->getRequestUri();
        $className='View'.rtrim((str_replace('/','_',$uri)));
        echo $className;
        $layout = new $className();
     echo   $layout->tohtml();

}
 
} 






?>