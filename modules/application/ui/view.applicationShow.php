<?php

include_once MODULES_APPLICATION_BLADE.'view.housingApplication.blade.php';
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
 
                $Result = $_HousingApplicationBAO->getApplicationBody($_SESSION["aid"]);

                if($Result->getIsSuccess()){

                    $HousingApplication = $Result->getResultObject();
                       
                ?>
                
              
                    
                <textarea class="form-control" name="body" style="width:100%; height: 500px; font-size: 16px" disabled><?php echo $HousingApplication->getBody(); ?></textarea>
                   
              
                
            
               <?php }?> 
               <br>
               <br>
                             
            </form>
           
    </div>
</div>
 


