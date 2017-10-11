<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.applicationTemplatedao.php';

class ApplicationTemplateBAO
{
	private $_ApplicationTemplateDAO;

	function __construct(){
		$this->_ApplicationTemplateDAO = new ApplicationTemplateDAO();
	}

	public function createApplicationTemplate($ApplicationTemplate){
		$Result = new Result();
		$Result = $this->_ApplicationTemplateDAO->createApplicationTemplate($ApplicationTemplate);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in ApplicationTemplateDAO.createApplicationTemplate()");		
		return $Result;
	}
}