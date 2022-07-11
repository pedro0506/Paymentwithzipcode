<?php
namespace Psdev\Paymentwithzipcode\Block\Adminhtml;

class Range extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_range';
		$this->_blockGroup = 'Psdev_Paymentwithzipcode';
		$this->_headerText = __('Ranges of zip');
		$this->_addButtonLabel = __('Configure Range');
		parent::_construct();
	}
}