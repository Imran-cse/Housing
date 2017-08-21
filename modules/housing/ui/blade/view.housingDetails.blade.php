<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingDetailsbao.php';


$_HousingDetailsBAO = new HousingDetailsBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing account*/
if(isset($_POST['save']))
{
	 
	 $HousingDetails = new HousingDetails();	
	 $HousingDetails->setID(Util::getGUID());
     $HousingDetails->setHousingId($_GET['view']);
     $HousingDetails->setProvost($_DB->secureInput($_POST['txtProvost']));
     $HousingDetails->setAssProvost($_DB->secureInput($_POST['txtAssProvost']));
     $HousingDetails->setOfficer($_DB->secureInput($_POST['txtOfficer']));
     $HousingDetails->setDescription($_DB->secureInput($_POST['txtDescription']));
     $HousingDetails->setWorkers($_DB->secureInput($_POST['txtWorkers']));
     

	 $_HousingDetailsBAO->createHousingDetails($HousingDetails);		 
}


/* deleting an existing Housing */
if(isset($_GET['del']) && isset($_GET['view']))
{

	$HousingDetails = new HousingDetails();	
	$HousingDetails->setID($_GET['del']);	
	$_HousingDetailsBAO->deleteHousingDetails($HousingDetails); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING_DETAIL."?h_id=".$_GET['view']);
}

if(isset($_GET['view']))
{
	$HousingDetails = new HousingDetails();	
	$HousingDetails->setID($_GET['view']);	
	$getROW = $_HousingDetailsBAO->readHousingDetails($HousingDetails)->getResultObject(); //reading the Housing object from the result object

}







echo '<br> log:: exit view.HousingDetails.blade.php';

?>