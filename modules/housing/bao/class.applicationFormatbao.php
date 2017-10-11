<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.applicationFormatdao.php';


class ApplicationFormatBAO
{

    private $_DB;
	private $_ApplicationFormatDAO;

	function __construct(){

		$this->_ApplicationFormatDAO = new ApplicationFormatDAO();

	}

    
	public function getAllApplicationTemplate(){

		$Result = new Result();
		$Result = $this->_ApplicationFormatDAO->getAllApplicationTemplate();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in ApplicationFormatDAO.getAllApplicationTemplate()");

		return $Result;
	}

}



 ?>
