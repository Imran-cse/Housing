<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingApplicationManagedao.php';

class HousingApplicationManageBAO
{
	private $_HousingApplicationManageDAO;

	function __construct(){
		$this->_HousingApplicationManageDAO = new HousingApplicationManageDAO();
	}

	public function getAllDisciplines(){

		$Result = new Result();
		$Result = $this->_HousingApplicationManageDAO->getAllDisciplines();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationDAO.getAllDisciplines()");

		return $Result;
	}

	public function getApplicationTemplate($aid){

		$Result = new Result();
		$Result = $this->_HousingApplicationManageDAO->getApplicationTemplate($aid);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationDAO.getApplicationTemplate()");

		return $Result;
	}

	public function createApplication($HousingApplication){
		$Result = new Result();
		$Result = $this->_HousingApplicationManageDAO->createApplication($HousingApplication);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.createHousing()");		
		return $Result;
	}
}