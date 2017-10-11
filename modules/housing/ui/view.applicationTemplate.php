<?php

include_once MODULES_HOUSING_BLADE.'view.applicationTemplate.blade.php';
include_once COMMON.'class.common.php';
include_once COMMON.'class.common.housing.php';

?>

<div class="panel col-md-8 col-md-offset-2" style="border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading">
        Application Template
    </div>
    <div class="panel-body">
        <div id="form">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="receiver" class="col-md-2 control-label">Receiver</label>
                    <div class="col-md-8">
                        <input type="text" name="receiver" class="form-control" placeholder="Receiver" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-md-2 control-label">Subject</label>
                    <div class="col-md-8">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" class="col-md-2 control-label">Body</label>
                    <div class="col-md-8">
                        <textarea class="form-control" style="width:100%; height: 200px;" name="body" placeholder="Type your application here.." required></textarea>
                    </div>
                </div>
                
                <div>
                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>