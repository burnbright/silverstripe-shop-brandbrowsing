<?php

Object::add_extension('Product','ProductBrandDecorator');
Object::add_extension('ProductGroup','ProductGroupBrandDecorator');
Object::add_extension('ProductGroup_Controller','ProductGroup_ControllerBrandDecorator');

Object::add_extension('ProductBulkLoader','BrandProductBulkLoadingDecorator');

ProductGroup_Controller::$allowed_actions[] = 'viewallproducts';