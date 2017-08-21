<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingDetailsdao.php';


/*
	Housing Details Business Object 
*/
Class HousingDetailsBAO{

	private $_DB;
	private $_HousingDetailsDAO;

	function HousingDetailsBAO(){

		$this->_HousingDetailsDAO = new HousingDetailsDAO();

	}

	//get all Housing Details value
	public function getAllHousingDetails(){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->getAllHousingDetails();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.getAllHousingDetails()");		

		return $Result;
	}

	public function getNameFromId($HousingId){


		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->getNameFromId($HousingId);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.getNameFromId()");	//getNameFromId edit	

		return $Result;


	}

	
	

	//create Housing Details funtion with the Housing object
	public function createHousingDetails($HousingDetails){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->createHousingDetails($HousingDetails);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.createHousingRoom()");		

		return $Result;

	
	}
	



	//read an Housing Details object based on its id form Housing Details object
	public function readHousingDetails($HousingDetails){


		$Result = new Result();	

		$Result = $this->_HousingDetailsDAO->readHousingDetails($HousingDetails);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.readHousingDetails()");		

		return $Result;


	}



	//delete an existing Housing Details
	public function deleteHousingDetails($HousingDetails){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->deleteHousingDetails($HousingDetails);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.deleteHousingDetails()");		

		return $Result;

	}

}

echo '<br> log:: exit the class.housingDetailsbao.php';

?>