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

	

	public function getAllProvost($id)
	{
		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->getAllProvost($id);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.getAllProvost()");		

		return $Result;
	}

	public function getAllAssistantProvost($id)
	{
		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->getAllAssistantProvost($id);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.getAllAssistantProvost()");		

		return $Result;
	}

	public function getAllEmployee($id)
	{
		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->getAllEmployee($id);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.getAllEmployee()");		

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
	public function createHousingProvost($HousingProvost){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->createHousingProvost($HousingProvost);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.createHousingProvost()");		

		return $Result;

	
	}

	public function createHousingAssProvost($HousingAssistantProvost){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->createHousingAssProvost($HousingAssistantProvost);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.createHousingAssProvost()");		

		return $Result;

	
	}

	public function createHousingEmployee($HousingEmployee){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->createHousingEmployee($HousingEmployee);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.createHousingEmployee()");		

		return $Result;

	
	}
	



	//delete an existing Housing Details
	public function deleteHousingProvost($HousingProvost){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->deleteHousingProvost($HousingProvost);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.deleteHousingProvost()");		

		return $Result;

	}

	public function deleteHousingAssistantProvost($HousingAssistantProvost){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->deleteHousingAssistantProvost($HousingAssistantProvost);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.deleteHousingAssistantProvost()");		

		return $Result;

	}
	public function deleteHousingEmployee($HousingEmployee){

		$Result = new Result();	
		$Result = $this->_HousingDetailsDAO->deleteHousingEmployee($HousingEmployee);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDetailsDAO.deleteHousingEmployee()");		

		return $Result;

	}

}

echo '<br> log:: exit the class.housingDetailsbao.php';

?>