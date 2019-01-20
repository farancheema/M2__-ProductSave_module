# M2__-ProductSave_module
This magento2 module stores the intended values into my custom attributes when a product is saved from admin.

Description: On event "catalog_product_save_commit_after" an observer class is called, which stores data in three custom Product attributes. Which data needs to be stored? its decided by checking another existing attribute "UPC" (or we can call it as gitin code of product). The attributes are used in the xml of google feed which will supply identifier_exist as false, no MPN code and brand name when there is no UPC code or GTIN value available for a product.

When this attribute "UPC" is empty.
![screenshot_2019-01-20 oil rubbed bronze stainless steel cover for ob-afpp-24 24 x 8 rectangular drop-in fire pit pan prod 1](https://user-images.githubusercontent.com/18115022/51439629-f463a800-1cde-11e9-95c0-af856a2bf7e7.png)

Here are the custom attributes, and they will be populated like this, when UPC is empty in a product.
![screenshot_2019-01-20 oil rubbed bronze stainless steel cover for ob-afpp-24 24 x 8 rectangular drop-in fire pit pan prod](https://user-images.githubusercontent.com/18115022/51439654-355bbc80-1cdf-11e9-9d23-bf174bbbe78b.png)

When there is an attribute UPC or gitin code.
![screenshot_2019-01-20 rutland - duraflame flue-renew soot creosote remover products inventory catalog magento admin](https://user-images.githubusercontent.com/18115022/51439680-93889f80-1cdf-11e9-8304-ff6a0ba8d70c.png)

the attributes would look like this: 
![screenshot_2019-01-20 rutland - duraflame flue-renew soot creosote remover products inventory catalog magento admin](https://user-images.githubusercontent.com/18115022/51439698-caf74c00-1cdf-11e9-8f98-b50c4423260b.png)
