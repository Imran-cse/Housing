<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingApplicationdao.php';

class HousingApplicationBAO
{
	private $_HousingApplicationDAO;

	function HousingApplicationBAO(){
		$this->_HousingApplicationDAO = new HousingApplicationDAO();
	}

	public function getAllDisciplines(){

		$Result = new Result();
		$Result = $this->_HousingApplicationDAO->getAllDisciplines();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationTypeDAO.getAllHousingApplicationTypes()");

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