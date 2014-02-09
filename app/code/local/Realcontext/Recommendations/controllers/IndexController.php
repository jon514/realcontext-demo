<?php
/**
 *
 * Piwik Extension for Magento created by Adrian Speyer
 * Get Piwik at http://www.piwik.org - Open source web analytics
 *
 * @category    Mage
 * @package     Mage_PiwikAnalytics_Controller_IndexController
 * @copyright   Copyright (c) 2012 Adrian Speyer. (http://www.adrianspeyer.com)
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

class Realcontext_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		die("hello world");
    	$this->loadLayout();
		$this->renderLayout();
	
    }
}
