<?php

include_once UTILITY.'class.util.php';
include_once MODULES_HOUSING_BAO.'class.housingSearchbao.php';


$_HousingSearchBAO = new HousingSearchBAO();

$_DB = DBUtil::getInstance();

if(isset($_POST['search']))
{


	if(isset($_POST['selectedField']))
	{	   
		$SearchField = $_POST['selectedField'];
	}

	if(isset($_POST['txtSearch']))
	{	   
		$SearchText = $_DB->secureInput($_POST['txtSearch']);

		$ResultSearch = $_HousingSearchBAO->searchUser($SearchField, $SearchText);		
	}	
		
}


?>