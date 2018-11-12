@extends('main')
@section('header')

    <!-- DataTables -->
    <link href="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{url('public/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{--<link href="https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />--}}
    {{--https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css--}}
    {{--https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css--}}


@endsection
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
                        <a href="{{route('settings.size.add')}}" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Size</span></a>
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
@section('content')

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