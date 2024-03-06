<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action{

    public function editAction() {
        $this->linkActionProceed();
    }
    public function removeAction(){
        $this->removeActionProceed(); 
    }
    
    public function postdataAction() {  
        $this->postdataActionProceed();
     }
     public function addAction() {
        echo "<pre>";
        $request = $this->getRequest()->getParams('cart');
        // print_r($request);
        // $request = ['product_id'=>50,'qty'=>5];
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);
            // var_dump($quote);
            $quote = Mage::getSingleton('sales/quote_item')->getCollection()
            ->addFieldToFilter('product_id', $request['product_id'])
            ->addFieldToFilter('quote_id', Mage::getSingleton('sales/quote')->getId())
            ->getFirstItem();
            $quote = Mage::getSingleton('sales/quote_item')->getCollection()
            ->addFieldToFilter('item_id', $quote->getItemId())
            ->addFieldToFilter('quote_id',$quote->getQuoteId())
            ->getFirstItem();
            // print_r($quote);
            $val= $quote->getData();
            $val['qty'] = $request['qty'];
           if($val['quote_id']){
            $obj = Mage::getSingleton('sales/quote_item')->setData($val);
            $res = $obj->save();
            if($res){
                echo '<script>alert("Data updated successfully")</script>';
            }
           }
        // echo get_class($quote   );
    }
     public function deleteAction() {
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton('sales/quote_item')->getCollection()
        ->addFieldToFilter('product_id', $request['product_id'])
        ->getFirstItem();
        if($quote){
        $quote = Mage::getSingleton('sales/quote_item')->getCollection()
        ->addFieldToFilter('item_id', $quote->getItemId())
        ->addFieldToFilter('quote_id',$quote->getQuoteId())
        ->getFirstItem();
        
            $result = $quote->delete();
            if($result){   
                echo '<script>alert("Data Deleted successfully")</script>';
             }
        }else{
            echo '<script>alert("Nothing To Delete")</script>';
        }
       
        
    }
}
