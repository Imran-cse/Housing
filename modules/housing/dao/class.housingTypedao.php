<?php

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';

/**
 * Housing Type Database Object
 */

class HousingTypeDAO
{

    private $_DB;
	private $_Type;

	function __construct(){

		$this->_DB = DBUtil::getInstance();
		$this->_Type = new HousingType();

	}

    // get all the Housing Type from the database using the database query
	public function getAllHousingTypes(){

		$HousingTypeList = array();

		$this->_DB->doQuery("SELECT * FROM hms_type");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_HousingType = new HousingType();

		    $this->_HousingType->setID ( $row['id']);
		    $this->_HousingType->setName( $row['name'] );


		    $HousingTypeList[]=$this->_HousingType;

		}
        
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingTypeList);

		return $Result;
	}

    //create Housing Type funtion with the Housing Type object
	public function createHousingType($HousingType){

		$ID=$HousingType->getID();
		$Name=$HousingType->getName();


		$SQL = "INSERT INTO hms_type (id,name) VALUES('$ID','$Name')";

		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

    //read an Housing Type object based on its id form Housing Type object
	public function readHousingType($HousingType){


		$SQL = "SELECT * from hms_type WHERE id='".$HousingType->getID()."'";
		$this->_DB->doQuery($SQL);

		//reading the top row for this Housing Type from the database
		$row = $this->_DB->getTopRow();

		$this->_HousingType= new HousingType();

		//preparing the Housing Type object
	    $this->_HousingType->setID ( $row['id']);
	    $this->_HousingType->setName( $row['name'] );



	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_HousingType);

		return $Result;
	}

    //update an Housing Type object based on its
	public function updateHousingType($HousingType){

		$SQL = "UPDATE hms_type SET name='".$HousingType->getName()."'
				WHERE id='".$HousingType->getID()."'";


		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

    //delete an Housing Type based on its id of the database
	public function deleteHousingType($HousingType){


		$SQL = "DELETE from hms_type where id ='".$HousingType->getID()."'";

		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}


}

 ?>
