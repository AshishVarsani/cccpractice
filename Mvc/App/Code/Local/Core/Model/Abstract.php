<?php

class Core_Model_Abstract
{
    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    public function __construct()
    {
        $this->init();
    }
    // public function init(){

    // }
    public function setResourceClass($resourceClass)
    {
    }
    public function setCollectionClass($collectionClass)
    {
    }
    public function setId($id)
    {
    }
    public function getId()
    {
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    public function getResource()
    {
        // $modelClass = get_class($this);
        // $modelClass = str_replace('_Model_', '_Model_Resource_', $modelClass);        
        return new $this->_resourceClass();
    }
    public function getCollection()
    {
        return new $this->_collectionClass();
    }
    public function getTableName()
    {
    }
    public function __set($key, $value)
    {
    }
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }
    public function __call($method, $args)
    {
        $name = $this->camelCase2UnderScore(substr($method, 3));
        return isset($this->_data[$name]) 
            ? $this->_data[$name] 
            : '';
    }
    public function __get($key)
    {
    }
    public function __unset($key)
    {
    }
    public function getData($key = null)
    {
    }
    public function setData($data)
    {
    }
    public function addData($key, $value)
    {
    }
    public function removeData($key = null)
    {
    }
    public function save()
    {
    }
    public function load($id, $column = null)
    {
        $this->_data = $this->getResource()->load($id, $column);
        return $this;
    }
    public function delete()
    {
    }
}
