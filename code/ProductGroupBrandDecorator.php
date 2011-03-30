<?php

class ProductGroupBrandDecorator extends DataObjectDecorator{
	
	static $currentbrand = null;
	
	
	/**
	 * Dropdown form that allows choosing a different brand to browse by.
	 */
	function ChooseBrandForm(){
		
		
	}
	
	
	function updateFilter(&$filter){
		
		if($brand = $this->owner->CurrentBrand()){
			if($filter == "" || !$filter){
				$filter = "";	
			}else{
				$filter = " AND ";
			}

			$filter .= "\"BrandID\" = ".$brand->ID;
			
		}
	}
	
	function CurrentBrand(){
		
		if(self::$currentbrand){
			return self::$currentbrand; 
		}
		
		$brandid = (int)Controller::curr()->getRequest()->getVar('Brand');
		if(!$brandid) $brandid = Session::get('Ecommerce.CurrentBrand');
		
		if($brandid && $brand = DataObject::get_by_id('ProductBrand',$brandid)){
			Session::set('Ecommerce.CurrentBrand',$brand->ID);
			self::$currentbrand = $brand;
			return $brand;
		}
		
		return null;		
	}
	
	
	
}

class ProductGroup_ControllerBrandDecorator extends Extension{
	
	function ViewAllLink(){
		return $this->owner->Link('viewallproducts');	
	}
	
	function viewallproducts(){
		Session::clear('Ecommerce.CurrentBrand');
		Director::redirect($this->owner->Link());
		return;
	}
	
}

?>