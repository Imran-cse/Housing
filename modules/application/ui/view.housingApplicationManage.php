<?php

include_once MODULES_APPLICATION_BLADE.'view.housingApplicationManage.blade.php';
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
                    <th>Application</th>
                </tr>
               
                    <?php


                    $Result = $_HousingApplicationManageBAO->getAllApplication();
                    if ($Result->getIsSuccess()) {
                        $ApplicationList = $Result->getResultObject();
                        for ($i=0; $i < sizeof($ApplicationList); $i++) { 
                            $Application = $ApplicationList[$i];

                            ?>
                            <tr>
                            <td><a href="user_details.php?id=<?php echo $Application->getUserId();?>" onclick="return ; " ><?php echo $_HousingApplicationManageBAO->getUserName($Application->getUserId())->getResultObject()->getFullName(); ?></a></td>
                            <td><?php echo $_HousingApplicationManageBAO->getTempaleSubjectById($Application->getTemplateId())->getResultObject()->getSubject(); ?></td>
                            <td><?php echo $Application->getDate();?></td>
                            <td><a href="application_show.php?view=<?php echo $Application->getId();?>" onclick="return ; ">Application</a></td>

                            </tr>
                            <?php
                        }
                    }

                    ?>
                
                    
                </table>
            
    </div>
</div>



