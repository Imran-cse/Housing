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
}