<?php

class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];
    public function includefile($newfile)
    {
        $newfile->addCss("product/productForm.css");
        $newfile->addCss("product/list.css");
    }
    public function formAction()
    {
        $layout = $this->getLayout();
        $newfile =  $layout->getChild("head");
        $this->includefile($newfile);
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('banner/form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        // Check if file is uploaded without errors
        if (isset($_FILES["banner_image"]) && $_FILES["banner_image"]["error"] == 0) {
            $uploadDir = Mage::getBaseDir('media/banner/');
            $image = basename($_FILES["banner_image"]["name"]);
            $uploadFile = $uploadDir . $image;
            if (file_exists($uploadFile)) {
                echo "File already exists.";
            } else {
                // Move uploaded file to specified directory
                if (move_uploaded_file($_FILES["banner_image"]["tmp_name"], $uploadFile)) {
                    echo "File is uploaded successfully.";
                    // Handle other form data and database operations here
                    $data = $this->getRequest()->getParams("banner");
                    $data = array_merge($data, ['banner_image' => $image]);
                    Mage::getModel("banner/banner")
                        ->setData($data)
                        ->save();
                    $this->setRedairect('admin/banner/list');
                } else {
                    echo "Error uploading file.";
                }
            }
        } else {
            // No file uploaded, handle other form data and database operations here
            $data = $this->getRequest()->getParams("banner");
            Mage::getModel("banner/banner")
                ->setData($data)
                ->save();
            $this->setRedairect('admin/banner/list');
        }
    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getparams("id");
        $product = Mage::getModel("banner/banner")->load($id);
        $product->delete();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $newfile =  $layout->getChild("head");
        $this->includefile($newfile);
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('banner/list');
        $child->addChild('list', $productForm);
        $layout->toHtml();
    }
}