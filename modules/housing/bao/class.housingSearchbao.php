<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingSearchdao.php';

/*
	Housing Details Business Object 
*/
Class HousingSearchBAO{

	private $_DB;
	private $_HousingSearchDAO;

	function HousingSearchBAO(){

		$this->_HousingSearchDAO = new HousingSearchDAO();
	}

	public function getAllHousingName()
	{
		$Result = new Result();	
		$Result = $this->_HousingSearchDAO->getAllHousingName();
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingSearchDAO.getAllHousingName()");		

		return $Result;
	}

	//search an user object
	public function searchUser($Housing,$SearchField,$SearchText){

		$Result = new Result();	
		$Result = $this->_HousingSearchDAO->searchUser($Housing,$SearchField,$SearchText);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("No User found!!");		

		return $Result;
	}
}

echo '<br> log:: exit the class.housingSearchbao.php';

?>