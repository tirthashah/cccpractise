<?php
class Calculator_Controller_Index extends Core_Controller_Admin_Action{

    public function formAction(){
        $this->setFormCss("form");
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('calculator/form');//constructor
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }


      public function listAction(){
        $this->setFormCss("form");
        $layout = $this->getLayout();
        $child = $layout->getchild('content'); //core_block_layout
        $productForm = $layout->createBlock('Calculator/list');
        $child->addChild('list',$productForm);
        $layout->toHtml();

    }
             

    public function saveAction(){
        $data = $this->getRequest()->getPostData('brand');
        // $layout= $this->getLayout();
        $brand = Mage::getModel('brand/brand')->setData($data);
        $result = $brand->save();
        if($result){
            echo "<script>alert('insertion successfully')</script>";
            $this->setRedirect("brand/index/list");
        }else{

        }

    }

    public function deleteAction(){
        $id = $this->getRequest()->getParams('id');
        $result = Mage::getModel('brand/brand')->load($id)->delete();
        if($result){
            echo "<script>alert('insertion successfully')</script>";
            $this->setRedirect("brand/index/list");
        }
    }

}
?>
}
?>