<?php
class Model_Product extends Model_Abstract
{
    public $tableName = "ccc_product";

    public function __construct()
    {
        // echo "I'm here";
        // echo get_class($this);
    }

    public function save($data)
    {
        echo "<pre>";
        $sql = $this->getQueryBuilder()
            ->insert(
                $this->tableName,
                $data
            );
         $this->getQueryBuilder()->exec($sql);
        // echo $sql;
        // print_r($data);
    }
}
