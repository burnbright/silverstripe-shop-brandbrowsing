<?php

class BrandProductBulkLoadingDecorator extends Extension{
	
	
	function importBrand($obj, $val, $record){ //note: can't pass by refrence in extension
		
		$val = strtolower(trim($val));
		if($brand = DataObject::get_one('ProductBrand',"\"Name\" = LOWER('$val')")){
			$obj->BrandID = $brand->ID;
		}
				
	}
	
	function updateColumnMap(&$columnmap){		
		$columnmap['Brand'] = '->importBrand';
		$columnmap['Manufacturer'] = '->importBrand';
	}
	
}


?>
