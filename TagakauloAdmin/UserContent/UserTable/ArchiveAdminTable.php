<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Archived Admin List</h3>
            </div>
            <!-- /.box-header -->

            <?php include_once "../../UserContent/CommonUser/ModalClass.php"; 
                $btnName = "Activate";
                $editActive = new ModalClass();
                $editActive->editModal($btnName);
            ?>


            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <?php include_once "AllTableHeader.php";?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once("../../Database/DisplayAllTableClass.php");
                        $table = "user_info_view";
                        $sql = "SELECT * FROM $table WHERE user_level_description = 'Admin' AND status = 'Inactive'";
                        $userT = new DisplayAllTableClass();
                        $userT->userTable($sql);
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col -->
</div>
<?php include_once "../CommonUser/JQueryUser.php"; ?>