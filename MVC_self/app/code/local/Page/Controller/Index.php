<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout()->toHtml();
        //$layout = $this->getLayout();
        $layout->getChild("head")->addJs("js/page.js");
        $layout->getChild("head")->addJs("js/page.js");
        $layout->getChild("head")->addCss("css/page.css");
        $layout->getChild("head")->addcss("css/page.css");
        print_r($layout);
    }
}