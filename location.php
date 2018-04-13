
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
                        <h4 class="card-title">Location</h4>
                    </div>
                    <div class="card-body">
                        <div style="text-align: right;margin-right: 20px">
                            <a href="addLocation.php" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Location</span></a>
                        </div>

                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=0;$i<25;$i++){?>
                                    <tr >
                                        <td>Name <?php echo $i ?></td>
                                        <td>Description</td>
                                        <td>Active</td>
                                        <td><a href="editLocation.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                        </td>

                                    </tr>
                                <?php } ?>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include ("footer.php"); ?>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function() {
            $('#example').DataTable();
            $("#Settingsdrop").click();
        } );

    </script>

