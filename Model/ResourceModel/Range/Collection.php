<?php
namespace Psdev\Paymentwithzipcode\Model\ResourceModel\Range;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'psdevcom_paymentwithzip_range_collection';
	protected $_eventObject = 'range_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Psdev\Paymentwithzipcode\Model\Range', 'Psdev\Paymentwithzipcode\Model\ResourceModel\Range');
	}

}