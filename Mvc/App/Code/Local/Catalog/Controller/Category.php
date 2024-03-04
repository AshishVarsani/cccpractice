<?php 

class Catalog_Controller_Category extends Core_Controller_Front_Action {
    public function includefile($newfile)
    {
        $newfile->addCss("category/form.css");
        $newfile->addCss("category/list.css");
    }
    public function viewAction()
    {
        $layout = $this->getLayout();
        $newfile =  $layout->getChild("head");
        $this->includefile($newfile);
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productForm);
        $layout->toHtml();
    }
}

?>