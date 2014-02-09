<?php

class Realcontext_Recommendations_Block_Recommendations extends Mage_Catalog_Block_Product_Abstract {
	public function getRecommendations() {
		$id = rand(0,1);
		return Mage::getModel('realcontext/recommendations')->getRecommendations($id);
	}
}