<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingApplicationdao.php';

class HousingApplicationBAO
{
	private $_HousingApplicationDAO;

	function __construct(){
		$this->_HousingApplicationDAO = new HousingApplicationDAO();
	}

	public function getAllDisciplines(){

		$Result = new Result();
		$Result = $this->_HousingApplicationDAO->getAllDisciplines();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationDAO.getAllDisciplines()");

		return $Result;
	}

	public function getApplicationTemplate($aid){

		$Result = new Result();
		$Result = $this->_HousingApplicationDAO->getApplicationTemplate($aid);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationDAO.getApplicationTemplate()");

		return $Result;
	}

	public function createApplication($HousingApplication){
		$Result = new Result();
		$Result = $this->_HousingApplicationDAO->createApplication($HousingApplication);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.createHousing()");		
		return $Result;
	}
}