
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
                        <h4 class="card-title"> User Table</h4>
                    </div>

                    <div class="card-body">
                        <div style="text-align: right;margin-right: 20px">
                            <a href="addUser.php" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add User</span></a>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><b>User Role</b></label>
                                    <select  class="form-control">
                                        <option selected>Select User Role</option>
                                        <option>SuperAdmin</option>
                                        <option>Admin</option>
                                        <option>Editor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                <tr>

                                    <th>User Name</th>
                                    <th>User Role</th>
                                    <th>User Phone</th>
                                    <th>User Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>James Mark</td>
                                    <td>SuperAdmin</td>
                                    <td>0168000000</td>
                                    <td>James@gmail.com</td>
                                    <td><a href="editUser.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Richard Daniel</td>
                                    <td>Admin</td>
                                    <td>0168000000</td>
                                    <td>Richard@gmail.com</td>
                                    <td><a href="editUser.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Kenneth Anthony</td>
                                    <td>Admin</td>
                                    <td>0168000000</td>
                                    <td>Kenneth@gmail.com</td>

                                    <td><a href="editUser.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                            <br>

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
        } );

    </script>


