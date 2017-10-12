<?php
include_once UTILITY.'class.util.php';
include_once COMMON.'class.common.php';
include_once MODULES_HOUSING_BAO.'class.applicationTemplatebao.php';

$_ApplicationTemplateBAO = new ApplicationTemplateBAO();
$_DB = DBUtil::getInstance();
$Result = new Result();

//saving a new application
if(isset($_POST['create'])){
	$ApplicationTemplate = new ApplicationTemplate();
	$ApplicationTemplate->setId(Util::getGUID());
	$ApplicationTemplate->setReceiver($_DB->secureinput($_POST['receiver']));
	$ApplicationTemplate->setSubject($_DB->secureinput($_POST['subject']));
	$ApplicationTemplate->setBody($_DB->secureinput($_POST['body']));

	$_ApplicationTemplateBAO->createApplicationTemplate($ApplicationTemplate);
}

if(isset($_GET['edit']))
{
	$ApplicationTemplate = new ApplicationTemplate();
	$ApplicationTemplate->setId($_GET['edit']);
	$getROW = $_ApplicationTemplateBAO->readApplicationTemplate($ApplicationTemplate)->getResultObject(); 
}

if(isset($_POST['update']))
{
	$ApplicationTemplate = new ApplicationTemplate();

    $ApplicationTemplate->setId ($_GET['edit']);
    $ApplicationTemplate->setReceiver( $_POST['receiver'] );
    $ApplicationTemplate->setSubject( $_POST['subject'] );
    $ApplicationTemplate->setBody( $_POST['body'] );

	$_ApplicationTemplateBAO->updateApplicationTemplate($ApplicationTemplate);

	header("Location:".PageUtil::$APPLICATION_TEMPLATE);
}

if(isset($_GET['del']))
{

	$ApplicationTemplate = new ApplicationTemplate();
	$ApplicationTemplate->setId($_GET['del']);
	$_ApplicationTemplateBAO->deleteApplicationTemplate($ApplicationTemplate); 

	header("Location:".PageUtil::$APPLICATION_TEMPLATE);
}
