<?php

include_once 'blade/view.housingApplication.blade.php';
include_once './common/class.common.php';
include_once './common/class.common.housing.php';

?>
<script type="text/javascript">
    
</script>
<div class="panel col-md-8 col-md-offset-2" style="border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading">
        Application
    </div>
    <div class="panel-body">
        <div id="form">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="subject" class="col-md-2 control-label">Subject</label>
                    <div class="col-md-8">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2 control-label">Description</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="description" placeholder="Type your application here.." required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="discipline" class="col-md-2 control-label">Discipline</label>
                    <div class="col-md-8">
                        <?php

                        $var = '<select name="discipline" class="form-control"  id="select-from-type">';
                        $Result = $_HousingApplicationBAO->getAllDisciplines();

                        //if DAO access is successful to load all the Roles then show them one by one

                        if($Result->getIsSuccess()){

                            $Disciplines = $Result->getResultObject();

                            for ($i=0; $i < sizeof($Disciplines); $i++) {

                                $Discipline = $Disciplines[$i];

                                $var = $var. '<option value="'.$Discipline->getID().'"';

                                $var = $var.'>'.$Discipline->getName().'</option>';

                            }

                            $var = $var.'</select>';
                        }
                        echo $var;
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="applicationType" class="col-md-2 control-label">Application Type</label>
                    <div class="col-md-8">
                        <?php

                        $var = '<select name="applicationType" class="form-control"  id="select-from-type">';
                        $Result = $_HousingApplicationTypeBAO->getHousingApplicationTypes();

                        //if DAO access is successful to load all the Roles then show them one by one

                        if($Result->getIsSuccess()){

                            $HousingApplicationTypes = $Result->getResultObject();

                            for ($i=0; $i < sizeof($HousingApplicationTypes); $i++) {

                                $HousingApplicationType = $HousingApplicationTypes[$i];

                                $var = $var. '<option value="'.$HousingApplicationType->getID().'"';

                                $var = $var.'>'.$HousingApplicationType->getName().'</option>';

                            }

                            $var = $var.'</select>';
                        }
                        echo $var;
                        ?>
                    </div>
                </div>
                <div>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

