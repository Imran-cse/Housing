<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingdao.php';

/*
	Housing Business Object 
*/
Class HousingBAO{

	private $_DB;
	private $_HousingDAO;

	function __construct(){

		$this->_HousingDAO = new HousingDAO();

	}

	//get all Housing value
	public function getAllHousing(){

		$Result = new Result();	
		$Result = $this->_HousingDAO->getAllHousing();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.getAllHousing()");		

		return $Result;
	}
	

	

	//create Housing funtion with the Housing object
	public function createHousing($Housing){

		$Result = new Result();	
		$Result = $this->_HousingDAO->createHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.createHousing()");		

		return $Result;

	
	}
	
	public function getNameFromTypeID($Housing){


		$Result = new Result();	
		$Result = $this->_HousingDAO->getNameFromTypeID($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in _HousingDAO.getNameFromTypeID()");	//getNameFromTypeID edit	

		return $Result;


	}


	

	//read for edit an Housing  object based on its id form Housing object
	public function readHousing($Housing){


		$Result = new Result();	
		$Result = $this->_HousingDAO->readHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.readHousing()");		

		return $Result;


	}

	

	//update an Housing object based on its current information
	public function updateHousing($Housing){

		$Result = new Result();	
		$Result = $this->_HousingDAO->updateHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.updateHousing()");		

		return $Result;
	}

	//delete an existing Housing
	public function deleteHousing($Housing){

		$Result = new Result();	
		$Result = $this->_HousingDAO->deleteHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.deleteHousing()");		

		return $Result;

	}

}

?>