@extends('main')
@section('header')

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
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

                    <h4 class="mt-0 header-title">Default Datatable</h4>
                    <p class="text-muted m-b-30 font-14">DataTables has most features enabled by
                        default, so all you need to do to use it with your own tables is to call
                        the construction function: <code>$().DataTable();</code>.
                    </p>
                    <div class="table table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>PHOTO</th>
                                <th>NAME</th>
                                <th>FACTORY CODE</th>
                                <th>COLOUR</th>
                                <th>EAN 13 BARCODES</th>
                                <th>CP</th>
                                <th>SP</th>
                                <th>RRP</th>
                                <th>QTY IN WAREHOUSE</th>
                                <th>WEB</th>
                                <th>QTY STOCK</th>
                                <th>SHOP DAYS IN STOCK</th>
                                <th>SHOP QTY SOLD</th>

                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td><img width="80px" height="80px" src="{{url('public/image/image1.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>01-61481BQ</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td></td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>YES</td>
                                <td>5</td>
                                <td>15</td>
                                <td>3</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>

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
            $('#datatable').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            } );


//            $().DataTable();
        } );
    </script>

@endsection