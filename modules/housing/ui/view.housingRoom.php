<?php

include_once 'blade/view.housingRoom.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';


$_SESSION["hid"] = $_GET['h_id'];
    
//$cookie_name = "housingId";
//$cookie_value = $_GET['view'];
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<div class="panel panel-default">

    <div class="panel-heading">Housing Room</div>
    <div class="panel-heading">
        <?php
                                        

        $var = '<select name="txtType" class="form-control"  id="select-from-type">';
        $Result = $_HousingRoomBAO->getNameFromId($_SESSION["hid"]);

            //if DAO access is successful to load all the Roles then show them one by one

        if($Result->getIsSuccess()){

            $Housing = $Result->getResultObject();             

            $var = $Housing->getName();

        }
        echo $var;
        ?>
    </div>

    <div class="panel-body">

    	<div id="form">
    		<form method="post" class="form-horizontal" id="housing">

    			<div class="form-group">
                  	<label class="control-label col-sm-4" for="txtRoomNo">Room No:</label>
                  	<div class="col-sm-6">
    					<input type="text" name="txtRoomNo" class="form-control"
    					 placeholder="Room No" value="" required />
    			  	</div>
    			</div>

                

                <div class="form-group">
                    <label class="control-label col-sm-4" for="txtSeat">Number Of Seat:</label>
                    <div class="col-sm-6">
                        <input type="text" name="txtSeat" class="form-control"
                         placeholder="Number Of Seat" value="" required />
                    </div>
                </div>


    	        <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">    						   						
    				    <button type="submit" name="save" class="btn btn-default">Save</button>	
    			    </div>
                </div>
    		</form>

    	</div>
	</div> 
     
             

	<div class="panel-body">
        <form method="post">
            <table class="table table-bordered">

            <?php
            
            
            
            $Result = $_HousingRoomBAO->getAllHousingRoom($_SESSION["hid"]);
            //else $Result = $_HousingRoomBAO->getAllHousingRoom($HousingRoom->getHouseId);
            
            //if DAO access is successful to load all the Terms then show them one by one
            if($Result->getIsSuccess()){

                $HousingRoomList = $Result->getResultObject();
            ?> 
                <tr>
                    <th>Room No</th>
                    <th>Housing Name</th>
                    <th>Number Of Seat</th>
                    

    
                </tr>
                <?php

                for($i = 0; $i < sizeof($HousingRoomList); $i++) {
                     $HousingRoom = $HousingRoomList[$i];
                    ?>
                    <tr>
                    <td>
                    <a href="housingRoom_assign.php?view=<?php echo $HousingRoom->getRoomId();?>&h_id=<?php echo $HousingRoom->getHouseId(); ?>" onclick="return ; " > <?php echo $HousingRoom->getRoomNo(); ?></a>
                    </td>
                        <td><?php $id = $HousingRoom->getHouseId();
                            $Result2 = $_HousingRoomBAO->getNameFromId($id);
                            if ($Result2->getIsSuccess()) {

                                $Housing = $Result2->getResultObject();

                                echo $Housing->getName();
                            }
                            
                            ?>
                                
                        </td>

                        <td><?php echo $HousingRoom->getNoOfSeat(); ?></td>
                        
                        <td><a href="?del=<?php echo $HousingRoom->getRoomId(); ?>&view=<?php echo $HousingRoom->getHouseId(); ?>" onclick="return confirm('Are You Sure to delete!');  " >Delete</a></td>
                                          
                    </tr>
                <?php

                }

            }
            else{

                echo $Result->getResultObject(); //giving failure message
            }

            ?>
            </table>
           </form>
        </div>

</div>









