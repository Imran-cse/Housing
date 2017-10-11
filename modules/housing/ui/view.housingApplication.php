<?php

include_once MODULES_HOUSING_BLADE.'view.housingApplication.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';

?>

<div class="panel col-md-8 col-md-offset-2" style="border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading">
        Application
    </div>
    <div id='message'></div>
    <div class="panel-body">
            <form class="form-vertical" method="post" name="applicationform">
                <span>To,</span>
                
                <div>
                    <button type="submit" name="apply" class="btn btn-primary">Apply</button>
                </div>

            </form>
    </div>
</div>



