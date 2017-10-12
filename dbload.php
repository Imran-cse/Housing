<?php
include_once 'path.php';

include_once UTILITY.'class.util.php';
include_once UTILITY.'class.database.php';

$db = new QueryToTable();






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
  user_id varchar(128) NOT NULL,
  house_id varchar(128) NOT NULL,
  room_id varchar(128) NOT NULL,

  FOREIGN KEY (user_id) REFERENCES tbl_user(ID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (house_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (room_id) REFERENCES hms_room(room_id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB";

$db->saveTableInDB($sql);

$sql = "CREATE TABLE hms_provost (
  provost_id varchar(128) NOT NULL,
  house_id varchar(128) NOT NULL,
  provost_name varchar(128) NOT NULL,

  PRIMARY KEY (provost_id),
  FOREIGN KEY (house_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE
  
) ENGINE=InnoDB";

$db->saveTableInDB($sql);


$sql = "CREATE TABLE hms_assistant_provost (
  assistant_provost_id varchar(128) NOT NULL,
  house_id varchar(128) NOT NULL,
  name varchar(128) NOT NULL,

  PRIMARY KEY (assistant_provost_id),
  FOREIGN KEY (house_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE
  
) ENGINE=InnoDB";

$db->saveTableInDB($sql);

$sql = "CREATE TABLE hms_employee (
  employee_id varchar(128) NOT NULL,
  house_id varchar(128) NOT NULL,
  name varchar(128) NOT NULL,

  PRIMARY KEY (employee_id),
  FOREIGN KEY (house_id) REFERENCES hms_housing(id) ON DELETE CASCADE ON UPDATE CASCADE
  
) ENGINE=InnoDB";

$db->saveTableInDB($sql);
