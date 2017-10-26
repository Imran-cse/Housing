<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingApplicationManagedao.php';

class HousingApplicationManageBAO
{
	private $_HousingApplicationManageDAO;

	function __construct(){
		$this->_HousingApplicationManageDAO = new HousingApplicationManageDAO();
	}

	
	public function getAllApplication(){

		$Result = new Result();
		$Result = $this->_HousingApplicationManageDAO->getAllApplication();

		if(!$Result->getIsSuccess())
			$Result->setResultObject("Database failure in HousingApplicationDAO.getAllApplication()");

		return $Result;
	}

	public function getUserName($User){
        $Result=$this->_HousingApplicationManageDAO->getUserName($User);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }
    public function getTempaleSubjectById($ApplicationTemplate)
    {
    	$Result=$this->_HousingApplicationManageDAO->getTempaleSubjectById($ApplicationTemplate);

        if (!$Result->getIsSuccess()){
            $Result->setResultObject("Failed");
        }

        return $Result;
    }

	
}