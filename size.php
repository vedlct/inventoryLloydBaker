
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
                        <h4 class="card-title"> Size</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Size Category</label>
                                    <select class="form-control" >
                                        <option value="">Select Size Category</option>
                                        <option value="">Men->Pant</option>
                                        <option value="">Women->Gown</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div style="text-align: right;margin-right: 20px">
                            <a href="addSize.php" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Size</span></a>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Size Name</th>
                                    <th>Size Description</th>
                                    <th>Size Status</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                function myfunction($value) {
                                    if ($value==1) {
                                        echo $r = "
                                    <tr>
                                    <td>XL</td>
                                    <td>Description demo</td>
                                    <td>Active</td>
                                    <td><a href=\"editSize.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                    </tr>
                                        ";
                                    }else if ($value==2){
                                        echo $rd="
                                         <tr>
                                    <td>M</td>
                                    <td>Description demo</td>
                                    <td>Active</td>
                                    <td><a href=\"editSize.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                </tr>
                                        ";
                                    }else if ($value==3){

                                        echo $rd="
                                        <tr>
                                    <td>L</td>
                                    <td>Description demo</td>
                                    <td>Active</td>
                                    <td><a href=\"editSize.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                </tr>
                                        ";



                                    }?>



                                <?php } ?>


                                <?php for($i=0;$i<=100;$i++)
                                {
                                    $random = rand(1, 3);
                                    // echo $random;
                                    myfunction($random); //may you was intended to pass $val here?

                                }?>




<!--                                --><?php //for ($i=0;$i<25;$i++){?>
<!--                                <tr>-->
<!--                                    <td>Bordeaux low-back satin gown</td>-->
<!--                                    <td>Description demo</td>-->
<!--                                    <td>Active</td>-->
<!--                                    <td><a href="editSize.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>-->
<!--                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>-->
<!--                                    </td>-->
<!---->
<!--                                </tr>-->
<!--                                --><?php //} ?>

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


