<?php
    class Catalog_Block_Admin_Category_Form extends Core_Block_Template
    {
        public function getCategory() {
            return Mage::getModel('catalog/category')
                ->load($this->getRequest()->getParams('id',0));
        }

    }
?>