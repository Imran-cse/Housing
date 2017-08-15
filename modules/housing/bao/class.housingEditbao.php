<?php

include_once './util/class.util.php';
include_once '/../dao/class.housingEditdao.php';


/*
	Housing Business Object 
*/
Class HousingEditBAO{

	private $_DB;
	private $_HousingEditDAO;

	function HousingBAO(){

		$this->_HousingEditDAO = new HousingEditDAO();

	}

	//read an Housing object based on its id form Housing object
	public function readHousing($Housing){


		$Result = new Result();	
		$Result = $this->_HousingEditDAO->readHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.readHousing()");		

		return $Result;


	}
	
	
	
	
	//update an Housing object based on its current information
	public function updateHousing($Housing){

		$Result = new Result();	
		$Result = $this->_HousingEditDAO->updateHousing($Housing);
		
		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingDAO.updateHousing()");		

		return $Result;
	}

	

}

echo '<br> log:: exit the class.housingbao.php';

?>