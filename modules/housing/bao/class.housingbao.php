<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingdao.php';


/*
	Housing Business Object 
*/
Class HousingBAO{

	private $_DB;
	private $_HousingDAO;

	function HousingBAO(){

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
	public function getAllHousingTypes(){

		$Result = new Result();	
		$Result = $this->_HousingDAO->getAllHousingTypes();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.getAllHousingTypes()");		

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


	public function readHousingType($Housing){


		$Result = new Result();	
		$Result = $this->_HousingDAO->readHousingType($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.readDiscussionCategory()");		

		return $Result;


	}

	//read an Housing object based on its id form Housing object
	public function readHousing($Housing){


		$Result = new Result();	
		$Result = $this->_HousingDAO->readHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.readHousing()");		

		return $Result;


	}

	public function readHousing1($Housing){


		$Result = new Result();	
		$Result = $this->_HousingDAO->readHousing1($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.readHousing1()");		

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

echo '<br> log:: exit the class.housingbao.php';

?>