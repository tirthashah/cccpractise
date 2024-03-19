<?php

class Sales_Model_Quote_Item extends Core_Model_Abstract
{
    protected $item = null;

    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Item';
        // $this->_modelClass = 'sales/quote_item';
    }

    public function getProduct()
    {
        if(is_null($this->item)){
           $this->item = Mage::getModel('catalog/product')->load($this->getProductId());
        }
        return $this->item;
    }

    protected function _beforeSave()
    {
        if ($this->getProductId()) {
            // print_r($this->getQty());
            $price = $this->getProduct()->getPrice();
            $this->addData('price', $price);
            $this->addData('row_total', $price * $this->getQty());
        } else {
        }
    }

    public function addItem(Sales_Model_Quote $quote, $request)
    {
        if (!array_key_exists('item_id', $request)) {
            $item = $this->getCollection()
                ->addFieldToFilter('product_id', $request['product_id'])
                ->addFieldToFilter('quote_id', $quote->getId())
                ->getFirstItem()
            ;

            if ($item) {
                $request['qty'] = $request['qty'] + $item->getQty();

            }

            $this->setData(
                [
                    'quote_id' => $quote->getId(),
                    'product_id' => $request['product_id'],
                    'qty' => $request['qty'],
                    'customer_id'=>(Mage::getSingleton('core/session')->get('logged_in_customer_id'))
                ]
            );//dataset for sales_quote_item 

        } else {
            print_r(Mage::getSingleton('core/session')->get('logged_in_customer_id'));
            $item = $this->getCollection()
                ->addFieldToFilter('quote_id', $quote->getId())
                ->addFieldToFilter('item_id', $request['item_id'])
                ->addFieldToFilter('product_id', $request['product_id'])
                ->getFirstItem();
            // if ($item) {
            //     $qty = $request['qty'];
            //     // print_r($qty);
            // }
            $this->setData([
                'item_id' => $request['item_id'],
                'product_id' => $request['product_id'],
                'quote_id' => $quote->getId(),
                'qty' => $request['qty'],
                'customer_id'=>(Mage::getSingleton('core/session')->get('logged_in_customer_id'))
            ]);

        }

        if ($item) {
            $this->setId($item->getId());
        }
        $this->save();

        return $this;


    }

    // public function editItem(Sales_Model_Quote $quote, $request)
    // {
    //     $item = $this->getCollection()
    //         ->addFieldToFilter('quote_id', $quote->getId())
    //         ->addFieldToFilter('item_id', $request['item_id'])
    //         ->addFieldToFilter('product_id', $request['product_id'])
    //         ->getFirstItem();
    //     if ($item) {
    //         $qty = $request['qty'];
    //     }
    //     $item->setData([
    //         'item_id' => $request['item_id'],
    //         'product_id' => $request['product_id'],
    //         'quote_id' => $quote->getId(),
    //         'qty' => $qty
    //     ]);

    //     if ($item) {
    //         $this->setId($item->getId());
    //     }
    //     // var_dump($item->_data());
    //     $this->save();
    //     return $this;
    // }


    public function removeItem($quoteId,$itemId)
    {
        $item = $this->getCollection()
        ->addFieldToFilter('quote_id', $quoteId)
        ->addFieldToFilter('item_id', $itemId)
        ->getFirstItem();

        if ($item) {
            $this->setId($item->getId());
        }
        $this->delete();

        return $this;
    }
    // public function removeItem(Sales_Model_Quote $quote, $itemId)
    // {
    //     $item = $this->getCollection()
    //         ->addFieldToFilter('quote_id', $quote->getId())
    //         ->addFieldToFilter('item_id', $itemId)
    //         ->getFirstItem()
    //         ->delete();
    //     return $this;
    // }
}