<?php

include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './util/class.util.php';

class HousingApplicationDAO
{
	private $_DB;
	private $_HousingDiscipline;
	private $_HousingApplication;

	function HousingApplicationDAO(){
		$this->_DB = DBUtil::getInstance();
		$this->_HousingDiscipline = new HousingDiscipline();
		$this->_HousingApplication = new HousingApplication();
	}

	public function getAllDisciplines(){

		$DisciplinesList = array();

		$this->_DB->doQuery("SELECT * FROM tbl_discipline");

		$rows = $this->_DB->getAllRows();

		for ($i=0; $i < sizeof($rows); $i++) { 
			$row = $rows[$i];

			$this->_HousingDiscipline = new HousingDiscipline();

			$this->_HousingDiscipline->setID($row['ID']);
			$this->_HousingDiscipline->setName($row['Name']);

			$DisciplinesList[] = $this->_HousingDiscipline;
		}

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($DisciplinesList);

		return $Result;
	}

	public function createApplication($HousingApplication){
		$Id = $HousingApplication->getId();
		$Subject = $HousingApplication->getSubject();
		$UserId = $HousingApplication->getUserId();
		$Discipline = $HousingApplication->getDiscipline();
		$Description = $HousingApplication->getDescription();
		$Status = $HousingApplication->getStatus();
		$Date = $HousingApplication->getDate();

		$SQL = $this->_DB->doQuery("INSERT INTO hms_application(id, subject, user_id, discipline, description, status) VALUES('$Id', '$Subject', '$UserId', '$Discipline', '$Description','$Status')");

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}
}