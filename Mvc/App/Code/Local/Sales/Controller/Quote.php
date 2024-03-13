<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $request = Mage::getSingleton('core/request')->getParams('cart');
        Mage::getSingleton('sales/quote')->addProduct($request);
        $this->setRedirect('cart');
    }
    public function deleteAction()
    {
        $request = [
            'quote_id' => Mage::getSingleton('core/request')->getParams('quote_id'),
            'item_id' => Mage::getSingleton('core/request')->getParams('item_id')
        ];
        $quote = Mage::getSingleton('sales/quote')->deleteProduct($request);
        $this->setRedirect('cart');
    }
    public function addressAction(){
        $quoteId = Mage::getSingleton('core/session')->get("quote_id");
        if($quoteId){
        $addressData = Mage::getSingleton('core/request')->getParams('checkout');
         Mage::getSingleton('sales/quote')->addAddress($addressData);
        // $quoteCustomerId = Mage::getSingleton('core/session')->get('quote_customer_id');
        // $addressData = Mage::getSingleton('core/request')->getParams('checkout');
        // $modelName = Mage::getSingleton('sales/quote_customer');
        // $modelName->setData($addressData);
        // if($quoteCustomerId){
        //     $modelName->addData('quote_customer_id',$quoteCustomerId)
        //     ->save();
            $this->setRedirect('cart/checkout/form');

        // }else{
        //     $modelName->save();

        //     $quoteCustomerId = $modelName->getId();
        //     Mage::getSingleton('core/session')->set('quote_customer_id',$quoteCustomerId);
        // }
        // $this->setRedirect('cart/checkout/form');
    }else{
        $this->setRedirect('cart');
    }
    }
}
