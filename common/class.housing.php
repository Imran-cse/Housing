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
    private $_ass_provost;
    private $_officer;
    private $_description;
    private $_no_of_workers;
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
    public function setProvost ($provost){
        $this->_provost = $provost;
    }
    public function getProvost(){
        return $this->_provost;
    }
    public function setAssProvost ($ass_provost){
        $this->_ass_provost = $ass_provost;
    }
    public function getAssProvost(){
        return $this->_ass_provost;
    }
    public function setOfficer ($officer){
        $this->_officer = $officer;
    }
    public function getOfficer(){
        return $this->_officer;
    }
    public function setDescription ($Description){
        $this->_description = $Description;
    }
    public function getDescription(){
        return $this->_description;
    }

    public function setWorkers ($no_of_workers){
        $this->_no_of_workers = $no_of_workers;
    }
    public function getWorkers(){
        return $this->_no_of_workers;
    }
    public function setTypeId ($type_id){
        $this->_type_id = $type_id;
    }
    public function getTypeId(){
        return $this->_type_id;
    }
}



 ?>
