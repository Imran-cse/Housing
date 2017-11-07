<?php
// write dao object for each class

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_DAO.'class.housingdao.php';

Class HousingRoomDAO{

	private $_DB;
	private $_HousingRoom;
	
	function __construct(){

		$this->_DB = DBUtil::getInstance();
		$this->_HousingRoom= new HousingRoom();
		

	}

	// get all the Housing from the database using the database query
	public function getAllHousingRoom($hid){

		$HousingRoomList = array();

		$this->_DB->doQuery("SELECT * FROM hms_room WHERE house_id = '".$hid."' ORDER BY room_no ASC");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_HousingRoom = new HousingRoom();

		    $this->_HousingRoom->setRoomId ( $row['room_id']);
		    $this->_HousingRoom->setRoomNo( $row['room_no'] );
		    $this->_HousingRoom->setHouseId( $row['house_id'] );
		    $this->_HousingRoom->setNoOfSeat( $row['no_of_seat'] );
		    


		    $HousingRoomList[]=$this->_HousingRoom;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingRoomList);

		return $Result;
	}
	

	public function getNameFromId($HousingId){

		$SQL = "SELECT * FROM hms_housing WHERE id='".$HousingId."'";
		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_Housing = new Housing();

		$this->_Housing->setID ( $row['id']);
		$this->_Housing->setName( $row['name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Housing);

		return $Result;
	}


	//create Housing Room funtion with the Housing object
	public function createHousingRoom($HousingRoom){

		$RoomId=$HousingRoom->getRoomId();
		$RoomNo=$HousingRoom->getRoomNo();
		$HousingId=$HousingRoom->getHouseId();
		$Seat=$HousingRoom->getNoOfSeat();
		
	

		$SQL = "INSERT INTO hms_room (room_id,room_no,house_id,no_of_seat) 
				VALUES('$RoomId','$RoomNo','$HousingId','$Seat')";

		$SQL = $this->_DB->doQuery($SQL);		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	


	//read an Housing Room object based on its id form Housing object
	public function readHousingRoom($HousingRoom){
		
		
		$SQL = "SELECT * FROM hms_room WHERE room_id='".$HousingRoom->getRoomId()."'";
		$this->_DB->doQuery($SQL);


		//reading the top row for this Housing Room from the database
		$row = $this->_DB->getTopRow();

		$this->_HousingRoom= new HousingRoom();

		//preparing the Housing Room object
	    $this->_HousingRoom->setRoomId ( $row['room_id']);
	    $this->_HousingRoom->setRoomNo( $row['room_no'] );
	    $this->_HousingRoom->setHouseId( $row['house_id'] );
	    $this->_HousingRoom->setNoOfSeat( $row['no_of_seat'] );
	    




	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_HousingRoom);

		return $Result;
	}

	

	//delete an Housing Room based on its id of the database
	public function deleteHousingRoom($HousingRoom){

		
		$SQL = "DELETE from hms_room where room_id ='".$HousingRoom->getRoomId()."'";
		
		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

}

?>