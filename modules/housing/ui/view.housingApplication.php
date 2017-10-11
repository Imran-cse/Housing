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
        <div id="form">
            <form class="form-horizontal" method="post" name="applicationform">
                <div class="form-group">
                    <label for="user" class="col-md-2 control-label">From</label>
                    <div class="col-md-8">
                        <input type="text" name="user" class="form-control" value="<?php 
                            $globalUser = '';
                            $globalUser = $_SESSION["globalUser"];
                            echo $globalUser->getID();
                        ?>" required readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="receiver" class="col-md-2 control-label">To</label>
                    <div class="col-md-8">
                        <input type="text" name="receiver" class="form-control" placeholder="To.." required>
                    </div>
                </div>
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
                
                <div>
                    <button type="submit" name="apply" class="btn btn-primary">Apply</button>
                </div>

            </form>
        </div>
    </div>
</div>



