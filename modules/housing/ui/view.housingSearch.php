<?php

include_once 'blade/view.housingSearch.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';

?>


<div class="panel panel-default">
    
    <div class="panel-heading">User Search</div>
    
	    <div class="panel-body">

			<div id="form">
				<form method="post" class="form-horizontal">

						<div class="form-group">
							<label class="control-label col-sm-4" for="txtHousing">Housing Name : </label>			
							<div class="col-sm-6">	
									    <?php
									    

									    $var = '<select name="txtHousing" class="form-control"  id="select-from-housing">';
										$Result = $_HousingSearchBAO->getAllHousingName();

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

					<div class="form-group">
		              	<label class="control-label col-sm-4" for="selectedField">Search Field:</label>
		              	<div class="col-sm-6">								   						    
								<select name="selectedField" class="form-control" id="selectedField" required>
									<option selected disabled>Select Search Criteria</option>
									<option value="UniversityID">University ID</option>
									<option value="Email">Email</option>
									<option value="FirstName">First Name</option>
									<option value="LastName">Last Name</option>
								</select>	
						</div>
					</div>


					<div class="form-group">
		              	<label class="control-label col-sm-4" for="txtSearch">Search Text</label>
		              	<div class="col-sm-6">
		              	<input type="text" name="txtSearch" class="form-control" placeholder="Input the search text" required/>
					  	</div>
					</div>
					  
			        <div class="form-group">        
		              <div class="col-sm-offset-2 col-sm-10">
		    
							<button type="submit" value="search" name="search">Search</button>

					   </div>
		            </div> 
				
				</form>
				
			</div>
		</div>

		<div class="panel-body">

		<table class="table table-bordered">
		<?php
		//search clicked and result loaded
		if(isset($_POST['search']) && isset($ResultSearch))
		{
		
		
		//if DAO access is successful to load all the users then show them one by one
		if($ResultSearch->getIsSuccess()){

			$Roomlist = $ResultSearch->getResultObject();
		?>
			<tr>
				<th>Room</th>
				
			</tr>
			<?php
			for($i = 0; $i < sizeof($Roomlist); $i++) {
				$Room = $Roomlist[$i];
				?>
			    <tr>
				    <td><?php echo $Room->getRoomNo(); ?></td>
				    
				    

				    </tr>
		    <?php

			}

		}
		else{

			echo $ResultSearch->getResultObject(); //giving failure message
		}
		
		}

		?>
		</table>
		</div>


		

</div>




