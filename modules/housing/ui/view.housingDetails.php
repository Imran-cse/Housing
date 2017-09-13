<?php

include_once 'blade/view.housingDetails.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';


$_SESSION["hid"] = $_GET['h_id'];

?>


<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<script>
	function detailsAdd(evt, name) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");

	    

	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(name).style.display = "block";
	    evt.currentTarget.className += " active";

	}
</script>


<div class="panel panel-default">
    
    <div class="panel-heading">Housing Details</div>
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

				<div class="tab">
				  <button class="tablinks" onclick="detailsAdd(event, 'Provost')">Provost</button>
				  <button class="tablinks" onclick="detailsAdd(event, 'AssistantProvost')">Assistant Provost</button>
				  <button class="tablinks" onclick="detailsAdd(event, 'Employee')">Employee</button>
				</div>

				<div id="Provost" class="tabcontent">
				  <h3>Provost</h3>
				  <div id="form">
				  <form method="post" class="form-horizontal" id="housingDetails">
				  		<div class="form-group">
							<label class="control-label col-sm-4" for="txtProvost">Provost Name : </label>
							<div class="col-sm-6">	
								<input type="text" class="form-control"  name="txtProvost" placeholder="Provost Name" required/>
							</div>
						</div>
						 <div class="form-group">        
		              		<div class="col-sm-offset-2 col-sm-10">	
								<button type="submit" name="provostSave">Save</button>
								
							</div>
						</div>	
				  </form>
				  </div>

				  <div class="panel-body">

				    	<table class="table table-bordered">

				        	<?php


				        	$Result = $_HousingDetailsBAO->getAllProvost($_GET['h_id']);

				        	//if DAO access is successful to load all Type then show them one by one
				        	if($Result->getIsSuccess()){

				        		$HousingProvostList = $Result->getResultObject();
				        	?>
				        		<tr>
				        			<th>Provost Name</th>
				        		</tr>
				        		<?php
				        		for($i = 0; $i < sizeof($HousingProvostList); $i++) {
				        			$HousingProvost = $HousingProvostList[$i];
				        			?>
				        		    <tr>
				        			    <td><?php echo $HousingProvost->getProvost(); ?></td>
				        			    
				        			    <td><a href="?provostDel=<?php echo $HousingProvost->getID(); ?>&view=<?php echo $HousingProvost->getHousingId(); ?>" onclick="return confirm('Are You Sure to delete !'); " >Delete</a></td>
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

				<div id="AssistantProvost" class="tabcontent">
				  <h3>Assistant Provost</h3>
				  <div id="form">
				  <form method="post" class="form-horizontal" id="housingDetails">
				  		<div class="form-group">
							<label class="control-label col-sm-4" for="txtAssProvost">Assistant Provost Name : </label>
							<div class="col-sm-6">	
								<input type="text" class="form-control"  name="txtAssProvost" placeholder="Assistant Provost Name" required/>
							</div>
						</div>
						 <div class="form-group">        
		              		<div class="col-sm-offset-2 col-sm-10">	
								<button type="submit" name="assProvostSave">Save</button>
								
							</div>
						</div>	
				  </form>
				  </div> 

				  <div class="panel-body">

				    	<table class="table table-bordered">

				        	<?php


				        	$Result = $_HousingDetailsBAO->getAllAssistantProvost($_GET['h_id']);

				        	//if DAO access is successful to load all Type then show them one by one
				        	if($Result->getIsSuccess()){

				        		$HousingAssistantProvostList = $Result->getResultObject();
				        	?>
				        		<tr>
				        			<th>Assistant Provost Name</th>
				        		</tr>
				        		<?php
				        		for($i = 0; $i < sizeof($HousingAssistantProvostList); $i++) {
				        			$HousingAssistantProvost = $HousingAssistantProvostList[$i];
				        			?>
				        		    <tr>
				        			    <td><?php echo $HousingAssistantProvost->getAssProvost(); ?></td>
				        			    
				        			    <td><a href="?assProvostDel=<?php echo $HousingAssistantProvost->getID(); ?>&view=<?php echo $HousingAssistantProvost->getHousingId(); ?>" onclick="return confirm('Are You Sure to delete !'); " >Delete</a></td>
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

				<div id="Employee" class="tabcontent">
				  <h3>Employee</h3>
				  <div id="form">
				  <form method="post" class="form-horizontal" id="housingDetails">
				  		<div class="form-group">
							<label class="control-label col-sm-4" for="txtOfficer">Employee Name : </label>
							<div class="col-sm-6">	
								<input type="text" class="form-control"  name="txtOfficer" placeholder="Employee Name" required/>
							</div>
						</div>
						 <div class="form-group">        
		              		<div class="col-sm-offset-2 col-sm-10">	
								<button type="submit" name="employeeSave">Save</button>
								
							</div>
						</div>	
				  </form>
				  </div>

				  <div class="panel-body">

				    	<table class="table table-bordered">

				        	<?php


				        	$Result = $_HousingDetailsBAO->getAllEmployee($_GET['h_id']);

				        	//if DAO access is successful to load all Type then show them one by one
				        	if($Result->getIsSuccess()){

				        		$HousingEmployeeList = $Result->getResultObject();
				        	?>
				        		<tr>
				        			<th>Employee Name</th>
				        		</tr>
				        		<?php
				        		for($i = 0; $i < sizeof($HousingEmployeeList); $i++) {
				        			$HousingEmployee = $HousingEmployeeList[$i];
				        			?>
				        		    <tr>
				        			    <td><?php echo $HousingEmployee->getOfficer(); ?></td>
				        			    
				        			    <td><a href="?employeeDel=<?php echo $HousingEmployee->getID(); ?>&view=<?php echo $HousingEmployee->getHousingId(); ?>" onclick="return confirm('Are You Sure to delete !'); " >Delete</a></td>
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

				
		</div>

		

</div>


