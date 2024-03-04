<?php 
class Admin_Controller_Index extends Core_Controller_Admin_Action{
    public function indexAction() {
        $layout = $this->getLayout();
        $layout->getChild("head")->addCss("productForm.css");
        $layout->getChild("head")->addCss("page.css");
        $banner  = $layout->createBlock("core/template")
                    ->setTemplate("catalog/admin/admindashbord.phtml");
        $layout->getChild("content")
                    ->addChild('banner',$banner);
        $layout->toHtml();
    }
}

?>