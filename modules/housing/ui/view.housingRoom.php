<?php

include_once 'blade/view.housingRoom.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';

?>
<div class="panel panel-default">

    <div class="panel-heading">Housing Room</div>

    <div class="panel-body">

    	<div id="form">
    		<form method="post" class="form-horizontal">

    			<div class="form-group">
                  	<label class="control-label col-sm-4" for="txtRoomNo">Room No:</label>
                  	<div class="col-sm-6">
    					<input type="text" name="txtRoomNo" class="form-control"
    					 placeholder="Room No" value="<?php if(isset($_GET['edit'])) echo $getROW->getRoomNo();  ?>" />
    			  	</div>
    			</div>

                <?php if(!isset($_GET['edit'])){ ?>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="txtHname">Housing Name: </label>            
                            <div class="col-sm-6">  
                                        <?php
                                        

                                        $var = '<select name="txtHname" class="form-control"  id="select-from-name">';
                                        $Result = $_HousingBAO->getAllHousing();

                                            //if DAO access is successful to load all the Roles then show them one by one

                                        if($Result->getIsSuccess()){

                                            $Housings = $Result->getResultObject();
                                        
                                           for ($i=0; $i < sizeof($Housings); $i++) { 
                                                
                                                $Housing = $Housings[$i];
                                        
                                                $var = $var. '<option value="'.$Housing->getID().'"';               

                                                $var = $var.'>'.$Housing->getName().'</option>';
                                
                                            }

                                            $var = $var.'</select>';
                                        }
                                        echo $var;
                                        ?>  
                            </div>
                        </div>
                    <?php }?>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="txtSeat">Number Of Seat:</label>
                    <div class="col-sm-6">
                        <input type="text" name="txtSeat" class="form-control"
                         placeholder="Number Of Seat" value="<?php if(isset($_GET['edit'])) echo $getROW->getNoOfSeat();  ?>" />
                    </div>
                </div>


    	        <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
    						<?php
    						if(isset($_GET['edit']))
    						{
    							?>
    							<button type="submit" name="update">Update</button>
    							<?php
    						}
    						else
    						{
    							?>
    							<button type="submit" name="save">Save</button>
    							<?php
    						}
    						?>
    			    </div>
                </div>
    		</form>

    	</div>
	</div>

	<div class="panel-body">

            <table class="table table-bordered">

            <?php
            
            
            $Result = $_HousingRoomBAO->getAllHousingRoom();

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
                    <a href="*.php?view=<?php echo $HousingRoom->getRoomId(); ?>" onclick="return ; " > <?php echo $HousingRoom->getRoomNo(); ?></a>
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
                        
                        <td><a href="?edit=<?php echo $HousingRoom->getRoomId(); ?>" onclick="return confirm('sure to edit !'); " >Edit</a></td>
                        <td><a href="?del=<?php echo $HousingRoom->getRoomId(); ?>" onclick="return confirm('sure to delete !'); " >Delete</a></td>
                    </tr>
                <?php

                }

            }
            else{

                echo $Result->getResultObject(); //giving failure message
            }

            ?>
            </table>
        </div>

</div>

<?php echo '<br> log:: exit view.housingRoom.php'; ?>
