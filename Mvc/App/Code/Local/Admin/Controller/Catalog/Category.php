<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function includefile($newfile)
    {
        $newfile->addCss("category/form.css");
        $newfile->addCss("category/List.css");
    }
    public function formAction()
    {
        $layout = $this->getLayout();
        $newfile =  $layout->getChild("head");
        $this->includefile($newfile);
        $child = $layout->getChild('content');
        $categoryForm = $layout->createBlock('Catalog/admin_category_form');
        $child->addChild('form', $categoryForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getparams("catalog_category");
        $category = Mage::getModel("catalog/category")
            ->setData($data);
        $category->save();
    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getparams("id");
        $category = Mage::getModel("catalog/category")->load($id);
        $category->delete();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $newfile =  $layout->getChild("head");
        $this->includefile($newfile);
        $child = $layout->getChild('content');
        $categoryForm = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $categoryForm);
        $layout->toHtml();
    }
}
?>