<?php

class Core_Controller_Front{
    public function init(){
        $requestModel = new Core_Model_Request();
        // echo $requestModel->getModuleName();
        // echo $requestModel->getControllerName();
        $actionName = $requestModel->getActionName();

        $className = $requestModel->getFullControllerClass();
        $Layout = new $className();
        $Layout->$actionName();
    }
}