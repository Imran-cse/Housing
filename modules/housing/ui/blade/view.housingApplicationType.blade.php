<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingApplicationTypebao.php';


$_HousingApplicationTypeBAO = new HousingApplicationTypeBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing Type account*/
if(isset($_POST['save']))
{
	 $HousingApplicationType = new HousingApplicationType();
	 $HousingApplicationType->setID(Util::getGUID());
     $HousingApplicationType->setName($_DB->secureInput($_POST['txtType']));
	 $_HousingApplicationTypeBAO->createHousingApplicationType($HousingApplicationType);
}


/* deleting an existing Housing Type */
if(isset($_GET['del']))
{

	$HousingApplicationType = new HousingApplicationType();
	$HousingApplicationType->setID($_GET['del']);
	$_HousingApplicationTypeBAO->deleteHousingApplicationType($HousingApplicationType); //reading the Housing Type object from the result object

	header("Location:".PageUtil::$HOUSING_APPLICATION_TYPE);
}


/* reading an existing Housing Type information */
if(isset($_GET['edit']))
{
	$HousingApplicationType = new HousingApplicationType();
	$HousingApplicationType->setID($_GET['edit']);
	$getROW = $_HousingApplicationTypeBAO->readHousingApplicationType($HousingApplicationType)->getResultObject(); //reading the Housing Type object from the result object
}

/*updating an existing Housing Type information*/
if(isset($_POST['update']))
{
	$HousingApplicationType = new HousingApplicationType();

    $HousingApplicationType->setID ($_GET['edit']);
    $HousingApplicationType->setName( $_POST['txtType'] );

	$_HousingApplicationTypeBAO->updateHousingApplicationType($HousingApplicationType);

	header("Location:".PageUtil::$HOUSING_APPLICATION_TYPE);
}