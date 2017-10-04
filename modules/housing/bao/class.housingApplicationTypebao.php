<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingApplicationTypedao.php';

class HousingApplicationTypeBAO
{
	private $_DB;
	private $_HousingApplicationTypeDAO;

	function HousingApplicationTypeBAO(){
		$this->_HousingApplicationTypeDAO = new HousingApplicationTypeDAO();
	}

	//get all Housing Application Types value
	public function getHousingApplicationTypes(){

		$Result = new Result();
		$Result = $this->_HousingApplicationTypeDAO->getHousingApplicationTypes();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationTypeDAO.getAllHousingApplicationTypes()");

		return $Result;
	}


    //create Housing Type funtion with the Housing Type object
	public function createHousingApplicationType($HousingApplicationType){

		$Result = new Result();
		$Result = $this->_HousingApplicationTypeDAO->createHousingApplicationType($HousingApplicationType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationTypeDAO.createHousingApplicationType()");

		return $Result;


	}

    //read an Housing Type object based on its id form Housing Type object
	public function readHousingApplicationType($HousingApplicationType){


		$Result = new Result();
		$Result = $this->_HousingApplicationTypeDAO->readHousingApplicationType($HousingApplicationType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.readHousingApplicationType()");

		return $Result;


	}

    //update an Housing Type object based on its current information
	public function updateHousingApplicationType($HousingApplicationType){

		$Result = new Result();
		$Result = $this->_HousingApplicationTypeDAO->updateHousingApplicationType($HousingApplicationType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.updateHousingType()");

		return $Result;
	}

    //delete an existing Housing Type
	public function deleteHousingApplicationType($HousingApplicationType){

		$Result = new Result();
		$Result = $this->_HousingApplicationTypeDAO->deleteHousingApplicationType($HousingApplicationType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.deleteHousingType()");

		return $Result;

	}
}