<?php

class ProductBrandAdmin extends ModelAdmin{
	
	public static $managed_models = array(
		'ProductBrand'
	);
	
	static $url_segment = 'brands';
	static $menu_title = 'Brands';
	
}