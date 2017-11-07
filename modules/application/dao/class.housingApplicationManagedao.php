<?php

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';

class HousingApplicationManageDAO
{
	private $_DB;
	private $_HousingApplication;

	function __construct(){
		$this->_DB = DBUtil::getInstance();
		$this->_HousingApplication = new HousingApplication();
	}

	public function getAllApplication(){

		$ApplicationList = array();

		$this->_DB->doQuery("SELECT * FROM hms_application order by app_date DESC");

		$rows = $this->_DB->getAllRows();

		for ($i=0; $i < sizeof($rows); $i++) { 
			$row = $rows[$i];

			$this->_HousingApplication = new HousingApplication();

			$this->_HousingApplication->setId($row['id']);
			$this->_HousingApplication->setTemplateId($row['template_id']);
			$this->_HousingApplication->setUserId($row['user_id']);
			$this->_HousingApplication->setBody($row['body']);
			$this->_HousingApplication->setDate($row['app_date']);


			$ApplicationList[] = $this->_HousingApplication;
		}

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($ApplicationList);

		return $Result;
	}

	public function getUserName($User){
        $SQL="SELECT * FROM tbl_user WHERE tbl_user.ID='$User'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_User=new User();
        $this->_User->setID($row['ID']);
        $this->_User->setFirstName($row['FirstName']);
        $this->_User->setLastName($row['LastName']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_User);

        return $Result;
    }

    public function getTempaleSubjectById($ApplicationTemplate){
        $SQL="SELECT * FROM hms_application_template WHERE id='$ApplicationTemplate'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_ApplicationTemplate=new ApplicationTemplate();
        $this->_ApplicationTemplate->setId($row['id']);
        $this->_ApplicationTemplate->setReceiver($row['receiver']);
        $this->_ApplicationTemplate->setSubject($row['subject']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_ApplicationTemplate);

        return $Result;
    }

	
}