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
	public function getAllApplicationTemplate(){
		$Result = new Result();
		$Result = $this->_ApplicationTemplateDAO->getAllApplicationTemplate();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in ApplicationTemplateDAO.getAllApplicationTemplate()");		
		return $Result;
	}

	public function readApplicationTemplate($ApplicationTemplate){


		$Result = new Result();
		$Result = $this->_ApplicationTemplateDAO->readApplicationTemplate($ApplicationTemplate);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in ApplicationTemplateDAO.readApplicationTemplate()");

		return $Result;


	}

	public function updateApplicationTemplate($ApplicationTemplate){

		$Result = new Result();
		$Result = $this->_ApplicationTemplateDAO->updateApplicationTemplate($ApplicationTemplate);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in ApplicationTemplateDAO.updateApplicationTemplate()");

		return $Result;
	}

	public function deleteApplicationTemplate($ApplicationTemplate){

		$Result = new Result();
		$Result = $this->_ApplicationTemplateDAO->deleteApplicationTemplate($ApplicationTemplate);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in ApplicationTemplateDAO.deleteApplicationTemplate()");

		return $Result;

	}

}