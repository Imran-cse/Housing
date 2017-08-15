<?php
// write dao object for each class

include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './util/class.util.php';


Class HousingEditDAO{

	private $_DB;
	

	function HousingEditDAO(){

		$this->_DB = DBUtil::getInstance();
		

	}

	//read an Housing object based on its id form Housing object
	public function readHousing($Housing){
		
		
		$SQL = "SELECT * FROM hms_housing WHERE id='".$Housing->getID()."'";
		$this->_DB->doQuery($SQL);

		//reading the top row for this Housing from the database
		$row = $this->_DB->getTopRow();

		$this->_Housing= new Housing();

		//preparing the Housing object
	    $this->_Housing->setID ( $row['id']);
	    $this->_Housing->setName( $row['name'] );
	    $this->_Housing->setTypeId( $row['type_id'] );
	    $this->_Housing->setFloor( $row['no_of_floor'] );
	    $this->_Housing->setRoom( $row['no_of_room'] );
	    $this->_Housing->setProvost( $row['provost'] );
	    $this->_Housing->setAssProvost( $row['ass_provost'] );
	    $this->_Housing->setOfficer( $row['officer'] );
	    $this->_Housing->setDescription( $row['description'] );
	    $this->_Housing->setWorkers( $row['no_of_workers'] );




	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_Housing);

		return $Result;
	}

	
	

	//update an Housing object based on its 
	public function updateHousing($Housing){

		$SQL = "UPDATE hms_housing SET name='".$Housing->getName()."',
				
				no_of_floor = '".$Housing->getFloor()."',
				no_of_room = '".$Housing->getRoom()."',
				provost = '".$Housing->getProvost()."',
				ass_provost = '".$Housing->getAssProvost()."',
				officer = '".$Housing->getOfficer()."',
				description='".$Housing->getDescription()."',
				no_of_workers='".$Housing->getWorkers()."'
				WHERE id='".$Housing->getID()."'";

		$this->_DB->getConnection()->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}


}

echo '<br> log:: exit the class.housingdao.php';

?>