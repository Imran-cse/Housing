<?php

include_once 'blade/view.housing.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';
?>


<div class="panel panel-default">
    
    <div class="panel-heading">Housing</div>
    
	    <div class="panel-body">

			<div id="form">
				<form method="post" class="form-horizontal">

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtHousing">Housing Name: </label>
						<div class="col-sm-6">

							<input type="text" class="form-control"  name="txtHousing" placeholder="Housing Name" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getName();  ?>" />
						
						</div>
					</div>
					<?php if(!isset($_GET['edit'])){ ?>

						<div class="form-group">
							<label class="control-label col-sm-4" for="txtType">Type Name : </label>			
							<div class="col-sm-6">	
									    <?php
									    

									    $var = '<select name="txtType" class="form-control"  id="select-from-type">';
										$Result = $_HousingTypeBAO->getAllHousingTypes();

											//if DAO access is successful to load all the Roles then show them one by one

										if($Result->getIsSuccess()){

											$HousingTypes = $Result->getResultObject();
										
									       for ($i=0; $i < sizeof($HousingTypes); $i++) { 
									       		
									       		$HousingType = $HousingTypes[$i];
									    
									    		$var = $var. '<option value="'.$HousingType->getID().'"';   			

									          	$var = $var.'>'.$HousingType->getName().'</option>';
								
											}

											$var = $var.'</select>';
										}
										echo $var;
										?>	
							</div>
						</div>
					<?php }?>
					
					<div class="form-group">
						<label class="control-label col-sm-4" for="txtFloor">Number of Floors : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtFloor" placeholder="Floors" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getFloor();  ?>" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtRoom">Number of Rooms : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtRoom" placeholder="Rooms" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getRoom();  ?>" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtProvost">Provost Name : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtProvost" placeholder="Provost Name" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getProvost();  ?>" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtAssProvost">Assistant Provost Name : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtAssProvost" placeholder="Assistant Provost Name" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getAssProvost();  ?>" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtOfficer">Officer Name : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtOfficer" placeholder="Officer Name" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getOfficer();  ?>" />
						</div>
					</div>
					<?php if(!isset($_GET['edit'])){ ?>
						<div class="form-group">
							<label class="control-label col-sm-4" for="txtDescription">Description : </label>
							<div class="col-sm-6">
								<textarea rows="10" cols="40" class="form-control"  name="txtDescription" placeholder="Description" 
									value="<?php if(isset($_GET['edit'])) echo $getROW->getDescription();  ?>" >					
								</textarea>
							</div>
						</div>
					<?php }?>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtWorkers">Number of Workers : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtWorkers" placeholder="Number of Workers" value="<?php 
							if(isset($_GET['edit'])) echo $getROW->getWorkers();  ?>" />
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
			
			
			$Result = $_HousingBAO->getAllHousing();

			//if DAO access is successful to load all the Terms then show them one by one
			if($Result->getIsSuccess()){

				$HousingList = $Result->getResultObject();
			?> 
				<tr>
					<th>Housing Name</th>
					<th>Housing Type</th>
					<th>Floors</th>
					<th>Rooms</th>
					<th>Provost</th>
					<th>Assistant Provost</th>
					<th>Officer</th>
					<th>Workers</th>
				</tr>
				<?php
				for($i = 0; $i < sizeof($HousingList); $i++) {
					$Housing = $HousingList[$i];
					?>
				    <tr>
				    <td>
				    <a href="*.php?view=<?php echo $Housing->getID(); ?>" onclick="return ; " > <?php echo $Housing->getName(); ?></a>
				    </td>
					    <td><?php $id = $Housing->getTypeId();
					    	$Result2 = $_HousingBAO->getNameFromTypeID($id);
					    	if ($Result2->getIsSuccess()) {

					    		$HousingType = $Result2->getResultObject();

					    		echo $HousingType->getName();
					    	}
					    	
					    	?>
					    		
					    </td>

					    <td><?php echo $Housing->getFloor(); ?></td>
					    <td><?php echo $Housing->getRoom(); ?></td>
					    <td><?php echo $Housing->getProvost(); ?></td>
					    <td><?php echo $Housing->getAssProvost(); ?></td>
					    <td><?php echo $Housing->getOfficer(); ?></td>
					    
					    <td><?php echo $Housing->getWorkers(); ?></td>
					    <td><a href="?edit=<?php echo $Housing->getID(); ?>" onclick="return confirm('sure to edit !'); " >Edit</a></td>
					    <td><a href="?del=<?php echo $Housing->getID(); ?>" onclick="return confirm('sure to delete !'); " >Delete</a></td>
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

<?php  echo '<br> log:: exit view.housing.php'; ?>


