<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_BAO.'class.housingbao.php';
include_once MODULES_HOUSING_BAO.'class.housingTypebao.php';

$_HousingBAO = new HousingBAO();
$_HousingTypeBAO = new HousingTypeBAO();
$_DB = DBUtil::getInstance();


/* saving a new Housing account*/
if(isset($_POST['save']))
{
	 
	 $Housing = new Housing();	
	 $Housing->setID(Util::getGUID());
     $Housing->setName($_DB->secureInput($_POST['txtHousing']));
     $Housing->setFloor($_DB->secureInput($_POST['txtFloor']));
     $Housing->setRoom($_DB->secureInput($_POST['txtRoom']));
     

   if(isset($_POST['txtType'])){ 
	
		$Housing->setTypeId($_POST['txtType']);
	}
	$_HousingBAO->createHousing($Housing);		 
}


/* deleting an existing Housing */
if(isset($_GET['del']))
{

	$Housing = new Housing();	
	$Housing->setID($_GET['del']);	
	$_HousingBAO->deleteHousing($Housing); //reading the Housing object from the result object

	header("Location:".PageUtil::$HOUSING);
}

if(isset($_GET['view']))
{
	$Housing = new Housing();	
	$Housing->setID($_GET['view']);	
	$getROW = $_HousingBAO->readHousing($Housing)->getResultObject(); //reading the Housing object from the result object

}
/* reading an existing Housing information */
if(isset($_GET['edit']))
{
	$Housing = new Housing();	
	$Housing->setID($_GET['edit']);	
	$getROW = $_HousingBAO->readHousing($Housing)->getResultObject(); //reading the Housing object from the result object
}



/*updating an existing Housing information*/
if(isset($_POST['update']))
{
	$Housing = new Housing();	

    $Housing->setID ($_GET['edit']);
    $Housing->setName( $_POST['txtHousing'] );
    
    $Housing->setFloor($_POST['txtFloor']);
    $Housing->setRoom($_POST['txtRoom']);
   
	
	$_HousingBAO->updateHousing($Housing);

	header("Location:".PageUtil::$HOUSING);
}



echo '<br> log:: exit blade.housing.blade.php';

?>