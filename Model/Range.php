<?php
namespace Psdev\Paymentwithzipcode\Model;
class Range extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'psdevcom_paymentwithzip_range';

	protected $_cacheTag = 'psdevcom_paymentwithzip_range';

	protected $_eventPrefix = 'psdevcom_paymentwithzip_range';

	protected function _construct()
	{
		$this->_init(' Psdev\Paymentwithzipcode\Model\ResourceModel\Range');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}