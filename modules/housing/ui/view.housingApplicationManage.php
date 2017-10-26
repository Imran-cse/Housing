<?php

include_once MODULES_HOUSING_BLADE.'view.housingApplicationManage.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';

?>



<div class="panel col-md-8 col-md-offset-2" style="border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px;">
    <div class="panel-heading" align="center">
        <h4><u>Application Manage</u></h4>
    </div>
    <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Submission Date</th>
                </tr>
               
                    <?php


                    $Result = $_HousingApplicationManageBAO->getAllApplication();
                    if ($Result->getIsSuccess()) {
                        $ApplicationList = $Result->getResultObject();
                        for ($i=0; $i < sizeof($ApplicationList); $i++) { 
                            $Application = $ApplicationList[$i];

                            ?>
                            <tr>
                            <td><?php echo $_HousingApplicationManageBAO->getUserName($Application->getUserId())->getResultObject()->getFullName(); ?></td>
                            <td><?php echo $_HousingApplicationManageBAO->getTempaleSubjectById($Application->getTemplateId())->getResultObject()->getSubject(); ?></td>
                            <td><?php echo $Application->getDate();?></td>

                            </tr>
                            <?php
                        }
                    }

                    ?>
                
                    
                </table>
            
    </div>
</div>



