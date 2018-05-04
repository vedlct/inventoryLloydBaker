
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
                        <h4 class="card-title"> Brand</h4>
                    </div>
                    <div class="card-body">

                        <div style="text-align: right;margin-right: 20px">
                            <a href="addBrand.php" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Brand</span></a>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>Brand Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>PAUL COSTELLOE</td>
                                    <td>Active</td>
                                    <td><a href="editBrand.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>


                                </tr>

                                <tr>
                                    <td>LLOYD BAKER</td>
                                    <td>Active</td>
                                    <td><a href="editBrand.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>


                                </tr>

                                <tr>
                                    <td>AMANDA WAKELEY</td>
                                    <td>Inactive</td>
                                    <td><a href="editBrand.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>


                                </tr>


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

            $('#example').DataTable({
                "aaSorting" : []
            });

            $("#Settingsdrop").click();

        } );

    </script>


