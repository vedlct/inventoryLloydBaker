
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
                        <h4 class="card-title"> Product Category</h4>
                    </div>
                    <div class="card-body">

                        <div style="text-align: right;margin-right: 20px">
                            <a href="addCategory.php" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Category</span></a>
                        </div>

                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
<!--                                <tbody>-->
<!--                                --><?php //for ($i=0;$i<25;$i++){?>
<!--                                <tr >-->
<!--                                    <td>Cobalt low-back satin gown</td>-->
<!--                                    <td>Category Description</td>-->
<!--                                    <td>Active</td>-->
<!--                                    <td><a href="editCategory.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>-->
<!--                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>-->
<!--                                    </td>-->
<!---->
<!--                                </tr>-->
<!--                                --><?php //} ?>
<!---->
<!---->
<!--                                </tbody>-->

                                <tbody>

                                <?php
                                function myfunction($value) {
                                    if ($value==1) {
                                        echo $r = "
                                    <tr>
                                            <td>Womenswear>Gowns</td>
                                            <td>Category Description-1</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>
                                        </tr>
                                        ";
                                    }else if ($value==2){
                                        echo $rd="
                                        <tr>
                                            <td>Women.Accessories.Purses</td>
                                            <td>Category Description-2</td>
                                            <td>Inactive</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>
                                        </tr>
                                        ";
                                    }else if ($value==3){

                                        echo $rd="
                                        <tr>
                                            
                                            <td>Womenswear Accessories.Bags.Cross-body Bags</td>
                                            <td>Category Description-3</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>
                                            
                                        </tr>
                                        ";



                                    }?>



                                <?php } ?>


                                <?php for($i=0;$i<1000;$i++)
                                {
                                    $random = rand(1, 3);
                                    // echo $random;
                                    myfunction($random); //may you was intended to pass $val here?

                                }?>


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


