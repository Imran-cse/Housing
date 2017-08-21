<?php
// write dao object for each class

include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './util/class.util.php';
include_once 'class.housingdao.php';

Class HousingDetailsDAO{

	private $_DB;
	private $_HousingDetails;

	function HousingDetailsDAO(){

		$this->_DB = DBUtil::getInstance();
		$this->_HousingDetails= new HousingDetails();

	}

	// get all the Housing from the database using the database query
	public function getAllHousingDetails(){

		$HousingDetailsList = array();
		$h_id = $_GET['h_id'];
		$this->_DB->doQuery("SELECT * FROM hms_housing_details WHERE housing_id = '".$h_id."'");

		$rows = $this->_DB->getAllRows();

		for($i = 0; $i < sizeof($rows); $i++) {
			$row = $rows[$i];
			$this->_HousingDetails = new HousingDetails();

		    $this->_HousingDetails->setID ( $row['id']);
		    $this->_HousingDetails->setHousingId( $row['housing_id'] );
		    $this->_HousingDetails->setProvost( $row['provost'] );
		    $this->_HousingDetails->setAssProvost( $row['ass_provost'] );
		    $this->_HousingDetails->setOfficer( $row['officer'] );
		    $this->_HousingDetails->setDescription( $row['description'] );
		    $this->_HousingDetails->setWorkers( $row['no_of_workers'] );
		    


		    $HousingDetailsList[]=$this->_HousingDetails;
   
		}

		//todo: LOG util with level of log


		$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($HousingDetailsList);

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
	


	//create Housing Details funtion with the Housing object
	public function createHousingDetails($HousingDetails){

		$Id=$HousingDetails->getID();
		
		$HousingId=$HousingDetails->getHousingId();
		$Provost=$HousingDetails->getProvost();
		$AssProvost=$HousingDetails->getAssProvost();
		$Officer=$HousingDetails->getOfficer();
		$Description=$HousingDetails->getDescription();
		$Workers=$HousingDetails->getWorkers();
		
	

		$SQL = "INSERT INTO hms_housing_details (id,housing_id,provost,ass_provost,officer,description,no_of_workers) 
				VALUES('$Id','$HousingId','$Provost','$AssProvost','$Officer','$Description','$Workers')";

		$SQL = $this->_DB->doQuery($SQL);		
		
	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;
	}

	


	//read an Housing Details object based on its id form Housing object
	public function readHousingDetails($HousingDetails){
		
		
		$SQL = "SELECT * FROM hms_housing_details WHERE housing_id='".$_GET['view']."'";
		$this->_DB->doQuery($SQL);


		//reading the top row for this Housing Details from the database
		$row = $this->_DB->getTopRow();

		$this->_HousingDetails= new HousingDetails();

		//preparing the Housing Details object
	    $this->_HousingDetails->setID ( $row['id']);
	    $this->_HousingDetails->setHousingId( $row['housing_id'] );
	    $this->_HousingDetails->setProvost( $row['provost'] );
	    $this->_HousingDetails->setAssProvost( $row['ass_provost'] );
	    $this->_HousingDetails->setOfficer( $row['officer'] );
	    $this->_HousingDetails->setDescription( $row['description'] );
	    $this->_HousingDetails->setWorkers( $row['no_of_workers'] );
    




	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($this->_HousingDetails);

		return $Result;
	}

	

	//delete an Housing Details based on its id of the database
	public function deleteHousingDetails($HousingDetails){


		$SQL = "DELETE from hms_housing_details where id ='".$HousingDetails->getID()."'";
	
		$SQL = $this->_DB->doQuery($SQL);

	 	$Result = new Result();
		$Result->setIsSuccess(1);
		$Result->setResultObject($SQL);

		return $Result;

	}

}

echo '<br> log:: exit the class.housingDetailsdao.php';

?>