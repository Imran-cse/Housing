<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingRoombao.php';
include_once '/../../bao/class.housingbao.php';

$_HousingBAO = new HousingBAO();
$_HousingRoomBAO = new HousingRoomBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing Room account*/
if(isset($_POST['save']))
{
	 
	$HousingRoom = new HousingRoom();	
	$HousingRoom->setRoomId(Util::getGUID());
    $HousingRoom->setRoomNo($_DB->secureInput($_POST['txtRoomNo']));
    $HousingRoom->setHouseId($_GET['view']);
    $HousingRoom->setNoOfSeat($_DB->secureInput($_POST['txtSeat']));
     
	$_HousingRoomBAO->createHousingRoom($HousingRoom);		 
}


/* deleting an existing Housing Room */
if(isset($_GET['del']))
{

	$HousingRoom = new HousingRoom();	
	$HousingRoom->setRoomId($_GET['del']);	
	$_HousingRoomBAO->deleteHousingRoom($HousingRoom); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING_ROOM);
}
if(isset($_GET['view']))
{
	$HousingRoom = new HousingRoom();	
	$HousingRoom->setRoomId($_GET['view']);	
	$getROW = $_HousingRoomBAO->readHousingRoom($HousingRoom)->getResultObject(); //reading the Housing Room object from the result object

}



echo '<br> log:: exit view.housingRoom.blade.php';

?>