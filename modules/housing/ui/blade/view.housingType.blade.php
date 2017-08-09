<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingTypebao.php';


$_HousingTypeBAO = new HousingTypeBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing Type account*/
if(isset($_POST['save']))
{
	 $HousingType = new HousingType();
	 $HousingType->setID(Util::getGUID());
     $HousingType->setName($_DB->secureInput($_POST['txtType']));
	 $_HousingTypeBAO->createHousingType($HousingType);
}


/* deleting an existing Housing Type */
if(isset($_GET['del']))
{

	$HousingType = new HousingType();
	$HousingType->setID($_GET['del']);
	$_HousingTypeBAO->deleteHousingType($HousingType); //reading the Housing Type object from the result object

	header("Location:".PageUtil::$HOUSING_TYPE);
}


/* reading an existing Housing Type information */
if(isset($_GET['edit']))
{
	$HousingType = new HousingType();
	$HousingType->setID($_GET['edit']);
	$getROW = $_HousingTypeBAO->readHousingType($HousingType)->getResultObject(); //reading the Housing Type object from the result object
}

/*updating an existing Housing Type information*/
if(isset($_POST['update']))
{
	$HousingType = new HousingType();

    $HousingType->setID ($_GET['edit']);
    $HousingType->setName( $_POST['txtCat'] );

	$_HousingTypeBAO->updateHousingType($HousingType);

	header("Location:".PageUtil::$HOUSING_TYPE);
}





?>
