<?php
include_once './util/class.util.php';
include_once '/../../bao/class.housingRoomAssignbao.php';



$_HousingRoomAssignBAO = new HousingRoomAssignBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing Room Assign account*/
if(isset($_POST['save']))
{
	
	$HousingRoomAssign = new HousingRoomAssign();
	$HousingRoomAssign->setHouseId($_GET['h_id']);	
    $HousingRoomAssign->setRoomId($_GET['r_id']);
    if(isset($_POST['txtUser'])){ 
	
		$HousingRoomAssign->setUserId($_POST['txtUser']);
	}
     
	$_HousingRoomAssignBAO->createHousingRoomAssign($HousingRoomAssign);		 
}


/* deleting an existing Housing Room Assign */
if(isset($_GET['del']) && isset($_GET['h_id']))
{
	$HousingRoomAssign = new HousingRoomAssign();	
	$HousingRoomAssign->setUserid($_GET["del"]);	
	$_HousingRoomAssignBAO->deleteHousingRoomAssign($HousingRoomAssign); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING_ROOM_ASSIGN."?h_id=".$_GET['h_id']. "&r_id=".$_GET['r_id']);
}





if(isset($_GET['view']))
{
	$HousingRoomAssign = new HousingRoomAssign();	
	$HousingRoomAssign->setHouseId($_GET['view']);	
	$getROW = $_HousingRoomAssignBAO->readHousingRoomAssign($HousingRoomAssign)->getResultObject(); //reading the Housing Room Assign object from the result object

}





echo '<br> log:: exit view.housingRoomAssign.blade.php';