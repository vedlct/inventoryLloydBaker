
<?php include ("header.php"); ?>

<style>
    .table tbody tr {
        color: red;
    }
</style>


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
                        <h4 class="card-title">Minimum Stock Info</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select class="form-control" >
                                        <option value="">Select Product Category</option>
                                        <option value="">Men->Pant</option>
                                        <option value="">Women->Gown</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select class="form-control" >
                                        <option value="">Select Product Location</option>
                                        <option value="">Pallet-1</option>
                                        <option value="">Pallet-2</option>
                                        <option value="">Pallet-3</option>
                                        <option value="">Pallet-4</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>SKU</th>
                                    <th>Color</th>
                                    <th>Location</th>
                                    <th>RRP</th>
                                    <th>Stock Quantity</th>
                                    <th>Min Qty Alert</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                function myfunction($value) {
                                    if ($value==1) {
                                        echo $r = "
                                    <tr style=\"color: red;\">
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-123-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-1</td>
                                            <td>90</td>
                                            <td>12</td>
                                            <td><span>10</span></td>
                                            <td><a href=\"editproduct.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                                <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                            </td>
                                        </tr>
                                        ";
                                    }else if ($value==2){
                                        echo $rd="
                                        <tr>
                                            <td>The Niven</td>
                                            <td>Womenswear Accessories.Bags.Cross-body Bags</td>
                                            <td>LB6623Y</td>
                                            <td>Mineral/Mineral Stingray</td>
                                            <td>pallet-2</td>
                                            <td>295</td>
                                            <td>13</td>
                                            <td><span>12</span></td>
                                            <td><a href=\"editproduct.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                                <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                            </td>
                                        </tr>
                                        ";
                                    }else if ($value==3){

                                        echo $rd="
                                        <tr>
                                            <td>The Jagger with Studs</td>
                                            <td>Women.Accessories.Purses</td>
                                            <td>LW3641X</td>
                                            <td>Black</td>
                                            <td>pallet-3</td>
                                            <td>95</td>
                                            <td>23</td>
                                            <td><span>20</span></td>
                                            <td><a href=\"editproduct.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                                <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                            </td>
                                        </tr>
                                        ";



                                    }?>



                               <?php } ?>


                                <?php for($i=0;$i<=50;$i++)
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

            $("#stocInfodrop").click();

        } );

    </script>


