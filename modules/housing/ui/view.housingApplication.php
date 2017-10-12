<?php

include_once MODULES_HOUSING_BLADE.'view.housingApplication.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';

$_SESSION["aid"] = $_GET['view'];


?>


<div class="panel col-md-10 col-md-offset-1" style="font-size: 16px; border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading" align="center">
        <h3><u>Application</u></h3>
    </div>
    <div id='message'></div>
    <div class="panel-body">
        
            <form class="form-horizontal" method="post" name="applicationform">
            <?php
                $globalUser = '';
                $globalUser = $_SESSION["globalUser"];
                
                
                $Result = $_HousingApplicationBAO->getApplicationTemplate($_SESSION["aid"]);

                if($Result->getIsSuccess()){

                    $ApplicationTemplate = $Result->getResultObject();
                    

                ?>
                <span>To,</span>
                <br>
                <span><?php echo $ApplicationTemplate->getReceiver(); ?>,</span>
                <br>
                <br>
              <!--  <div class="form-group"> --> 
                    <input type="text" style="width:500px; height: 40px;font-size: 16px" class="form-control"
                           name="txtSend"
                           placeholder="Name of Department" required/>
               <!-- </div> -->
                
                <span>Khulna University,Khulna</span>
                <br>
                <span>Subject: <?php echo $ApplicationTemplate->getSubject(); ?>.</span>
                <br>
                <br>
               <!-- <div class="form-group"> -->
                    
                        <textarea class="form-control" name="body" style="width:100%; height: 200px; font-size: 16px"
                                  required><?php
                            echo $ApplicationTemplate->getBody(); ?></textarea>
                   
               <!-- </div> -->
                <br>
                <span>Yours Sincerely,</span>
                <br>
                <span>Name: <?php echo $globalUser->getFullName(); ?></span>
                <br>
                <span>Roll No:<?php echo $globalUser->getUniversityID(); ?></span>
                <br>
                <span>Khulna University,Khulna</span>
                <br>
                <br>
                <span>Date: <?php echo date("d/m/Y"); ?></span>

               <?php }?> 
               <br>
               <br>
                             
               <div id="form" class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="apply" class="btn btn-primary">Apply</button>
                    </div>
                </div>
                


            </form>
           
    </div>
</div>



