<?php

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';

class HousingApplicationDAO
{
	private $_DB;
	private $_HousingDiscipline;
	private $_HousingApplication;

	function __construct(){
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

	public function getApplicationTemplate($aid){
		$SQL = "SELECT * FROM hms_application_template WHERE id='".$aid."'";
		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_ApplicationTemplate = new ApplicationTemplate();

		$this->_ApplicationTemplate->setId ( $row['id']);
		$this->_ApplicationTemplate->setReceiver( $row['receiver'] );
		$this->_ApplicationTemplate->setSubject( $row['subject'] );
		$this->_ApplicationTemplate->setBody( $row['body'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_ApplicationTemplate);

		return $Result;
	}

	public function createApplication($HousingApplication){
		$Id = $HousingApplication->getId();
		$TemplateId = $HousingApplication->getTemplateId();
		$UserId = $HousingApplication->getUserId();
		//$ReceiverDepartment = $HousingApplication->getReceiverDepartment();
		$Body = $HousingApplication->getBody();
		$App_Date = $HousingApplication->getDate();

		$SQL = $this->_DB->doQuery("INSERT INTO hms_application(id, template_id, body, user_id, app_date) VALUES('$Id', '$TemplateId','$Body','$UserId', '$App_Date')");

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}
}