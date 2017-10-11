<?php
// write dao object for each class

include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';
include_once UTILITY.'class.util.php';

Class HousingSearchDAO{

	private $_DB;
	

	function __construct(){

		$this->_DB = DBUtil::getInstance();		

	}
	
	public function getHousingNameFromId($id)
	{
		$SQL = "SELECT * FROM hms_housing WHERE id='".$id."'";
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

	//search an user object based on some criteria
	public function searchUser($SearchField,$SearchText){
		
		$Room = array();
		$SQL = "SELECT DISTINCT r.* FROM tbl_User u,hms_assign a,hms_room r WHERE u.ID=a.user_id AND r.room_id=a.room_id AND u.".$SearchField." Like '$SearchText'";


		$this->_DB->doQuery($SQL);
		
		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];

		    $this->_Room = new HousingRoom();

		    $this->_Room->setRoomId ( $row['room_id']);
		    $this->_Room->setRoomNo ( $row['room_no'] );
		    $this->_Room->setHouseId ( $row['house_id'] );


		    

		    $Room[]=$this->_Room;
   
		}

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($Room);

		return $Result;
	}
}

echo '<br> log:: exit the class.housingSearchdao.php';

?>