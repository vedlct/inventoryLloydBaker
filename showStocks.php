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
                        <h4 class="card-title">Stocks</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <select  class="form-control" >
                                        <option value="">Select Brand Name</option>
                                        <option value="">PAUL COSTELLOE</option>
                                        <option value="">LLOYD BAKER</option>
                                        <option value="">AMANDA WAKELEY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select class="form-control" >
                                        <option value="">Select Stock Location</option>
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
                                    <th>BRAND</th>
                                    <th>STYLE NO</th>
                                    <th>IMAGE</th>
                                    <th>SALE LOCATION</th>
                                    <th>IN STOCK</th>
                                    <th>LOCATION</th>
                                    <th>LAST STK TAKE</th>
                                    <th>QTY</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=0;$i<1000;$i++){?>

                                    <?php
                                    $rand=rand(1,5);
                                    switch ($rand) {
                                        case 1:
                                            echo '
                                                <tr>
                                             <td>PAUL COSTELLOE</td>
                                            <td>PC001</td>
                                            <td><img width="100px" height="80px" src="assets/img/21main.jpg"></td>
                                            <td>WEBSITE</td>
                                            <td>Y</td>
                                            <td>BAY 2C</td>
                                            <td></td>
                                            <td><span>100</span></td>
                                            <td><a href="editStock.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                         </tr>
                                                    ';
                                            break;
                                        case 2:
                                            echo '<tr>
                                                         <td>LLOYD BAKER</td>
                                                        <td>LB002</td>
                                                        <td><img  width="100px" height="80px"src="assets/img/25main.jpg"></td>
                                                        <td>BOUNDARY MILLS</td>
                                                        <td>Y</td>
                                                        <td>PALLET 1</td>
                                                        <td></td>
                                                        <td><span>50</span></td>
                                                        <td><a href="editStock.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                                         </tr>
                                                                ';
                                            break;
                                        case 3:
                                            echo '<tr>
                                                         <td>PAUL COSTELLOE</td>
                                                        <td>PC002</td>
                                                        <td><img width="100px" height="80px" src="assets/img/18main.jpg"></td>
                                                        <td>TK MAXX</td>
                                                        <td>Y</td>
                                                        <td>BAY 5C</td>
                                                        <td></td>
                                                        <td><span>10</span></td>
                                                        <td><a href="editStock.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                                     </tr>
                                                                ';
                                            break;
                                        default:
                                            echo '
                                                              <tr style="color: red;">
                                                            <td>AMANDA WAKELEY</td>
                                                            <td>AW003</td>
                                                            <td><img  width="100px" height="80px"src="assets/img/28main.jpg"></td>
                                                            <td>ASHFORD</td>
                                                            <td>N</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td><span>5</span></td>
                                                            <td><a href="editStock.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                            <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                                             </tr>
                                                                    ';
                                    }}
                                ?>





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

            $("#stockManagement").click();
            $('#example').DataTable({
                "aaSorting" : []
            });



        });
    </script>