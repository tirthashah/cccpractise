<?php


class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function setFormCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('form.css');
            // print_r($layout->getChild('head')->getCss());
    }

    public function formAction()
    {
        $layout = $this->getLayout();
        $this->setFormCss();
      
        $child = $layout->getChild('content'); //object j return krse content no layout ma create block ma ena class no objec t malse
        $productForm = $layout->createBlock('catalog/admin_product');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }


    public function saveAction()
    {
        echo "<pre>";
        $obj = Mage::getModel('core/request');
        $id = $obj->getQueryData('id'); // id return krse kato id nai pass kri hoy toh blank return krse

        if ($id) {
            $data = ['name' => 'BMW'];
        } else {
            $data = $this->getRequest()->getParams('catalog_product'); //je data ma nakhyu ae ae apse
        }
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();


    }
    public function deleteAction()
    {
       

      $product= Mage::getModel('catalog/product');
           $id= $this->getRequest()->getParams('id'); //req ni ader param che
             $product->delete($id);
             
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










    