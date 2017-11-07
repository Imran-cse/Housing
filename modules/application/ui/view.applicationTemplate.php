<?php

include_once MODULES_APPLICATION_BLADE.'view.applicationTemplate.blade.php';
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
                        <input type="text" name="receiver" class="form-control" placeholder="Receiver" value="<?php if(isset($_GET['edit'])) echo $getROW->getReceiver();  ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-md-2 control-label">Subject</label>
                    <div class="col-md-8">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php if(isset($_GET['edit'])) echo $getROW->getSubject();  ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" class="col-md-2 control-label">Body</label>
                    <div class="col-md-8">
                        <textarea class="form-control" style="width:100%; height: 200px;" name="body" placeholder="Type your application here.." required><?php if(isset($_GET['edit'])) echo $getROW->getBody();  ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                            <?php
                            if(isset($_GET['edit']))
                            {
                                ?>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                                <?php
                            }
                            else
                            {
                                ?>
                                <button type="submit" name="create" class="btn btn-primary">Create</button>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="panel-body">

        <table class="table table-bordered">

            <?php


            $Result = $_ApplicationTemplateBAO->getAllApplicationTemplate();

            //if DAO access is successful to load all Type then show them one by one
            if($Result->getIsSuccess()){

                $ApplicationTemplateList = $Result->getResultObject();
            ?>
                <tr>
                    <th>Subject</th>
                </tr>
                <?php
                for($i = 0; $i < sizeof($ApplicationTemplateList); $i++) {
                    $ApplicationTemplate = $ApplicationTemplateList[$i];
                    ?>
                    <tr>
                        <td><?php echo $ApplicationTemplate->getSubject(); ?></td>
                        <td><a href="?edit=<?php echo $ApplicationTemplate->getId(); ?>" onclick="return confirm('Are You Sure to edit !'); " >Edit</a></td>
                        <td><a href="?del=<?php echo $ApplicationTemplate->getID(); ?>" onclick="return confirm('Are You Sure to delete !'); " >Delete</a></td>
                    </tr>
                <?php

                }

            }
            else{

                echo $Result->getResultObject(); //giving failure message
            }

            ?>
        </table>
    </div>