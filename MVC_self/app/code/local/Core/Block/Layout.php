<?php 

class Core_Block_Layout extends Core_Block_Template
 {
    public function __construct(){
        $this->setTemplate('core/1column.phtml');
        // return $this;
        $this->prepareChildren();
    }
    public function prepareChildren(){
  
        $header =$this->createBlock("Page/header");
        $this->addChild("header",$header);
        $footer = $this->createBlock("Page/footer");
        $this->addChild("footer",$footer);
        $content = $this->createBlock("Page/content");
        $this->addChild("content",$content);
        $head = $this->createBlock("page/head");
        $this->addChild("head",$head);
        $message = $this->createBlock("page/msgs");
        $message->$this->setTemplate("Core/message");
        $this->addChild("head",$head);
    
    }
    public function createBlock($className){
        //Mage::getBlock("page/header");
       return  Mage::getBlock($className);
    }

    // public function getRequest(){
    //     return Mage::getModel('core/request');
    // }
       
}

?>