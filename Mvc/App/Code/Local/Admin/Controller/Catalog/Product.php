<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function includefile($newfile)
    {
        $newfile->addCss("product/productForm.css");
    }
    public function formAction()
    {
        $layout = $this->getLayout();
        $newfile =  $layout->getChild("head");
        $this->includefile($newfile);
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('Catalog/admin_product_form');
        $productForm->setTemplate('catalog/admin/product/form.phtml');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }       
    public function saveAction()
    {
        $data = $this->getRequest()->getparams("Catalog_product");
        $product = Mage::getModel("Catalog/product")
            ->setData($data);
        $product->save();
    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getparams("id");
        $product = Mage::getModel("Catalog/product");
        $product->delete($id);
    }
    public function listAction(){
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}
