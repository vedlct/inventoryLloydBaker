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
                        <h4 class="card-title">Shop</h4>
                    </div>
                    <div class="card-body">
                        <div style="text-align: right;margin-right: 20px">
                            <a href="{{route('settings.location.add')}}" class="btn btn-info"><i class="fa fa-plus"></i><span class="title">Add Shop</span></a>
                        </div>

                        <div class="table-responsive">
                            <table id="shopTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

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

            dataTable=  $('#shopTable').DataTable({
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
                   "url": "{!! route('settings.location.getAllShop') !!}",
                   "type": "POST",
                   data:function (d){
                       d._token="{{csrf_token()}}";
                   },
               },
               columns: [
                   { data: 'shopName', name: 'shop.shopName' },
                   { data: 'shopLocation', name: 'shop.shopLocation' },
                   { data: 'shopStatus', name: 'shop.shopStatus' },

                   { "data": function(data){
                            return '<button class="btn btn-info btn-sm mr-2" data-panel-id="'+data.shopId+'" onclick="editShop(this)"><i class="fa fa-edit fa-lg"></i></button>'+
                                   '<button class="btn btn-info btn-sm" data-panel-id="'+data.shopId+'" onclick="deleteShop(this)"><i class="fa fa-trash fa-lg"></i></button>'
                            ;},
                        "orderable": false, "searchable":false, "name":"selected_rows" },
               ]
           } );

        } );

        // call edit shop
        function editShop(x) {
            btn = $(x).data('panel-id');
            var url = '{{route("shop.edit", ":id") }}';
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;
        }

        // call delete shop
        function deleteShop(x) {

            // confirmation
            var result = confirm("Are you sure want to delete?");
            if (result) {
                btn = $(x).data('panel-id');

                $.ajax({
                     type: 'POST',
                     url: "{!! route('shop.delete') !!}",
                     cache: false,
                     data: {
                         _token: "{{csrf_token()}}",
                         'id': btn
                     },
                     success: function (data) {
                         $.alert({
                             animationBounce: 2,
                             title: 'Success!',
                             content: 'Shop Deleted',
                         });
                         dataTable.ajax.reload();
                     }
                });
            }

        }



    </script>

@endsection
