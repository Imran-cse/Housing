<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingRoomAssigndao.php';


/*
	Housing Room Assign Business Object 
*/
Class HousingRoomAssignBAO{

	private $_DB;
	private $_HousingRoomAssignDAO;
	

	function __construct(){

		$this->_HousingRoomAssignDAO = new HousingRoomAssignDAO();

	}

	//get all Housing Room Assign value
	public function getAllHousingRoomAssign($hid,$rid){

		$Result = new Result();	
		
		
		$Result = $this->_HousingRoomAssignDAO->getAllHousingRoomAssign($hid,$rid);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignBAO.getAllHousingRoomAssign()");		

		return $Result;
	}

	

	//create Housing Room Assign funtion with the Housing object
	public function createHousingRoomAssign($HousingRoomAssign){

		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->createHousingRoomAssign($HousingRoomAssign);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.createHousingRoomAssign()");		

		return $Result;

	
	}
	
	public function getNameFromId($HousingId){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getNameFromId($HousingId);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getNameFromId()");	//getNameFromId edit	

		return $Result;


	}
	public function getUserFromUniversityID($uid){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getUserFromUniversityID($uid);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getUserFromUniversityID()");	//getNameFromId edit	

		return $Result;


	}

	public function getUserFromId($uid){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getUserFromId($uid);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getUserFromId()");	//getNameFromId edit	

		return $Result;


	}

	public function getRoomNoFromId($rid){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getRoomNoFromId($rid);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getRoomNoFromId()");	//getNameFromId edit	

		return $Result;


	}

	public function getAllHousingUsers(){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getAllHousingUsers();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getAllHousingUsers()");	//getNameFromId edit	

		return $Result;

	}
	public function getNumberOfUsersFromRoom($hid,$rid){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getNumberOfUsersFromRoom($hid,$rid);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getNumberOfUsersFromRoom()");	//getNameFromId edit	

		return $Result;


	}

	public function getTotalUserInRoom($hid,$rid){


		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->getTotalUserInRoom($hid,$rid);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.getTotalUserInRoom()");	//getNameFromId edit	

		return $Result;


	}

	

	
	//read an Housing Room Assign  object based on its id form Housing Room object
	public function readHousingRoomAssign($HousingRoomAssign){


		$Result = new Result();	

		$Result = $this->_HousingRoomAssignDAO->readHousingRoomAssign($HousingRoomAssign);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.readHousingRoomAssign()");		

		return $Result;


	}
	
	//delete an existing Housing Room
	public function deleteHousingRoomAssign($HousingRoomAssign){

		$Result = new Result();	
		$Result = $this->_HousingRoomAssignDAO->deleteHousingRoomAssign($HousingRoomAssign);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingRoomAssignDAO.deleteHousingRoomAssign()");		

		return $Result;

	}

}

<<<<<<< HEAD


=======
>>>>>>> 4d69e2c029dcbd60ad15027f14fc248cfc65ad36
?>