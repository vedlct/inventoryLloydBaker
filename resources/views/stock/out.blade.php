@extends('main')
@section('header')

    <!-- DataTables -->
    <link href="{{url('public/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{url('public/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Stock Out From Shop</h4>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Shop</label>
                <select class="form-control" id="changeShop" onchange="changeShop(this)">
                    <option value="">Select Shop</option>
                    @foreach($shops as $shop)
                        <option value="{{$shop->shopId}}">{{$shop->shopName}}</option>
                    @endforeach
                </select>
            </div>

        </div>

    </div>
    <div class="card-body">

        <form method="post" enctype="multipart/form-data" action="{{route('stock.out.excel')}}">
            {{csrf_field()}}

        <div class="row">
            <div class="form-group col-md-12">
                <label>Import Stock</label>
                <input type="file" class="form-control" name="excel" placeholder="insert excel report" required>
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-sm btn-success ">Submit</button>
            </div>
        </div>
        </form>


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

            {{--<tr>--}}
                {{--<td>1</td>--}}
                {{--<td>2018-10-21</td>--}}
                {{--<td>1319</td>--}}
                {{--<td>4</td>--}}
                {{--<td>36971</td>--}}
                {{--<td>623</td>--}}
                {{--<td>5060615068517</td>--}}
                {{--<td >1</td>--}}
                {{--<td>79.99</td>--}}
                {{--<td>-79.99</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>1</td>--}}
                {{--<td>2018-10-22</td>--}}
                {{--<td>1319</td>--}}
                {{--<td>4</td>--}}
                {{--<td>36971</td>--}}
                {{--<td>623</td>--}}
                {{--<td>5060615068517</td>--}}
                {{--<td style="background: red;color: white">-1</td>--}}
                {{--<td>79.99</td>--}}
                {{--<td>-79.99</td>--}}
            {{--</tr>--}}
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

            // $('#example').DataTable({
            //     "aaSorting" : []
            // });

            dataTable=  $('#example').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(0)'
                },
                responsive: true,
                processing: true,
                serverSide: true,
                Filter: true,
                stateSave: true,
                ordering:false,
                type:"POST",
                "ajax":{
                    "url": "{!! route('stockout.getdata') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                        d.shopId=$('#changeShop').val();
                        // d.clientId=$('#clientId').val();
                        // d.statusId=$('#statusId').val();


                    },
                },

                columns: [
                    { data: 'fkshopId', name: 'stockout.fkshopId' },
                    { data: 'dateOfSale', name: 'stockout.dateOfSale' },
                    { data: 'timeOfSale', name: 'stockout.timeOfSale' },
                    { data: 'tillNo', name: 'stockout.tillNo' },
                    { data: 'receiptNo', name: 'stockout.receiptNo' },
                    { data: 'staffNo', name: 'stockout.staffNo' },
                    { data: 'barCode', name: 'stockout.barCode' },
                    { data: 'quantity', name: 'stockout.quantity'},
                    { data: 'actualPrice', name: 'stockout.actualPrice'},
                    { data: 'salePrice', name: 'stockout.salePrice'},

                ]
            } );


        } );

        function changeShop(x) {
            dataTable.ajax.reload();

        }
    </script>

@endsection