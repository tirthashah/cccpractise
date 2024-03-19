<?php
class Cart_Controller_Checkout extends Core_Controller_Front_Action{

    public function CheckoutAction() {
        $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        if(!$quoteId){
            $this->checkDataAndRedirect(['catalog/product/view'=>$quoteId]);
        }else{
            $this->setFormCss("checkout");
            $this->setJs('jquery-3.7.1');
            $layout = $this->getLayout();
            $child = $layout->getChild("content");
            $checkout = $layout->createBlock("cart/checkout")->setTemplate("customer/checkout.phtml");
            $child->addChild('form',$checkout);
            $layout->toHtml();
        }

        
        }
  
}
?>