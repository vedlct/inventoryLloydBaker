
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
                        <h4 class="card-title">Product List</h4>
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
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Select</th>
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

                                <tr style="color: red;">

                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-123-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>Pallet-1</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>2</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Bordeaux low-back satin gown</td>
                                    <td>WW Accessories Mirakl / Bags / Shoulder Bags</td>
                                    <td>ABCD-111-BLS</td>
                                    <td>Blue</td>
                                    <td>Pallet-2</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Bordeaux low-back satin gown</td>
                                    <td>WW Accessories Mirakl / Bags / Shoulder Bags</td>
                                    <td>ABCD-222-BLS</td>
                                    <td>Black</td>
                                    <td>Pallet-3</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-321-BLS</td>
                                    <td>Green</td>
                                    <td>Pallet-3</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-129-BLS</td>
                                    <td>Black</td>
                                    <td>Pallet-5</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr style="color: red;">

                                    <td><input name="selected_rows[]" type="checkbox"></td>

                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-333-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>Pallet-6</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>5</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-111-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>Pallet-7</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-124-BLS</td>
                                    <td>Brown</td>
                                    <td>Pallet-8</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td>
                                        <a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-1212-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>Pallet-9</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                    <td><a href="editproduct.php" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                            <div style="margin-left: 20px">
                                <input type="checkbox" id="selectall" onClick="selectAll(this)"/><b>Select All</b>
                            </div>


                        </div>

                        <button class="btn btn-info" style="margin: 20px;">Download Product</button>
                        <button class="btn btn-info" style="margin: 20px;">Print Product</button>

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
        var selecteds = [];
        function selected_rows(x) {
            btn = $(x).data('panel-id');
            var index = selecteds.indexOf(btn)
            if (index == "-1"){
                selecteds.push(btn);
            }else {

                selecteds.splice(index, 1);
            }
        }

        function selectAll(source) {

            for(var i=0; i <= selecteds.length; i++) {
                selecteds.pop(i);
            }
            checkboxes = document.getElementsByName('selected_rows[]');
            for(var i in checkboxes) {
                checkboxes[i].checked = source.checked;
            }

            /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
            $(".chk:checked").each(function () {
                selecteds.push($(this).val());
            });
        }

    </script>


