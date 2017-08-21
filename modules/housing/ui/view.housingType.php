<?php

include_once 'blade/view.housingType.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';

?>
<div class="panel panel-default">

    <div class="panel-heading">Housing Type</div>

    <div class="panel-body">

    	<div id="form">
    		<form method="post" class="form-horizontal">

    			<div class="form-group">
                  	<label class="control-label col-sm-4" for="txtType">Type Name:</label>
                  	<div class="col-sm-6">
    					<input type="text" name="txtType" class="form-control"
    					 placeholder="Type Name" value="<?php if(isset($_GET['edit'])) echo $getROW->getName();  ?>" required  />
    			  	</div>
    			</div>

    	        <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
    						<?php
    						if(isset($_GET['edit']))
    						{
    							?>
    							<button type="submit" name="update" class="btn btn-default">Update</button>
    							<?php
    						}
    						else
    						{
    							?>
    							<button type="submit" name="save" class="btn btn-default">Save</button>
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


        	$Result = $_HousingTypeBAO->getAllHousingTypes();

        	//if DAO access is successful to load all Type then show them one by one
        	if($Result->getIsSuccess()){

        		$HousingTypeList = $Result->getResultObject();
        	?>
        		<tr>
        			<th>Type Name</th>
        		</tr>
        		<?php
        		for($i = 0; $i < sizeof($HousingTypeList); $i++) {
        			$HousingType = $HousingTypeList[$i];
        			?>
        		    <tr>
        			    <td><?php echo $HousingType->getName(); ?></td>
        			    <td><a href="?edit=<?php echo $HousingType->getID(); ?>" onclick="return confirm('Are You Sure to edit !'); " >Edit</a></td>
        			    <td><a href="?del=<?php echo $HousingType->getID(); ?>" onclick="return confirm('Are You Sure to delete !'); " >Delete</a></td>
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
