<?php

class Core_Block_Template extends Core_Block_Abstract
{
    protected $template;
    protected $_child = [];
    public function toHtml()
    {
        $this->render();    
    }

    public function addChild($key, $value)
    {
        $this->_child[$key] = $value;
    }

    public function removeChild($key)
    {

    }

    public function getChild($key)
    {
        return $this->_child[$key];
    }
    public function getChildHtml($key)
    {
        return $this->getChild($key)->toHtml();
    }

    public function getTemplate()
    {
        return $this->template;
    }
    public function setTemplate($template)
    {
        $this->template = $template;
    }
}


?>