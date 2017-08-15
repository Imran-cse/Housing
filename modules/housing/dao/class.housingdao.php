<?php
// write dao object for each class

include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './util/class.util.php';
include_once 'class.housingTypedao.php';

Class HousingDAO{

	private $_DB;
	private $_Type;

	function HousingDAO(){

		$this->_DB = DBUtil::getInstance();
		$this->_Type = new housingType();

	}

	// get all the Housing from the database using the database query
	public function getAllHousing(){

		$HousingList = array();

		$this->_DB->doQuery("SELECT * FROM hms_housing");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_Housing = new Housing();

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


		    $HousingList[]=$this->_Housing;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingList);

		return $Result;
	}
	// get all the Housing Type from the database using the database query
	public function getAllHousingTypes(){

		$HousingTypeList = array();

		$this->_DB->doQuery("SELECT * FROM hms_type");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_HousingType = new HousingType();

		    $this->_HousingType->setID ( $row['id']);
		    $this->_HousingType->setName( $row['name'] );


		    $HousingTypeList[]=$this->_HousingType;

		}
        
		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingTypeList);

		return $Result;
	}

	public function getNameFromTypeID($TypeID){

		$SQL = "SELECT * FROM hms_type WHERE id='".$TypeID."'";
		$SQL = $this->_DB->doQuery($SQL);

		$row = $this->_DB->getTopRow();

		$this->_HousingType = new HousingType();

		$this->_HousingType->setID ( $row['id']);
		$this->_HousingType->setName( $row['name'] );
		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_HousingType);

		return $Result;
	}


	//create Housing funtion with the Housing object
	public function createHousing($Housing){

		$ID=$Housing->getID();
		$Name=$Housing->getName();
		$Type=$Housing->getTypeId();
		$Floor=$Housing->getFloor();
		$Room=$Housing->getRoom();
		$Provost=$Housing->getProvost();
		$AssProvost=$Housing->getAssProvost();
		$Officer=$Housing->getOfficer();
		$Description=$Housing->getDescription();
		$Workers=$Housing->getWorkers();
	

		$SQL = "INSERT INTO hms_housing (id,name,type_id,no_of_floor,no_of_room,provost,ass_provost,officer,description,no_of_workers) 
				VALUES('$ID','$Name','$Type','$Floor','$Room','$Provost','$AssProvost','$Officer','$Description','$Workers')";

		$SQL = $this->_DB->doQuery($SQL);		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	//read Housing Type funtion with the Housing Type object

	public function readHousingType($HousingType){
		
		
		$SQL = "SELECT t.id,t.name FROM hms_housing as h,hms_type as t 
				WHERE h.type_id='".$HousingType."'";
		$this->_DB->doQuery($SQL);

		//reading the top row for this Housing Type from the database
		$row = $this->_DB->getTopRow();

		$this->_HousingType= new HousingType();

		//preparing the Housing Type object
	    $this->_HousingType->setID ( $row['id']);
	    $this->_HousingType->setName( $row['name'] );



	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_HousingType);

		return $Result;
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
				no_of_workers='".$Housing->getWorkers()."'
				WHERE id='".$Housing->getID()."'";

		
		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

	//delete an Housing based on its id of the database
	public function deleteHousing($Housing){


		$SQL = "DELETE from hms_housing where id ='".$Housing->getID()."'";
	
		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

}

echo '<br> log:: exit the class.housingdao.php';

?>