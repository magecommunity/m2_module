<?php
/**
* Copyright © 2018 Mage Community. All rights reserved.
*/

namespace Magecommunity\General\Block;
 
class General extends \Magento\Framework\View\Element\Template
{
	const MODULE_NAME = 'Magecommunity_General';
	
	protected $_moduleList;

	/**
	 * Initialize dependencies.
	 * @param \Magento\Framework\View\Element\Template\Context $context
	 * @param \Magento\Framework\Module\ModuleListInterface $moduleList
	 * @param array $data
	 */
	public function __construct(
	 \Magento\Framework\View\Element\Template\Context $context,
	 \Magento\Framework\Module\ModuleListInterface $moduleList,
	 array $data = []
	) {
		$this->_moduleList = $moduleList;
	 parent::__construct($context, $data);
	}

	public function getModuleVersion()
	{
		$version="";
		$module=$this->_moduleList->getOne(self::MODULE_NAME);
		if($module){
			$version=self::MODULE_NAME." (".$module['setup_version'].")";
		}
		return $version;
	}
}