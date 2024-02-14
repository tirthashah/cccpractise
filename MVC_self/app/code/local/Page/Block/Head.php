<?php

class Page_Block_Head extends Core_Block_Template
{
    protected $_css=[];
    protected $_js=[];
    public function __construct()
    {
        $this->setTemplate("page/Head.phtml");
    }
    public function addJs($file)
    {
        $this->_js[]=$file;
    }
    public function getJs()
    {
        return $this->_js;
    }
    public function addCss($file)
    {
        $this->_css[]=$file;
    }
    public function getCss()
    {
        return $this->_css;
    }
    // public function getScript($file)
    // {
    //     return "<script></script>";
    // }
}

?>