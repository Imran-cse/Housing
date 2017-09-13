<?php

include_once 'blade/view.housingRoomAssign.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';
include_once './common/class.common.user.php';



$_SESSION["hid"] = $_GET['h_id'];
$_SESSION["rid"] = $_GET['r_id'];

?>


<div class="panel panel-default">
    
    <div class="panel-heading">Housing Room Assign</div>

    <div class="panel-heading" align="center">
        <?php
	        $var = '';
	        $Result = $_HousingRoomAssignBAO->getNameFromId($_SESSION["hid"]);

	            //if DAO access is successful to load all the Roles then show them one by one

	        if($Result->getIsSuccess()){

	            $Housing = $Result->getResultObject();             

	            $var = $Housing->getName();

	        }
	        echo $var;
        ?>
    </div>
    <div class="panel-heading" align="center">
        <?php
	        $var = '';
	        $Result = $_HousingRoomAssignBAO->getRoomNoFromId($_SESSION["rid"]);

	            //if DAO access is successful to load all the Roles then show them one by one

	        if($Result->getIsSuccess()){

	            $HousingRoom = $Result->getResultObject();             

	            $var = $HousingRoom->getRoomNo();

	        }
	        echo $var;
        ?>
    </div>
    
    <div class="panel-body">

		<div id="form">
			<form method="post" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-4" for="txtType">User ID: </label>			
					<div class="col-sm-6">	
					    <?php
					    

						    $var = '<select name="txtUser" class="form-control"  id="select-from-type">';
							$Result = $_HousingRoomAssignBAO->getAllHousingUsers();

								//if DAO access is successful to load all the Roles then show them one by one

							if($Result->getIsSuccess()){

								$HousingUsers = $Result->getResultObject();
							
						       for ($i=0; $i < sizeof($HousingUsers); $i++) { 
						       		
						       		$User = $HousingUsers[$i];
						    
						    		$var = $var. '<option value="'.$User->getID().'"';   			

						          	$var = $var.'>'.$User->getUniversityID().'</option>';
					
								}

								$var = $var.'</select>';
							}
							echo $var;
							
							?>	
					</div>
				</div>
	
		        <div class="form-group">        
	                <div class="col-sm-offset-2 col-sm-10">
	                	<?php

	                		$Result = $_HousingRoomAssignBAO->getNumberOfUsersFromRoom($_SESSION["hid"],$_SESSION["rid"]);
	                		if($Result->getIsSuccess()){

	                			$Result1 = $_HousingRoomAssignBAO->getTotalUserInRoom($_SESSION["hid"],$_SESSION["rid"]);
	                			if($Result->getIsSuccess()){
	                				if($_SESSION["countUsers"] < $_SESSION["totalUsers"]){?>


	                					<button type="submit" name="save" class="btn btn-default">Save</button>
								
								
									<?php }
									 else { ?>

											<label class="control-label" >There is no available seat in this Room</label>
									<?php }
								}
						 	} ?>
							
					</div>
				</div>	
			</form>
			
		</div>
	</div>

		<div class="panel-body">

			<table class="table table-bordered">

			<?php
			
			
			$Result = $_HousingRoomAssignBAO->getAllHousingRoomAssign($_SESSION["hid"],$_SESSION["rid"]);

			//if DAO access is successful to load all the Terms then show them one by one
			if($Result->getIsSuccess()){

				$HousingRoomAssignList = $Result->getResultObject();
			?> 
				<tr>
					<th>University ID</th>
					<th>Email</th>
					<th>First Name</th>
					<th>Last Name</th>
	
				</tr>
				<?php
					for($i = 0; $i < sizeof($HousingRoomAssignList); $i++) {

						$HousingRoomAssign = $HousingRoomAssignList[$i];

						$id = $HousingRoomAssign->getUserId();
	                    $Result2 = $_HousingRoomAssignBAO->getUserFromId($id);
	                    if ($Result2->getIsSuccess()) {

                                $User = $Result2->getResultObject();

						?>
					    <tr>
					    	
					    	<td><a href="user_details.php?id=<?php echo $User->getID();?>" onclick="return ; " > <?php 
					    	echo $User->getUniversityID(); ?></a>
					    	</td>

	                        <td><?php echo $User->getEmail();?></td>

	                        <td><?php echo $User->getFirstName();?></td>
	                        <td><?php echo $User->getLastName();?></td>
					    	
						    

						    <td><a href="?del=<?php echo $HousingRoomAssign->getUserId(); ?>&h_id=<?php echo $HousingRoomAssign->getHouseId(); ?>&r_id=<?php echo $HousingRoomAssign->getRoomId(); ?>" onclick="return confirm('Are You Sure to delete!'); " >Delete</a></td>
					    </tr>
			    <?php

				}

			}
		}
			else{

				echo $Result->getResultObject(); //giving failure message
			}

			?>
			</table>
		</div>

</div>




