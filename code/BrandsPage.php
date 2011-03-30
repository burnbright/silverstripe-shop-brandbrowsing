<?php
/**
 * This pagetype lists all the brands that have been set up, using their logo if they have one.
 */
class BrandsPage extends Page{
	
	static $has_one = array(
		'ProductGroup' => 'ProductGroup'
	);
	
	//TODO: automatically set the product group
	
	function getCMSFields(){
		
		$fields = parent::getCMSFields();
		
		if($source = DataObject::get('ProductGroup'))		
		$fields->addFieldToTab('Root.Content.Main',
			new DropdownField('ProductGroupID','Main Product Group',$source->toDropDownMap()));
		
		
		return $fields;	
	}
	
}

class BrandsPage_Controller extends Page_Controller{
	
	function Brands(){
		
		//TODO: make sure brand has products (and logo?)
		
		return 	DataObject::get('ProductBrand');
	}
	
}

?>
