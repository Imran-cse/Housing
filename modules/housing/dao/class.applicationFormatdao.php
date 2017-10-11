<?php

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';


class ApplicationFormatDAO
{

    private $_DB;
	
	function __construct(){

		$this->_DB = DBUtil::getInstance();
		
	}

    
	public function getAllApplicationTemplate(){

		$ApplicationTemplateList = array();

		$this->_DB->doQuery("SELECT * FROM hms_application_template");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Template = new ApplicationTemplate();

		    $this->_Template->setId ( $row['id']);
		    $this->_Template->setReceiver( $row['receiver'] );
		    $this->_Template->setSubject( $row['subject'] );
		    $this->_Template->setBody( $row['body'] );


		    $ApplicationTemplateList[]=$this->_Template;

		}
        
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($ApplicationTemplateList);

		return $Result;
	}

}



 ?>
