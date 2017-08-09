<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingTypedao.php';

/**
 * Housing Type Business Object
 */
class HousingTypeBAO
{

    private $_DB;
	private $_HousingTypeDAO;

	function HousingTypeBAO(){

		$this->_HousingTypeDAO = new HousingTypeDAO();

	}

    //get all Housing Types value
	public function getAllHousingTypes(){

		$Result = new Result();
		$Result = $this->_HousingTypeDAO->getAllHousingTypes();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.getAllHousingTypes()");

		return $Result;
	}


    //create Housing Type funtion with the Housing Type object
	public function createHousingType($HousingType){

		$Result = new Result();
		$Result = $this->_HousingTypeDAO->createHousingType($HousingType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.createHousingType()");

		return $Result;


	}

    //read an Housing Type object based on its id form Housing Type object
	public function readHousingType($HousingType){


		$Result = new Result();
		$Result = $this->_HousingTypeDAO->readHousingType($HousingType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.readHousingType()");

		return $Result;


	}

    //update an Housing Type object based on its current information
	public function updateHousingType($HousingType){

		$Result = new Result();
		$Result = $this->_HousingTypeDAO->updateHousingType($HousingType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.updateHousingType()");

		return $Result;
	}

    //delete an existing Housing Type
	public function deleteHousingType($HousingType){

		$Result = new Result();
		$Result = $this->_HousingTypeDAO->deleteHousingType($HousingType);

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingTypeDAO.deleteHousingType()");

		return $Result;

	}

}



 ?>
