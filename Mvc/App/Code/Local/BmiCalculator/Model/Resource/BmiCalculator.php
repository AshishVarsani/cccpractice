<?php 

Class BmiCalculator_Model_Resource_BmiCalculator extends Core_Model_Resource_Abstract
{
    public function __construct()
    {
        $this->init();
    }   
    public function init()
    {
        $this->_tableName = "ccc_bmi_calculator";
        $this->_primaryKey = "id";
    }
}

?>