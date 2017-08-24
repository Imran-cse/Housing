<?php

include_once 'blade/view.housingDetails.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';


$_SESSION["hid"] = $_GET['h_id'];

?>


<div class="panel panel-default">
    
    <div class="panel-heading">Housing</div>
	    <div class="panel-heading" align="center">
	        <?php
	                                        

	        $var = '';
	        $Result = $_HousingDetailsBAO->getNameFromId($_SESSION["hid"]);

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
				<form method="post" class="form-horizontal" id="housingDetails">

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtProvost">Provost Name : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtProvost" placeholder="Provost Name" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" for="txtAssProvost">Assistant Provost Name : </label>
						<div class="col-sm-6">	
							<textarea rows="4" cols="40" class="form-control" name="txtAssProvost" placeholder="Assistant Provost Name" required ></textarea>
						</div>
					</div>

					
					<div class="form-group">
						<label class="control-label col-sm-4" for="txtOfficer">Employee Name : </label>
						<div class="col-sm-6">	
							<textarea rows="4" cols="40" class="form-control" name="txtOfficer" placeholder="Employee Name" required ></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtDescription">Description : </label>
						<div class="col-sm-6">
							<textarea rows="4" cols="40" class="form-control" name="txtDescription" placeholder="Description" required ></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-4" for="txtWorkers">Number of Workers : </label>
						<div class="col-sm-6">	
							<input type="text" class="form-control"  name="txtWorkers" placeholder="Number of Workers" required />
						</div>
					</div>

					



			        <div class="form-group">        
		              <div class="col-sm-offset-2 col-sm-10">

								
							<button type="submit" name="save">Save</button>
								
						</div>
					</div>	
				</form>
				
			</div>
		</div>

		<div class="panel-body">

			<table class="table table-bordered">

			<?php
			
			
			$Result = $_HousingDetailsBAO->getAllHousingDetails();

			//if DAO access is successful to load all the Terms then show them one by one
			if($Result->getIsSuccess()){

				$HousingDetailsList = $Result->getResultObject();
			?> 
				<tr>
					<th>Provost Name</th>
					<th>Assistant Provost List</th>
					<th>Employee List</th>
	
				</tr>
				<?php
				for($i = 0; $i < sizeof($HousingDetailsList); $i++) {
					$HousingDetails = $HousingDetailsList[$i];
					?>
				    <tr>
				    <td> <?php echo $HousingDetails->getProvost(); ?></a></td>
					    <td><?php echo $HousingDetails->getAssProvost(); ?></td>

					    <td><?php echo $HousingDetails->getOfficer(); ?></td>
					    
					    
					    <td><a href="?del=<?php echo $HousingDetails->getID(); ?>&view=<?php echo $HousingDetails->getHousingId(); ?>" onclick="return confirm('Are You Sure to delete!'); " >Delete</a></td>
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


