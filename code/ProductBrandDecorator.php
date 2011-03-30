<?php

class ProductBrandDecorator extends DataObjectDecorator{
	
	function extraStatics(){
		return array(
			'db' => array(
				
			),
			'has_one' => array(
				'Brand' => 'ProductBrand'
			)
		);
		
	}
	
	function updateCMSFields(&$fields){
		
		if($brands = DataObject::get('ProductBrand')){
			$fields->addFieldToTab('Root.Content.Main',$ddf = new DropDownField('BrandID','Brand',$brands->toDropDownMap()),'FeaturedProduct');
			$ddf->setHasEmptyDefault(true);
		}
		
	}
	
}

?>
