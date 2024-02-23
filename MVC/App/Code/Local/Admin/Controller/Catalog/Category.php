<?php
class Admin_Controller_Catalog_Category  extends Core_Controller_Front_Action {


    public function setFormCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('category.css');
            // print_r($layout->getChild('head')->getCss());

    }
 public function formAction()
    {
        $layout = $this->getLayout();
        $this->setFormCss();
        $child = $layout->getChild('content'); //object j return krse content no layout ma create block ma ena class no objec t malse
        $productForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }


    public function saveAction()
    {

        echo "<pre>";
        $obj = Mage::getModel('core/request');
        $id = $obj->getQueryData('id'); // id return krse kato id nai pass kri hoy toh blank return krse

        if ($id) {
            $data = ['category_name' => 'BMW'];
        } else {
            $data = $this->getRequest()->getParams('catalog_category'); //je data ma nakhyu ae ae apse
            print_r($data);
        }
        $product = Mage::getModel('catalog/category')
            ->setData($data);
        $product->save();


    }
    public function deleteAction()
    {
       

      $product= Mage::getModel('catalog/category');
           $id= $this->getRequest()->getParams(); //req ni ader param che
             $product->delete($this);
             
    }

}

?>