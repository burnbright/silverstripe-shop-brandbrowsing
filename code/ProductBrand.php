<?php

class ProductBrand extends DataObject{
	
	public static $singular_name = 'brand';
	public static $plural_name = 'brands';
	
	static $db = array(
		'Name' => 'Varchar(255)'
		//website??
	);	
	
	static $has_one = array(
		'Logo' => 'Image'
	);
	
	static $default_sort = 'Name ASC';
	
	public static $summary_fields = array(
		'Name' => 'Name',
		'Logo.Name' => 'Logo'
	);
	
	public static $searchable_fields = array(
		"Name" => array(
	  			"field" => "TextField"
	 	)
	);
	
	function Link(){
		$brandspage = Controller::curr()->data();
		if($brandspage->ProductGroupID && $group = $brandspage->ProductGroup()){
			return $group->Link()."?Brand=".$this->ID;	
		}			
	}
	
}

?>
