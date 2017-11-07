<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingRoomdao.php';


/*
	Housing Room Business Object 
*/
Class HousingRoomBAO{

	private $_DB;
	private $_HousingRoomDAO;
	//private $_h_id;

	function __construct(){

		$this->_HousingRoomDAO = new HousingRoomDAO();
		//$this->_h_id = new HousingRoomBAO();

	}

	//get all Housing Room value
	public function getAllHousingRoom($hid){

		$Result = new Result();	
		
		
		$Result = $this->_HousingRoomDAO->getAllHousingRoom($hid);
		
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
	public function getHousingIdFromRoomId($HousingRoomId)
	{
		$Result = new Result();	
		$Result = $this->_HousingRoomDAO->getHousingIdFromRoomId($HousingRoomId);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomDAO.getHousingIdFromRoomId()");	//getNameFromId edit	

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

<<<<<<< HEAD


=======
>>>>>>> 4d69e2c029dcbd60ad15027f14fc248cfc65ad36
?>