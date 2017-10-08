<?php
include_once UTILITY.'class.util.php';
include_once COMMON.'class.common.php';
include_once MODULES_HOUSING_BAO.'class.housingApplicationbao.php';

$_HousingApplicationBAO = new HousingApplicationBAO();
$_DB = DBUtil::getInstance();
$globalUser = '';
$globalUser = $_SESSION["globalUser"];
$Result = new Result();

//saving a new application
if(isset($_POST['save'])){
	$HousingApplication = new HousingApplication();
	$HousingApplication->setId(Util::getGUID());
	if(isset($_POST['discipline'])){ 
	
		$HousingApplication->setDiscipline($_POST['discipline']);
	}
	$HousingApplication->setUserId($globalUser->getID());
	$HousingApplication->setReceiver($_DB->secureinput($_POST['receiver']));
	$HousingApplication->setSubject($_DB->secureinput($_POST['subject']));
	$HousingApplication->setDescription($_DB->secureinput($_POST['description']));
	$HousingApplication->setStatus(0);
	$HousingApplication->setDate(date("Y/m/d"));

	$_HousingApplicationBAO->createApplication($HousingApplication);
}
