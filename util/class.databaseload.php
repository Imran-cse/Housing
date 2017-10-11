<?php



class QueryToTable{

    
    private $_DB;

    function __construct(){

     
    }


    public function saveTableInDB($sql){


        $this->_DB = DBUtil::getInstance();    
        $this->_DB->getConnection()->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
        $SQL = $this->_DB->doQuery($sql);

        //closing the transaction
        $this->_DB->getConnection()->commit();

        
    }


}
echo '<br>All Tables saved to database';

?>