@extends('main')
@section('header')

    <!-- DataTables -->
    <link href="{{url('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{url('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
    {{--https://cdn.datatables.net/rowreorder/1.2.3/css/rowReorder.dataTables.min.css--}}
    {{--https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css--}}


@endsection

@section('content')

    <div class="modal" id="editModalNationality">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Rang Plan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="" action="{{route('mainsreen')}}">

                        <div class="form-group">
                            <label class="control-label">Range Plan</label>
                            <div>
                                <input type="text" id="RangePlan"class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button  type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button id="closemodal" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a >Upcube</a></li>
                        <li class="breadcrumb-item"><a >Tables</a></li>
                        <li class="breadcrumb-item active">Datatable</li>
                    </ol>
                </div>
                <h4 class="page-title">Datatable</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Goods In WareHouse</h4>

                    <form method="post" enctype="multipart/form-data" action="{{route('goods-in.excel')}}">
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


                    <div class="table table-responsive">

                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">BR</th>
                                <th style="font-weight: bold">FT</th>
                                <th style="font-weight: bold">PHOTO</th>
                                <th style="font-weight: bold">Style</th>
                                <th style="font-weight: bold">FT Code</th>
                                <th style="font-weight: bold">COLOUR</th>
                                <th style="font-weight: bold">EAN 13</th>
                                <th style="font-weight: bold">CP</th>
                                <th style="font-weight: bold">SP</th>
                                <th style="font-weight: bold">RRP</th>
                                <th style="font-weight: bold">QTY IN WH</th>
                                <th style="font-weight: bold">STOCK IN</th>

                            </tr>
                            </thead>


                            <tbody>
                            {{--<tr>--}}
                                {{--<td>PC</td>--}}
                                {{--<td></td>--}}
                                {{--<td><img width="80px" height="80px" src="{{url('public/image/image1.jpeg')}}"></td>--}}
                                {{--<td>THE AURORA PC6148</td>--}}
                                {{--<td>01-61481BQ</td>--}}
                                {{--<td>TAUPE BROWN 1BQ</td>--}}
                                {{--<td></td>--}}
                                {{--<td></td>--}}
                                {{--<td>£69.99</td>--}}
                                {{--<td>£230.00</td>--}}
                                {{--<td>7</td>--}}
                                {{--<td><input style="width: 80px" type="number" onKeyPress="if(this.value.length==6) return false;"></td>--}}


                            {{--</tr>--}}



                            </tbody>
                        </table>
                        
                    </div>

                    <div class="form-group col-md-12">
                        <button class="btn btn-group-lg btn-success " style="float: right" onclick="updateStock()">Update Stock</button>
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
            // $('#datatable').DataTable({
            //
            // } );




            dataTable=  $('#datatable').DataTable({
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
                    "url": "{!! route('goods-in.getdata') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                        d.date=$('#date1').val();
                        d.clientId=$('#clientId').val();
                        d.statusId=$('#statusId').val();


                    },
                },

                columns: [
                    { data: 'brandId', name: 'product.brandId' },
                    { data: 'ft', name: 'product.ft' },
                    { data: 'mainImage', name: 'product.mainImage' },
                    { data: 'style', name: 'product.style' },
                    { data: 'ftCode', name: 'product.ftCode' },
                    { data: 'color', name: 'product.color' },
                    { data: 'ean', name: 'product.ean'},
                    { data: 'costPrice', name: 'product.costPrice'},
                    { data: 'retailPrice', name: 'product.retailPrice'},
                    { data: 'RRP', name: 'product.RRP'},
                    { "data": function(data){
                            return data.qty;},
                        "orderable": false, "searchable":false, "name":"selected_rows" },
                    { "data": function(data){
                                return '<input style="width: 80px" type="number" data-panel-id="'+data.productId+'" name="stockIn[]" onKeyPress="if(this.value.length==6) return false;">'
                                ;},
                        "orderable": false, "searchable":false, "name":"selected_rows" },

                ]
            } );


        } );

        function editNationality(x) {


            $("#RangePlan").val(x);


            $('#editModalNationality').modal();



        }

        $('#closemodal').click(function() {
            $('#editModalNationality').modal('hide');
        });


        function updateStock() {
            // alert("sdfsd")
            var id=[];


            var values = $("input[name='stockIn[]']")
                .map(function(){
                    id.push($(this).data('panel-id'));
                    return $(this).val();
                }).get();


            var all=cleanArray(values,id);


            $.ajax({
            type: 'POST',
            url: "{!! route('goods-in.insertGoodsInStock') !!}",
            cache: false,
            data: {_token: "{{csrf_token()}}",'productsId': all.Ids,'values':all.values},
            success: function (data) {
                $.alert({
                    animationBounce: 2,
                    title: 'Success!',
                    content: 'Stock Inserted',
                });

                dataTable.ajax.reload();
            }
            });
        }


        function cleanArray(actual,id) {
            var newArray = new Array();
            var idArray = new Array();
            for (var i = 0; i < actual.length; i++) {
                if (actual[i]) {
                    idArray.push(id[i]);
                    newArray.push(actual[i]);
                }
            }
            var obj={'Ids':idArray,'values':newArray}
            return obj;
        }

    </script>

@endsection