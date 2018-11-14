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

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Upcube</a></li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active">Datatable</li>
                    </ol>
                </div>
                <h4 class="page-title">Datatable</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-md-2">
            <div style="background-color: white;margin-bottom: 20px;" class="card-body">

                <div class=" form-group ">
                <label style="text-align: center" class="col-12">Period</label>
                <div class=" form-group ">
                    <label>From</label>
                    <input class="form-control date" id="ageFromFilter" name="ageFromFilter" onkeypress="return isNumberKey(event)" type="text">
                </div>
                <div class=" form-group ">
                    <label>To</label>
                    <input class="form-control date" id="ageToFilter" name="ageToFilter" onkeypress="return isNumberKey(event)" type="text">
                </div>
                    {{--<div class=" form-group ">--}}
                        {{--<label>days in stock</label>--}}
                        {{--<input class="form-control" id="ageFromFilter" name="ageFromFilter" onkeypress="return isNumberKey(event)" type="text">--}}
                    {{--</div>--}}

                    <div class=" form-group ">
                        <label>Vendor</label>
                        <select name="genderFilter" id="genderFilter" class="form-control">
                            <option value="">Select a Vendor</option>
                            <option value="">web</option>
                            <option value="">warehouse</option>
                            <option value="">shop</option>


                        </select>
                    </div>

                    <div class=" form-group ">
                        <label>Shop</label>
                        <select name="genderFilter" id="genderFilter" class="form-control">
                            <option value="">All Shop</option>
                            @for($i=1;$i<10;$i++)
                                <option value="">Shop-{{$i}}</option>
                            @endfor


                        </select>
                    </div>

                </div>


            </div>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                   @include('profit.table')


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->





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
        $(document).ready( function () {
            $('#datatable').DataTable({});

            $('.date').datepicker({
                format: 'yyyy-m-d',
                todayHighlight: true,
                autoclose: true
            });


//            $().DataTable();
        } );
    </script>

@endsection