<?php

class Core_Block_Template extends Core_Block_Abstract
{
    public $template;
    protected $_child = []; 
    public function toHtml(){
        $this->render();
    }
    public function addChild($key, $value){
        $this->_child[$key] = $value; //header block no object che
    }
    public function removeChild($key){

    }
    public function getChild($key){
        return $this->_child[$key];
    }
    public function setTemplate($template){
        $this->template = $template;
    }
    public function getTemplate(){
    return $this->template;
    }
    public function getChildHtml($key)
    {
        return $this->getChild($key)->toHtml();
    }
}
?>