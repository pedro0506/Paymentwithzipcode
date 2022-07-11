<?php

namespace Psdev\Paymentwithzipcode\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

	const XML_PATH_HELLOWORLD = 'paymentwithzipcode/';

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);

        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $config = $objectManager->get('Magento\Framework\App\Config\ScopeConfigInterface')->getValue('paymentwithzipcode/general/display_text');
        // print_r($config);
	}

}