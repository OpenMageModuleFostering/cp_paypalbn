<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Commerce Pundit Technologies
 * @package     CP_Paypalbn
 * @copyright   Copyright (c) 2015 Commerce Pundit Technologies. (http://www.commercepundit.com)    
* @author   <<Ketan Panchal>>    
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class CP_Paypalbn_Model_Config extends Mage_Paypal_Model_Config
{ 
    /**
     * BN code getter
     * override method
     *
     * @param string $countryCode ISO 3166-1
     */
    public function getBuildNotationCode($countryCode = null)
    {
		if(Mage::getStoreConfig('payapalsetting/paypal/enable',Mage::app()->getStore()) == '1')
		{
			$newBnCode = Mage::getStoreConfig('payapalsetting/paypal/bncode',Mage::app()->getStore());
	        return $newBnCode;
		}
        
    }
}