<?php
class Core_Block_Template extends Core_Block_Abstract
{
    public $template;
    protected $_child = [];
    public function toHtml()
    {
        $this->render();
    }
    public function addChild($key, $value)
    {
        $this->_child[$key] = $value; 
        return $this;
    }
    public function removeChild($key)
    {
    }
    public function getChild($key)
    
    {
    
                return $this->_child[$key];  //header no object mali jase 
    }    

    public function getChildHtml($key) //tohtml ne direct call kri sakay rander vadi file  return thai jase
    {
        $html="";
        if($key=="" && count($this->_child)){
            foreach ($this->_child as $_child) {
                $html .= $_child->toHtml();
            }
        }
        else{
           $html=$this->getChild($key)->toHtml();
        }
        return $html;
    }
    // public function setTemplate($template) 
    // {
    //     $this->template = $template;
    //     return $this;
    // } 
    // public function getTemplate()
    // {
    //     return $this->template;
    // }
    public function getRequest()
    {
        return Mage::getModel('core/request');
    }

}