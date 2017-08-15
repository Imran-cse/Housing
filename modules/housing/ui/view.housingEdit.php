<?php

include_once 'blade/view.housingEdit.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';

?>


<div class="panel panel-default">
    
    <div class="panel-heading">Housing Edit</div>
    
    <div class="panel-body">

	<div id="form">
		
			<form method="get" class="form-horizontal">

			<div class="form-group">
				<label class="control-label col-sm-4" for="txtHousing">Housing Name: </label>
				<div class="col-sm-6">

					<input type="text" class="form-control"  name="txtHousing" placeholder="Housing Name" value="<?php 
					 echo $getROW->getName();  ?>" />
				
				</div>
			</div>	

		
			
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

			<div class="form-group">
				<label class="control-label col-sm-4" for="txtDescription">Description : </label>
				<div class="col-sm-6">
					<textarea rows="10" cols="40" class="form-control"  name="txtDescription" placeholder="Description" 
						value="<?php if(isset($_GET['edit'])) echo $getROW->getDescription();  ?>" >					
					</textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-4" for="txtWorkers">Number of Workers : </label>
				<div class="col-sm-6">	
					<input type="text" class="form-control"  name="txtWorkers" placeholder="Number of Workers" value="<?php 
					if(isset($_GET['edit'])) echo $getROW->getWorkers();  ?>" />
				</div>
			</div>



	        <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">

						
							<button type="submit" name="update">Update</button>
						
				</div>
			</div>	
		</form>
		
		
	</div>
	</div>

	

</div>

<?php  echo '<br> log:: exit view.housingEdit.php'; ?>


