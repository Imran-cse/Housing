<?php



class QueryToTable{

    var $_filename;
    private $_DB;

    function __construct(){

     //   $this->_filename = $fileToRead;
    }


    public function saveTableInDB($sql){


        $this->_DB = DBUtil::getInstance();

            //beginning a transaction
        $this->_DB->getConnection()->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);


        //$this->_DB->doQuery('DELETE from hms_room');


        $SQL = $this->_DB->doQuery($sql);

        //closing the transaction
        $this->_DB->getConnection()->commit();

        echo '<br>Room Table saved to database';
    }


}

?>
