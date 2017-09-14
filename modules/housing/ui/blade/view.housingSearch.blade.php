<?php

include_once './util/class.util.php';
include_once '/../../bao/class.housingSearchbao.php';


$_HousingSearchBAO = new HousingSearchBAO();

$_DB = DBUtil::getInstance();

if(isset($_POST['search']))
{

	if(isset($_POST['txtHousing']))
	{	   
		$Housing = $_POST['txtHousing'];
	}

	if(isset($_POST['selectedField']))
	{	   
		$SearchField = $_POST['selectedField'];
	}

	if(isset($_POST['txtSearch']))
	{	   
		$SearchText = $_DB->secureInput($_POST['txtSearch']);

		$ResultSearch = $_HousingSearchBAO->searchUser( $Housing, $SearchField, $SearchText);		
	}	
		
}









echo '<br> log:: exit view.housingSearchbao.blade.php';

?>