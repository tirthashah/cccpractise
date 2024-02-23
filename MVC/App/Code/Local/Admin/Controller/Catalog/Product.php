<?php


class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function setFormCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product.css');
            // print_r($layout->getChild('head')->getCss());
    }

    public function formAction()
    {
        $layout = $this->getLayout();
        $this->setFormCss();
        $child = $layout->getChild('content'); //object j return krse content no layout ma create block ma ena class no objec t malse
        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }


    public function saveAction()
    {
        echo "<pre>";
        $obj = Mage::getModel('core/request');
        $id = $obj->getQueryData('id'); // id return krse kato id nai pass kri hoy toh blank return krse
        
        
            $data = $this->getRequest()->getparams("catalog_product"); //array return krse
        
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();


    }

    public function deleteAction()
    {
        Mage::getModel('catalog/product')->load('product_id')
            ->setId($this->getRequest()->getParams('id'))
            ->delete();
    }
   

    public function listAction(){
        $layout = $this->getLayout();
        $child = $layout->getchild('content');
        $productForm= $layout->createBlock('catalog/admin_product_list');
        $child->addchild('list',$productForm);
        $layout->toHtml();
        
    }
    










    // public function saveAction()   // init mathi ahiya ayaa apde
    // {
    //     echo "<pre>";
    //     $data = $this->getRequest()->getParams('catalog_product'); //core_model_request
    //     $product = Mage::getModel('catalog/product') //catalog_model_product no object 
    //         ->setData($data);  
    //     $product->save();
   
    // }
}










    