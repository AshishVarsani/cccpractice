<?php
class Product_Model_Resourse_Collection_Product extends Core_Model_Abstract{
    protected $_tableName,$_primaryKey;
    public function init(){
        $this ->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }
    public function __construct(){
        $this->init('ccc_product','product_id');
    }
}