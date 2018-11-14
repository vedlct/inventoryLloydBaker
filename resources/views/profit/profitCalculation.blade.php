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
                <h4 class="mt-0 header-title">Search</h4>
                <form class="" action="#">
                    <div class="form-group">
                        <label>Date From</label>
                        <input type="date" class="form-control" required placeholder="Type something"/>
                    </div>
                    <div class="form-group">
                        <label>Date To</label>
                        <input type="date" class="form-control" required placeholder="Type something"/>
                    </div>


                    <div class="form-group">
                        <label>Period</label>
                        <div>
                            <select class="form-control">
                                <option>Select A period</option>
                                <option>Last 30 days</option>
                                <option>Last 60 days</option>
                                <option>Last 90 days</option>
                                <option>Last 120 days</option>
                                <option>Last 150 days</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Select Store</label>
                        <div>
                            <input type="checkbox"> WEB
                            <input type="checkbox"> WAREHOUSE
                            <input type="checkbox"> SHOP
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Shop</label>
                        <div>
                            <select class="form-control">
                                <option>Select A Shop</option>
                                <option>Shop 1</option>
                                <option>Shop 2</option>
                                <option>Shop 3</option>
                                <option>Shop 4</option>
                                <option>Shop 5</option>
                                <option>Shop 6</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>


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