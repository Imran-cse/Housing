<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingRoomdao.php';


/*
	Housing Room Business Object 
*/
Class HousingRoomBAO{

	private $_DB;
	private $_HousingRoomDAO;

	function HousingRoomBAO(){

		$this->_HousingRoomDAO = new HousingRoomDAO();

	}

	//get all Housing Room value
	public function getAllHousingRoom(){

		$Result = new Result();	
		$Result = $this->_HousingRoomDAO->getAllHousingRoom();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.getAllHousingRoom()");		

		return $Result;
	}

	
	

	//create Housing Room funtion with the Housing object
	public function createHousingRoom($HousingRoom){

		$Result = new Result();	
		$Result = $this->_HousingRoomDAO->createHousingRoom($HousingRoom);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.createHousingRoom()");		

		return $Result;

	
	}
	
	public function getNameFromId($HousingId){


		$Result = new Result();	
		$Result = $this->_HousingRoomDAO->getNameFromId($HousingId);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.getNameFromId()");	//getNameFromId edit	

		return $Result;


	}



	//read an Housing Room object based on its id form Housing Room object
	public function readHousingRoom($HousingRoom){


		$Result = new Result();	

		$Result = $this->_HousingRoomDAO->readHousingRoom($HousingRoom);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.readHousingRoom()");		

		return $Result;


	}


	//update an Housing Room object based on its current information
	public function updateHousingRoom($HousingRoom){

		$Result = new Result();	
		$Result = $this->_HousingRoomDAO->updateHousingRoom($HousingRoom);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.updateHousingRoom()");		

		return $Result;
	}

	//delete an existing Housing Room
	public function deleteHousingRoom($HousingRoom){

		$Result = new Result();	
		$Result = $this->_HousingRoomDAO->deleteHousingRoom($HousingRoom);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.deleteHousingRoom()");		

		return $Result;

	}

}

echo '<br> log:: exit the class.housingRoombao.php';

?>