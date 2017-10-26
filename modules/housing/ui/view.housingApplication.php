<?php

include_once MODULES_HOUSING_BLADE.'view.housingApplication.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';

$_SESSION["aid"] = $_GET['view'];


?>


<script type="text/javascript">
function Confirm(form){
alert("Application submit successfully!"); 
form.submit();
}
</script>

<div class="panel col-md-10 col-md-offset-1" style="font-size: 16px; border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading" align="center">
        <h3><u>Application</u></h3>
    </div>
    <div id='message'></div>
    <div class="panel-body">
        
            <form class="form-horizontal" method="post" name="form">
            <?php
                $globalUser = '';
                $globalUser = $_SESSION["globalUser"];
                
                
                $Result = $_HousingApplicationBAO->getApplicationTemplate($_SESSION["aid"]);

                if($Result->getIsSuccess()){

                    $ApplicationTemplate = $Result->getResultObject();
                    
                    $search = "[*FullName*]";
                    $replace = $globalUser->getFullName();
                    $bodyText = $ApplicationTemplate->getBody();
                    $newtext = str_replace($search,$replace,$bodyText);

                    $uId = "[*UniversityId*]";
                    $replace = $globalUser->getUniversityID();
                    $newtext = str_replace($uId,$replace,$newtext);
                ?>
                
              
                    
                        <textarea class="form-control" name="body" style="width:80%; height: 500px; font-size: 16px"
                                  required>Date: <?php echo date("d/m/Y"); ?>

<?php echo $ApplicationTemplate->getReceiver(); ?>,
Subject: <?php echo $ApplicationTemplate->getSubject(); ?>.

<?php echo $newtext; ?>
</textarea>
                   
               <!-- </div> -->
                
                
                

               <?php }?> 
               <br>
               <br>
                             
               <div id="form" class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="apply" onclick="Confirm(this.form)" class="btn btn-primary">Apply</button>
                    </div>
                </div>
                


            </form>
           
    </div>
</div>
 


