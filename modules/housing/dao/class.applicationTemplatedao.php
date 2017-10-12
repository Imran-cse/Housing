<?php

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';

class ApplicationTemplateDAO
{
	private $_DB;
	private $_ApplicationTemplate;

	function __construct(){
		$this->_DB = DBUtil::getInstance();
		$this->_ApplicationTemplate = new ApplicationTemplate();
	}

	public function createApplicationTemplate($ApplicationTemplate){
		$Id = $ApplicationTemplate->getId();
		$Subject = $ApplicationTemplate->getSubject();
		$Receiver = $ApplicationTemplate->getReceiver();
		$Body = $ApplicationTemplate->getBody();

		$SQL = $this->_DB->doQuery("INSERT INTO hms_application_template(id, receiver,subject, body) VALUES('$Id', '$Receiver','$Subject', '$Body')");

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	public function getAllApplicationTemplate(){

		$ApplicationTemplateList = array();

		$this->_DB->doQuery("SELECT * FROM hms_application_template");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_ApplicationTemplate = new ApplicationTemplate();

		    $this->_ApplicationTemplate->setId ( $row['id']);
		    $this->_ApplicationTemplate->setReceiver( $row['receiver'] );
		    $this->_ApplicationTemplate->setSubject( $row['subject'] );
		    $this->_ApplicationTemplate->setBody( $row['body'] );


		    $ApplicationTemplateList[]=$this->_ApplicationTemplate;

		}
        
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($ApplicationTemplateList);

		return $Result;
	}

	public function readApplicationTemplate($ApplicationTemplate){


		$SQL = "SELECT * from hms_application_template WHERE id='".$ApplicationTemplate->getId()."'";
		$this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_ApplicationTemplate= new ApplicationTemplate();

	    $this->_ApplicationTemplate->setId ( $row['id']);
	    $this->_ApplicationTemplate->setReceiver( $row['receiver'] );
	    $this->_ApplicationTemplate->setSubject( $row['subject'] );
	    $this->_ApplicationTemplate->setBody( $row['body'] );



	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_ApplicationTemplate);

		return $Result;
	}

	public function updateApplicationTemplate($ApplicationTemplate){

		$SQL = "UPDATE hms_application_template SET receiver='".$ApplicationTemplate->getReceiver()."',subject='".$ApplicationTemplate->getSubject()."',body='".$ApplicationTemplate->getBody()."'
				WHERE id='".$ApplicationTemplate->getId()."'";


		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

	public function deleteApplicationTemplate($ApplicationTemplate){


		$SQL = "DELETE from hms_application_template where id ='".$ApplicationTemplate->getId()."'";

		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}
}