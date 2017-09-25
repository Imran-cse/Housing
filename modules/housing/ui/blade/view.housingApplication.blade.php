<?php
include_once './util/class.util.php';
include_once '/../../bao/class.housingApplicationTypebao.php';
include_once '/../../bao/class.housingApplicationbao.php';

$_HousingApplicationTypeBAO = new HousingApplicationTypeBAO();
$_HousingApplicationBAO = new HousingApplicationBAO();
$_DB = DBUtil::getInstance();
$globalUser = '';
$globalUser = $_SESSION["globalUser"];

//saving a new application
if(isset($_POST['save'])){
	$HousingApplication = new HousingApplication();
	$HousingApplication->setId(Util::getGUID());
	if(isset($_POST['discipline'])){ 
	
		$HousingApplication->setDiscipline($_POST['discipline']);
	}
	if(isset($_POST['applicationType'])){ 
	
		$HousingApplication->setApplicationTypeId($_POST['applicationType']);
	}
	$HousingApplication->setUserId($globalUser->getID());
	$HousingApplication->setStatus(0);
	$HousingApplication->setDate(date("Y/m/d"));

	$_HousingApplicationBAO->createApplication($HousingApplication);	
}
