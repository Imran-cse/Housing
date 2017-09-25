<?php


class HousingType{
    private $_ID;
    private $_name;

    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }
    public function setName ($Name){
        $this->_name = $Name;
    }
    public function getName(){
        return $this->_name;
    }
}

class Housing{
    private $_ID;
    private $_name;
    private $_no_of_floor;
    private $_no_of_room;
    private $_provost;
    private $_type_id;



    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }
    public function setName ($Name){
        $this->_name = $Name;
    }
    public function getName(){
        return $this->_name;
    }

    public function setTypeId ($type_id){
        $this->_type_id = $type_id;
    }
    public function getTypeId(){
        return $this->_type_id;
    }

    public function setFloor ($no_of_floor){
        $this->_no_of_floor = $no_of_floor;
    }
    public function getFloor(){
        return $this->_no_of_floor;
    }
    public function setRoom ($no_of_room){
        $this->_no_of_room = $no_of_room;
    }
    public function getRoom(){
        return $this->_no_of_room;
    }
    
    
}

//Class for Housing Details

class HousingProvost{
    private $_ID;
    private $_housing_id;
    private $_provost;
    
 
    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }
    public function setHousingId ($Hid){
        $this->_housing_id = $Hid;
    }
    public function getHousingId(){
        return $this->_housing_id;
    }

    public function setProvost ($provost){
        $this->_provost = $provost;
    }
    public function getProvost(){
        return $this->_provost;
    }
    
    
}

class HousingAssistantProvost{
    private $_ID;
    private $_housing_id;
    private $_ass_provost;
  
    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }
    public function setHousingId ($Hid){
        $this->_housing_id = $Hid;
    }
    public function getHousingId(){
        return $this->_housing_id;
    }

    
    public function setAssProvost ($ass_provost){
        $this->_ass_provost = $ass_provost;
    }
    public function getAssProvost(){
        return $this->_ass_provost;
    }
    
    
}

class HousingEmployee{
    private $_ID;
    private $_housing_id;
    private $_officer;
    
 
    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }
    public function setHousingId ($Hid){
        $this->_housing_id = $Hid;
    }
    public function getHousingId(){
        return $this->_housing_id;
    }

    
    public function setOfficer ($officer){
        $this->_officer = $officer;
    }
    public function getOfficer(){
        return $this->_officer;
    }
    
    
}

//Class for room
class HousingRoom{
    private $_room_id;
    private $_room_no;
    private $_house_id;
    private $_no_of_seat;

    public function setRoomId($room_id){
        $this->_room_id = $room_id;
    }
    public function getRoomId()
    {
        return $this->_room_id;
    }
    public function setRoomNo($room_no){
        $this->_room_no = $room_no;
    }
    public function getRoomNo()
    {
        return $this->_room_no;
    }
    public function setHouseId($house_id)
    {
        $this->_house_id = $house_id;
    }
    public function getHouseId()
    {
        return $this->_house_id;
    }
    public function setNoOfSeat($no_of_seat)
    {
        $this->_no_of_seat = $no_of_seat;
    }
    public function getNoOfSeat()
    {
        return $this->_no_of_seat;
    }
}

/**
* 
*/
class HousingRoomAssign
{
    private $_user_id;
    private $_house_id;
    private $_room_id;
    

    public function setUserId($user_id)
    {
        $this->_user_id = $user_id;
    }
    public function getUserId()
    {
        return $this->_user_id;
    }
    
    public function setHouseId($house_id)
    {
        $this->_house_id = $house_id;
    }
    public function getHouseId()
    {
        return $this->_house_id;
    }

    public function setRoomId($room_id){
        $this->_room_id = $room_id;
    }
    public function getRoomId()
    {
        return $this->_room_id;
    }
    
}

class HousingApplication
{
    private $_id;
    private $_application_type_id;
    private $_user_id;
    private $_discipline;
    private $_status;
    private $_date;

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setApplicationTypeId($application_type_id)
    {
        $this->_application_type_id = $application_type_id;
    }

    public function getApplicationTypeId()
    {
        return $this->_application_type_id;
    }

    public function setUserId($user_id)
    {
        $this->_user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->_user_id;
    }

    public function setDiscipline($discipline)
    {
        $this->_discipline = $discipline;
    }

    public function getDiscipline()
    {
        return $this->_discipline;
    }

    public function setStatus($status)
    {
        $this->_status = $status;
    }

    public function getStatus()
    {
        return $this->_status;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }

    public function getDate()
    {
        return $this->_date;
    }
}

class HousingApplicationType
{
    private $_id;
    private $_name;

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }
}

class HousingDiscipline
{
    private $_ID;
    private $_Name;
    private $_ShortCode;
    private $_SchoolId;

    public function setID($ID)
    {
        $this->_ID = $ID;
    }

    public function getID()
    {
        return $this->_ID;
    }

    public function setName($Name)
    {
        $this->_Name = $Name;
    }

    public function getName()
    {
        return $this->_Name;
    }

    public function setShortCode($ShortCode)
    {
        $this->_ShortCode = $ShortCode;
    }

    public function getShortCode()
    {
        return $this->_ShortCode;
    }

    public function setSchoolID($SchoolID)
    {
        $this->_SchoolId = $SchoolID;
    }

    public function getSchoolID()
    {
        return $this->_SchoolId;
    }

}
