<?php

include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './util/class.util.php';

class HousingApplicationTypeDAO
{
	private $_DB;
	private $_HousingApplicationType;

	function HousingApplicationTypeDAO(){
		$this->_DB = DBUtil::getInstance();
		$this->_HousingApplicationType = new HousingApplicationType();
	}

	public function getHousingApplicationTypes(){

		$HousingApplicationTypeList = array();

		$this->_DB->doQuery("SELECT * FROM hms_application_type");

		$rows = $this->_DB->getAllRows();

		for ($i=0; $i < sizeof($rows); $i++) { 
			$row = $rows[$i];
			$this->_HousingApplicationType = new HousingApplicationType();

			$this->_HousingApplicationType->setId($row['id']);
			$this->_HousingApplicationType->setName($row['name']);

			$HousingApplicationTypeList[] = $this->_HousingApplicationType;
		}

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingApplicationTypeList);

		return $Result;
	}

	public function createHousingApplicationType($HousingApplicationType){
		$Id = $HousingApplicationType->getId();
		$Name = $HousingApplicationType->getName();

		$SQL = $this->_DB->doQuery("INSERT INTO hms_application_type(id, name) VALUES('$Id', '$Name')");

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	public function readHousingApplicationType($HousingApplicationType){

		$this->_DB->doQuery("SELECT * FROM hms_application_type WHERE id='".$HousingApplicationType->getId()."'");

		$row = $this->_DB->getTopRow();

		$this->_HousingApplicationType = new HousingApplicationType();

		$this->_HousingApplicationType->setId($row['id']);
		$this->_HousingApplicationType->setName($row['name']);

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_HousingApplicationType);

		return $Result;
	}

	public function updateHousingApplicationType($HousingApplicationType){

		$SQL = "UPDATE hms_application_type SET name='".$HousingApplicationType->getName()."'
				WHERE id='".$HousingApplicationType->getID()."'";

		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	public function deleteHousingApplicationType($HousingApplicationType){

		$SQL = "DELETE from hms_application_type where id ='".$HousingApplicationType->getID()."'";

		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}
}