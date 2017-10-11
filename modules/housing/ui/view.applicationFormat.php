<?php

include_once MODULES_HOUSING_BLADE.'view.applicationFormat.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';

?>

<div class="panel col-md-8 col-md-offset-2" style="border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading">
        Application Format
    </div>
    <div class="panel-body">
        <div id="form">
            <form class="form-horizontal" method="post">
                <!--Thumbnail View-->
                <?php


                    $Result = $_ApplicationFormatBAO->getAllApplicationTemplate();

                    //if DAO access is successful to load all Type then show them one by one
                    if($Result->getIsSuccess()){

                        $ApplicationTemplateList = $Result->getResultObject();
                    
                        
                        for($i = 0; $i < sizeof($ApplicationTemplateList); $i++) {
                            $ApplicationTemplate = $ApplicationTemplateList[$i];
                            ?>
                            <div class="col-lg-3 portfolio-item" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
                                <div class="card h-37" style="padding-top: 15px">
                            
                                    <div class="card-body">
                                        <h4 style="font-size:21px" class="card-title">
                                            <a href="housing_application.php?view=<?php echo $ApplicationTemplate->getId();?>"><?php echo $ApplicationTemplate->getSubject(); ?></a>
                                        </h4>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php

                        }

                    }
                    else{

                        echo $Result->getResultObject(); //giving failure message
                    }

                    ?>
            
            </form>
        </div>
    </div>
</div>