<?php
include_once UTILITY.'class.util.php';
include_once COMMON.'class.common.php';
include_once MODULES_HOUSING_BAO.'class.housingApplicationManagebao.php';

$_HousingApplicationManageBAO = new HousingApplicationManageBAO();
$globalUser = '';
$globalUser = $_SESSION["globalUser"];
$Result = new Result();

