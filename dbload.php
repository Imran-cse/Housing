<?php
include_once 'path.php';

include_once UTILITY.'/class.util.php';
include_once UTILITY.'/class.database.php';

$sql = "CREATE TABLE hms_room (
rid varchar(255) NOT NULL PRIMARY KEY,
hid varchar(255)
)ENGINE=InnoDB";

$db = new QueryToTable(UTILITY."/class.database.php");
$db->saveTableInDB($sql); // loading and then saving in the database


?>
