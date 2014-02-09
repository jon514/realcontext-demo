<?php

class Realcontext_Recommendations_Block_Recommendations extends Mage_Core_Block_Template {
	public function getRecommendations() {
		$id = $this->getRequest('id');
		Mage::getModel('realcontext/recommendations')->getRecommendations($id);
	}
}