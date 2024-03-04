<?php

class Catalog_Model_Category extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Catalog_Model_Resource_Category';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Category';
        // $this->_modelClass = 'catalog/category';
    }

    public function getCategoryIdName()
    {
        $categoryCollection = $this->getCollection();
        $categorys = [];
        foreach ($categoryCollection->getData() as $category) {
            $categoryId = $category->getCategoryId();
            $categoryName = $category->getCategoryName();
            if ($categoryId !== null && $categoryName !== null) {
                $categorys[$categoryId] = $categoryName;
            }
        }
        return $categorys;
    }

    public function getCategoryNameById($mapping, $product)
    {
        $productData = $product->getData();
        if (isset($productData['category_id']) && isset($mapping[$productData['category_id']])) {
            return $mapping[$productData['category_id']];
        }
        return null; // or handle the case where category_id doesn't exist or mapping is not set
    }
    public function getStatus(){
        $mapping = [
            1=>"E",
            0=>"D"
        ];
        if(isset($this->_data["status"])){
            return $mapping[$this->_data['status']];
        }
    }
}

?>
