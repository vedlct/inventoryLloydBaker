
<?php include ("header.php"); ?>

<div class="main-panel">
    <!-- Navbar -->
    <?php include ('navigation.php');?>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Stock Bulk Update</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Csv File:</label>
<!--                                <div class="col-md-8 custom-input-style">-->
<!--                                    <input type="text" class="form-control" placeholder="first name" >-->
<!--                                </div>-->
                                <div class="col-md-8 custom-input-style">
                                    <input type="file" name="image2Pic" class="form-control" accept=".text/csv" id="fileName">
                                </div>
                            </div>


                            <div class="form-group ">
                                <div class="col-md-8 custom-input-style" >
                                    <button class="btn btn-info">Insert</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ("footer.php"); ?>
