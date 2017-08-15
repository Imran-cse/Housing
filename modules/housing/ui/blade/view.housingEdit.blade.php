<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingEditbao.php';


$_HousingEditBAO = new HousingEditBAO();
$_DB = DBUtil::getInstance();


if(isset($_GET['edit']))
{
	$Housing = new Housing();	
	$Housing->setID($_GET['edit']);	
	$getROW = $_HousingEditBAO->readHousing($Housing)->getResultObject(); //reading the Housing object from the result object
}

/*updating an existing Housing information*/
if(isset($_POST['update']))
{
	$Housing = new Housing();	

    $Housing->setID ($_GET['edit']);
    $Housing->setName( $_POST['txtHousing'] );
    //$Housing->setTypeId($_POST['txtType']);
    $Housing->setFloor($_POST['txtFloor']);
    $Housing->setRoom($_POST['txtRoom']);
    $Housing->setProvost($_POST['txtProvost']);
    $Housing->setAssProvost($_POST['txtAssProvost']);
    $Housing->setOfficer($_POST['txtOfficer']);
    $Housing->setDescription($_POST['txtDescription']);
    $Housing->setWorkers($_POST['txtWorkers']);
	
	$_HousingEditBAO->updateHousing($Housing);

	header("Location:".PageUtil::$HOUSING_EDIT);
}



echo '<br> log:: exit view.housingEdit.blade.php';

?>