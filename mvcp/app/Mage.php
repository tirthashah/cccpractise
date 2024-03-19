<?php
  class Mage{

    private static $baseUrl = "http://localhost/cybercom/mvcp";

   private static $baseDir = 'C:/xampp/htdocs/cybercom/mvcp';

    public static function init(){
        $controllerObj = new Core_Controller_Front();
        

        $controllerObj->init();
       
    }


  public  static function getModel($className){
    $classNameObj = ucwords(str_replace("/","_Model_",$className), "_");
    return new $classNameObj();
  }

  public  static function getBlock($className){
    $classNameObj = ucwords(str_replace("/","_Block_",$className), "_");
    return new $classNameObj();
  }
  public static function getBaseDir($subDir = null)
  {
     if ($subDir) {
        return self::$baseDir . "/" . $subDir;
     }

     return self::$baseDir;
  }
  public static function getBaseUrl($subUrl = null)
  {
     if ($subUrl) {

        return self::$baseUrl . '/' . $subUrl;
     }
     return self::$baseUrl.'/';
  }


  }
?>