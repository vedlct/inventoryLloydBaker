@extends('main')
@section('header')

    <!-- DataTables -->
    <link href="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{url('public/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{--https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css--}}
    {{--https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css--}}


@endsection
@section('content')



    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Product</h4>
                    </div>
                    <div class="card-body">

                        <div style="text-align: right;margin-right: 20px">
                            <a href="{{route('settings.productCategory.add')}}" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Product</span></a>
                        </div>

                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
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
                                            <td>THE AURORA PC6148</td>
                                            <td>Product Description-1</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>
                                        </tr>
                                        ";
                                    }else if ($value==2){
                                        echo $rd="
                                        <tr>
                                            <td>THE MARIELLE KEYRING PC3151</td>
                                            <td>Product Description-2</td>
                                            <td>Inactive</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>
                                        </tr>
                                        ";
                                    }else if ($value==3){

                                        echo $rd="
                                        <tr>

                                            <td>LB6421X</td>
                                            <td>Product Description-3</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                        </tr>
                                        ";



                                    }
                                    else if ($value==4){

                                        echo $rd="
                                        <tr>

                                            <td>THE ETICHETTA SIGNAGE PC5161</td>
                                            <td>Product Description-4</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                        </tr>
                                        ";



                                    }
                                    else if ($value==5){

                                        echo $rd="
                                        <tr>

                                            <td>LB6115A</td>
                                            <td>Product Description-5</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                        </tr>
                                        ";



                                    }
                                    else if ($value==6){

                                        echo $rd="
                                        <tr>

                                            <td>LB5754</td>
                                            <td>Product Description-6</td>
                                            <td>Active</td>
                                            <td><a href=\"editCategory.php\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-edit\"></i></a>
                                        <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-trash\"></i></button>
                                    </td>

                                        </tr>
                                        ";



                                    }


                                    ?>



                                <?php } ?>


                                <?php for($i=0;$i<100;$i++)
                                {
                                    $random = rand(1, 6);
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













@endsection
@section('foot-js')

    <script src="{{url('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{url('public/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.3/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    {{--https://cdn.datatables.net/rowreorder/1.2.3/js/dataTables.rowReorder.min.js--}}
    {{--https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js--}}
    <script>

        $(document).ready(function() {

            $('#example').DataTable({
                "aaSorting" : []
            });

        } );
    </script>

@endsection