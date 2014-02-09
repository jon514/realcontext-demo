<?php
class Realcontext_Recommendations_Model_Recommendations {
	
	public $recommendation_collection;
	
	public function getRecommendations($id){
		if($id == 1){
			return Mage::getModel('catalog/product')
			->getCollection()
			->addFieldToFilter('entity_id', array('in' => array('83', '98', '103')));
		}
		else {
			return Mage::getModel('catalog/product')
			->getCollection()
			->addFieldToFilter('entity_id', array('in' => array('123', '120', '103')));
		}
	}
	
}