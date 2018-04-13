
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
                        <h4 class="card-title"> Supplier List</h4>
                    </div>
                    <div class="card-body">

                        <div style="text-align: right;margin-right: 20px">
                            <a href="addNewSupplier.php" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Supplier</span></a>
                        </div>

                        <div class="row">
<!--                            <div class="col-md-4 pr-1">-->
<!--                                <div class="form-group">-->
<!--                                    <label>Supplier Name</label>-->
<!--                                    <select class="form-control" >-->
<!--                                        <option value="">Select Supplier Name</option>-->
<!--                                        <option value="">Name-1</option>-->
<!--                                        <option value="">Name-2</option>-->
<!--                                        <option value="">Name-3</option>-->
<!--                                        <option value="">Name-4</option>-->
<!---->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-4 pl-1">-->
<!--                                <div class="form-group">-->
<!--                                    <label>Location</label>-->
<!--                                    <select class="form-control" >-->
<!--                                        <option value="">Select Supplier Location</option>-->
<!--                                        <option value="">Location-1</option>-->
<!--                                        <option value="">Location-2</option>-->
<!--                                        <option value="">Location-3</option>-->
<!--                                        <option value="">Location-4</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" >
                                        <option value="" selected >Select Supplier Status</option>
                                        <option value="">Active</option>
                                        <option value="">Inactive</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Supplier Name</th>
<!--                                    <th>Location</th>-->
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=1;$i<=20;$i++){?>
                                <tr>
                                    <td>Supplier Name <?php echo $i ?></td>
<!--                                    <td>--><?php //echo "Location-".$i ?><!--</td>-->
                                    <td><?php echo(rand(112345646,999999999))?></td>
                                    <td><?php echo(rand(0,100))?></td>
                                    <td>user<?php echo $i?>@email.com</td>
                                    <td>Active</td>
                                    <td><a href="editSupplier.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
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
            $("#supplierManagementDrop").click();
        } );

    </script>


