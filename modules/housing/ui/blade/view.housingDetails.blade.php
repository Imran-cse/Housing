<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingDetailsbao.php';


$_HousingDetailsBAO = new HousingDetailsBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing account*/
if(isset($_POST['provostSave']))
{
	 
	 $HousingProvost = new HousingProvost();	
	 $HousingProvost->setID(Util::getGUID());
     $HousingProvost->setHousingId($_GET['view']);
     $HousingProvost->setProvost($_DB->secureInput($_POST['txtProvost']));
   
	 $_HousingDetailsBAO->createHousingProvost($HousingProvost);		 
}

if(isset($_POST['assProvostSave']))
{
	 
	 $HousingAssistantProvost = new HousingAssistantProvost();	
	 $HousingAssistantProvost->setID(Util::getGUID());
     $HousingAssistantProvost->setHousingId($_GET['view']);
     $HousingAssistantProvost->setAssProvost($_DB->secureInput($_POST['txtAssProvost']));
   
	 $_HousingDetailsBAO->createHousingAssProvost($HousingAssistantProvost);		 
}

if(isset($_POST['employeeSave']))
{
	 
	 $HousingEmployee = new HousingEmployee();	
	 $HousingEmployee->setID(Util::getGUID());
     $HousingEmployee->setHousingId($_GET['view']);
     $HousingEmployee->setOfficer($_DB->secureInput($_POST['txtOfficer']));
   
	 $_HousingDetailsBAO->createHousingEmployee($HousingEmployee);		 
}





/* deleting an existing Housing */
if(isset($_GET['provostDel']) && isset($_GET['view']))
{

	$HousingProvost = new HousingProvost();	
	$HousingProvost->setID($_GET['provostDel']);	
	$_HousingDetailsBAO->deleteHousingProvost($HousingProvost); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING_DETAIL."?h_id=".$_GET['view']. "&view=".$_GET['view']);
}

if(isset($_GET['assProvostDel']) && isset($_GET['view']))
{

	$HousingAssistantProvost = new HousingAssistantProvost();	
	$HousingAssistantProvost->setID($_GET['assProvostDel']);	
	$_HousingDetailsBAO->deleteHousingAssistantProvost($HousingAssistantProvost); 

	header("Location:".PageUtil::$HOUSING_DETAIL."?h_id=".$_GET['view']. "&view=".$_GET['view']);
}

if(isset($_GET['employeeDel']) && isset($_GET['view']))
{

	$HousingEmployee = new HousingEmployee();	
	$HousingEmployee->setID($_GET['employeeDel']);	
	$_HousingDetailsBAO->deleteHousingEmployee($HousingEmployee); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING_DETAIL."?h_id=".$_GET['view']. "&view=".$_GET['view']);
}









echo '<br> log:: exit view.HousingDetails.blade.php';

?>