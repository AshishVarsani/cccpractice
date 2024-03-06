<?php 

class BmiCalculator_Model_BmiCalculator extends Core_Model_Abstract 
{

    public function init()
    {
        $this->_resourceClass = "BmiCalculator_Model_Resource_BmiCalculator";
        $this->_collectionClass = "BmiCalculator_Model_Resource_Collection_BmiCalculator";
        $this->_modelClass = "BmiCalculator/BmiCalculator";
    }

    public function getStatus() {
        $mapping = [1=>'Enable',0=>'Disable'];
        if(isset($this->_data['status'])){
            return $mapping[$this->_data['status']];

        }
    }
   



}







?>