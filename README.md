# M2__-ProductSave_module
This magento2 module stores the intended values into my custom attributes when a product is saved from admin.

Description: On event "catalog_product_save_commit_after" an observer class is called, which stores data in three custom Product attributes. Which data needs to be stored? its decided by checking another existing attribute "UPC".
