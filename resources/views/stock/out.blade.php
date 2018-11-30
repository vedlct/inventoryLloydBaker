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
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Store Stock</h4>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Shop</label>
                <select class="form-control">
                    <option>Select Shop</option>
                    <option>Shop 1</option>
                    <option>Shop 2</option>
                    <option>Shop 3</option>
                </select>
            </div>

        </div>

    </div>
    <div class="card-body">

        <div class="row">
            <div class="form-group col-md-12">
                <label>Import Stock</label>
                <input type="file" class="form-control" placeholder="insert excel report">
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-sm btn-success ">Submit</button>
            </div>





        </div>
       <table class="table table-striped" id="example">
           <thead>
            <th>SHOP NO</th>
            <th>DATE</th>
            <th>TIME OF SALE</th>
            <th>TILL NO</th>
            <th>RECEIPT NO</th>
            <th>STAFF NO</th>
            <th>BARCODE</th>
            <th>STK (SALE/ REFUND)</th>
            <th>ACTUAL PRICE</th>
            <th>SALE PRICE (DISCOUNTED)</th>
           </thead>

           <tbody>
            <tr>
                <td>2</td>
                <td>2018-10-21</td>
                <td>1627</td>
                <td>10</td>
                <td>68302</td>
                <td>164</td>
                <td>LB4154BLK</td>
                <td>1</td>
                <td>79.99</td>
                <td>79.99</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2018-10-21</td>
                <td>1319</td>
                <td>4</td>
                <td>36971</td>
                <td>623</td>
                <td>5060615068517</td>
                <td >1</td>
                <td>79.99</td>
                <td>-79.99</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2018-10-22</td>
                <td>1319</td>
                <td>4</td>
                <td>36971</td>
                <td>623</td>
                <td>5060615068517</td>
                <td style="background: red;color: white">-1</td>
                <td>79.99</td>
                <td>-79.99</td>
            </tr>
           </tbody>

       </table>



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