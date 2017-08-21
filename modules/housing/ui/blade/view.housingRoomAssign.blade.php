/*
include_once './util/class.util.php';
include_once '/../../bao/class.housingRoomAssignbao.php';



$_HousingRoomAssignBAO = new HousingRoomAssignBAO();
$_DB = DBUtil::getInstance();

/* saving a new Housing Room Assign account*/
if(isset($_POST['save']))
{
	 
	$HousingRoomAssign = new HousingRoomAssign();
	$HousingRoomAssign->setHouseId($_GET['h_id']);	
    $HousingRoomAssign->setRoomNo($_GET['view']);
    if(isset($_POST['txtstudent'])){ 
	
		$HousingRoomAssign->setUserid($_POST['txtstudent']);
	}
     
	$_HousingRoomAssignBAO->createHousingRoomAssign($HousingRoomAssign);		 
}


/* deleting an existing Housing Room Assign */
if(isset($_GET['del']) andsymbol isset($_GET['view']))
{
	$HousingRoomAssign = new HousingRoomAssign();	
	$HousingRoomAssign->setUserid($_GET["del"]);	
	$_HousingRoomAssignBAO->deleteHousingRoomAssign($HousingRoomAssign); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING_ROOM_ASSIGN."?h_id=".$_GET['view']."?r_id"=.$_GET['r_id']);
}





if(isset($_GET['view']))
{
	$HousingRoomAssign = new HousingRoomAssign();	
	$HousingRoomAssign->setHouseId($_GET['view']);	
	$getROW = $_HousingRoomAssignBAO->readHousingRoomAssign($HousingRoomAssign)->getResultObject(); //reading the Housing Room Assign object from the result object

}





echo '<br> log:: exit view.housingRoomAssign.blade.php';*/