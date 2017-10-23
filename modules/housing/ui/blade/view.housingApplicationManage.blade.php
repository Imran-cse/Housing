<?php
include_once UTILITY.'class.util.php';
include_once COMMON.'class.common.php';
include_once MODULES_HOUSING_BAO.'class.housingApplicationManagebao.php';

$_HousingApplicationManageBAO = new HousingApplicationManageBAO();
$_DB = DBUtil::getInstance();
$globalUser = '';
$globalUser = $_SESSION["globalUser"];
$Result = new Result();

//saving a new application
if(isset($_POST['apply'])){
	$HousingApplication = new HousingApplication();
	$HousingApplication->setId(Util::getGUID());
	$HousingApplication->setUserId($globalUser->getID());
	//$HousingApplication->setReceiverDepartment($_DB->secureinput($_POST['txtReceiverDepartment']));
	$HousingApplication->setTemplateId($_SESSION["aid"]);
	$HousingApplication->setBody($_DB->secureinput($_POST['body']));
	$HousingApplication->setDate($_DB->secureinput(date("Y/m/d")));

	$Result = $_HousingApplicationManageBAO->createApplication($HousingApplication);

 	

}
