<?php
include_once 'path.php';

include_once UTILITY.'/class.util.php';
include_once UTILITY.'/class.database.php';

///util/class.database.php-> QueryTable()
$db = new QueryToTable();


//Table structure for table `hms_type`

$sql = "CREATE TABLE hms_type (
  id varchar(128) NOT NULL,
  name varchar(128) NOT NULL,
  PRIMARY KEY (id)
)ENGINE=InnoDB";

$db->saveTableInDB($sql); 

//Table structure for table `hms_housing`

$sql = "CREATE TABLE hms_housing (
  id varchar(40) NOT NULL,
  name varchar(40) NOT NULL,
  type_id varchar(128) NOT NULL,
  no_of_floor int(11) NOT NULL,
  no_of_room int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (type_id) REFERENCES hms_type(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB";

$db->saveTableInDB($sql);


// Table structure for table `hms_room`


$sql = "CREATE TABLE hms_room (
  room_id varchar(128) NOT NULL,
  room_no int(11) NOT NULL,
  house_id varchar(128) NOT NULL,
  no_of_seat int(11) NOT NULL,
  PRIMARY KEY (room_id),
  FOREIGN KEY (house_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB";

$db->saveTableInDB($sql);

//Table structure for table `hms_assign`


$sql = "CREATE TABLE hms_assign (
  user_id varchar(40) NOT NULL,
  house_id varchar(128) NOT NULL,
  room_id varchar(128) NOT NULL,
  
  FOREIGN KEY (house_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (room_id) REFERENCES hms_room(room_id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB";

$db->saveTableInDB($sql);

//Table structure for table `hms_housing_details`

$sql = "CREATE TABLE hms_housing_details (
  id varchar(128) NOT NULL,
  housing_id varchar(128) NOT NULL,
  provost varchar(40),
  ass_provost varchar(128),
  officer varchar(128),
  description varchar(250),
  no_of_workers int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (housing_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB";

$db->saveTableInDB($sql);



 





?>
