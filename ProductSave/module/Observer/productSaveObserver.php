<?php
namespace ProductSave\module\Observer;

use Magento\Framework\Event\ObserverInterface;

class productSaveObserver implements ObserverInterface
{
  
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
    $product = $observer->getEvent()->getproduct();

    if (!$product->getData('identifier_exist')) {
      
          if ($product->getData('upc')) {
            $product->setCustomAttribute('identifier_exist', 'yes');

            $brand_name = $product->getAttributeText('product_brand');
            $product->setCustomAttribute('brand_name_code', $brand_name);

            $mpn = $product-> getSku();
            $product->setCustomAttribute('mpn_code', $mpn);

            $product->save();
          }
          else{
            $product->setCustomAttribute('identifier_exist', 'no');

            $product->setCustomAttribute('brand_name_code', "");

            $product->setCustomAttribute('mpn_code', "");

            $product->save();
          }
    }  
       

  }

}
?>