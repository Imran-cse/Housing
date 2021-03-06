<?php
//defining the system paths

define('ROOTPATH', __DIR__);
define('COMMON', ROOTPATH.'/common/');
define('CONFIG', ROOTPATH.'/config/');
define('LANGUAGE', ROOTPATH.'/lang/');
define('LOG', ROOTPATH.'/logs/');
define('MODULES', ROOTPATH.'/modules/');
define('RESOURCES', ROOTPATH.'/resources/');
define('TEMPLATE', ROOTPATH.'/template/');
define('UTILITY', ROOTPATH.'/util/');

//modules path
define('MODULES_DASHBOARD',MODULES.'/dashboard/');
define('MODULES_USER',MODULES.'/user/');
define('MODULES_FORUM',MODULES.'/forum/');
define('MODULES_HALL',MODULES.'/hall/');
define('MODULES_HOUSING_BAO',MODULES.'/housing/bao/');
define('MODULES_HOUSING_DAO',MODULES.'/housing/dao/');
define('MODULES_HOUSING_BLADE',MODULES.'/housing/ui/blade/');

define('MODULES_APPLICATION_BAO',MODULES.'/application/bao/');
define('MODULES_APPLICATION_DAO',MODULES.'/application/dao/');
define('MODULES_APPLICATION_BLADE',MODULES.'/application/ui/blade/');

?>