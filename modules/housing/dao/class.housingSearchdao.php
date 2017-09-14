<?php
// write dao object for each class

include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './util/class.util.php';

Class HousingSearchDAO{

	private $_DB;
	

	function HousingSearchDAO(){

		$this->_DB = DBUtil::getInstance();		

	}
	
	public function getAllHousingName()
	{
		$HousingList = array();

		$this->_DB->doQuery("SELECT * FROM hms_housing");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Housing = new Housing();

		    $this->_Housing->setID ( $row['id']);
		    $this->_Housing->setName( $row['name'] );
		    
		    

		    $HousingList[]=$this->_Housing;
   
		}

		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingList);

		return $Result;
	}

	//search an user object based on some criteria
	public function searchUser($Housing,$SearchField,$SearchText){
		
		$Room = array();
		$SQL = "SELECT DISTINCT r.room_no FROM tbl_User u,hms_assign a,hms_room r WHERE u.ID=a.user_id AND 
				a.house_id='$Housing' AND r.room_id=a.room_id AND u.".$SearchField." Like '$SearchText'";


		$this->_DB->doQuery($SQL);
		
		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];

		    $this->_Room = new HousingRoom();

		    //$this->_Room->setRoomId ( $row['room_id']);
		    $this->_Room->setRoomNo ( $row['room_no'] );   
		    

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