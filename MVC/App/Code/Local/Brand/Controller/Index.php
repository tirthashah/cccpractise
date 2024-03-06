<?php
class Brand_Controller_Index extends Core_Controller_Front_Action{
    public function FormAction(){
        $this->setFormCss("form");
        $layout = $this->getLayout();
        $child = $layout->getchild('content'); //core_block_layout
        $productForm = $layout->createBlock('calculator/form');
        $child->addChild('form',$productForm);
        $layout->toHtml();

    }
      public function listAction(){
        $this->setFormCss("form");
        $layout = $this->getLayout();
        $child = $layout->getchild('content'); //core_block_layout
        $productForm = $layout->createBlock('calculator/list');
        $child->addChild('list',$productForm);
        $layout->toHtml();

    }
             

    public function saveAction(){
        $data = $this->getRequest()->getPostData('calculator');
        // $layout= $this->getLayout();
        $calculator = Mage::getModel('brand/brand')->setData($data);
        $result = $calculator->save();
        if($result){
            echo "<script>alert('insertion successfully')</script>";
            
        }else{

        }

    }

    public function deleteAction(){
        $id = $this->getRequest()->getParams('id');
        $result = Mage::getModel('calculator/calculaor')->load($id)->delete();
        if($result){
            echo "<script>alert('insertion successfully')</script>";
           
        }
    }

}
?>