<?php

class Core_Controller_Front
{
    public function init()
    {
        $request = new Core_Model_Request();
        $actionName = $request->getActionName()."Action";
        $controllerName = $request->getfullControllerName();
        $controllerObject = new $controllerName();
        $controllerObject->$actionName();
    }
}

?>