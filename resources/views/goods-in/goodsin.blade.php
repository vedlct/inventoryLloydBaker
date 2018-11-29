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

                    <h4 class="mt-0 header-title">Goods In</h4>


                    <div class="table table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">BR</th>
                                <th style="font-weight: bold">FT</th>
                                <th style="font-weight: bold">PHOTO</th>
                                <th style="font-weight: bold">Style</th>
                                <th style="font-weight: bold">SR BARCODE</th>
                                <th style="font-weight: bold">COLOUR</th>
                                <th style="font-weight: bold">EAN 13</th>
                                <th style="font-weight: bold">CP</th>
                                <th style="font-weight: bold">SP</th>
                                <th style="font-weight: bold">RRP</th>
                                <th style="font-weight: bold">QTY IN WARH</th>
                                <th style="font-weight: bold">ADD STOCK</th>
                                <th style="font-weight: bold">STOCK IN</th>

                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image1.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>01-61481BQ</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td></td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image2.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>01-61484A</td>
                                <td>NAVY</td>
                                <td></td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image3.jpeg')}}"></td>
                                <td>THE MARIELLE KEYRING PC3151</td>
                                <td>02-3151BLK</td>
                                <td>BLACK</td>
                                <td>5060615064915</td>
                                <td>£12.99</td>
                                <td>£12.99</td>
                                <td>£34.99</td>
                                <td>4</td>
                                <td>5</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image5.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>01-61481BQ</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td></td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>10</td>
                                <td>3</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image155.jpeg')}}"></td>
                                <td>LB6421X</td>
                                <td>3-6421XTAN</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td>5060615065394</td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image155.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>3-6421XTAN</td>
                                <td>A.Tan NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£225.00</td>
                                <td>25</td>
                                <td>12</td>
                                <td><input type="number" max="6"></td>


                            </tr>

                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image158.jpeg')}}"></td>
                                <td>THE ETICHETTA SIGNAGE  PC5161</td>
                                <td>3-5161P32D</td>
                                <td>Rose Pink 32DA</td>
                                <td>5060615066018</td>
                                <td>£39.9</td>

                                <td>£39.99</td>
                                <td>£150.00</td>
                                <td>14</td>
                                <td>17</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image178.jpeg')}}"></td>
                                <td>LB5203</td>
                                <td>3-5203BL</td>
                                <td>Blue VT Flat</td>
                                <td>5060615065462</td>
                                <td></td>

                                <td>£49.99</td>
                                <td>£200.00</td>
                                <td>14</td>
                                <td>12</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image180.jpeg')}}"></td>
                                <td>LB5754</td>
                                <td>3-5754OW</td>
                                <td>Off White NDM</td>
                                <td>5060615065653</td>
                                <td></td>

                                <td>£89.99</td>
                                <td>£225.00</td>
                                <td>80</td>
                                <td>28</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image181.jpeg')}}"></td>
                                <td>LB5860</td>
                                <td>3-5865AXBK</td>
                                <td>Black RJ Croc</td>
                                <td>5060615065660</td>
                                <td></td>

                                <td>£59.99</td>
                                <td>£175.00</td>
                                <td>25</td>
                                <td>14</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image220.jpeg')}}"></td>
                                <td>LB5873</td>
                                <td>3-5873BK</td>
                                <td>Black Floater</td>
                                <td>5060615065707</td>
                                <td></td>

                                <td>£79.99</td>
                                <td>£179.00</td>
                                <td>58</td>
                                <td>16</td>
                                <td><input type="number" max="6"></td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image310.jpeg')}}"></td>
                                <td>LB5876AY</td>
                                <td>3-5876AYTAN</td>
                                <td>A.Tan NDM</td>
                                <td>5060615065721</td>
                                <td></td>

                                <td>£59.99</td>
                                <td>£175.00</td>
                                <td>14</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image350.jpeg')}}"></td>
                                <td>LB6103A</td>
                                <td>3-6103A931D</td>
                                <td>Pink 31DC NDM</td>
                                <td>5060615065844</td>
                                <td></td>

                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>24</td>
                                <td>14</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image340.jpeg')}}"></td>
                                <td>LB6115A</td>
                                <td>3-6115AB40</td>
                                <td>Blue 40RA NDM</td>
                                <td></td>
                                <td></td>

                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>17</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image258.jpeg')}}"></td>
                                <td>LB6115A</td>
                                <td>3-6115AB1Y</td>
                                <td>Brown 1Y NDM</td>
                                <td>5060615065875</td>
                                <td></td>

                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>17</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>

                            </tr>

                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image158.jpeg')}}"></td>
                                <td>LB6256AX</td>
                                <td>3-6256AXG103</td>
                                <td>Gunmetal 103Y RJ Metalic Foil</td>
                                <td>5060615065882z</td>
                                <td></td>

                                <td>£49.99</td>
                                <td>£200.00</td>
                                <td>27</td>
                                <td>12</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image179.jpeg')}}"></td>
                                <td>LB6517</td>
                                <td>3-6514TAN</td>
                                <td>A.Tan NDM</td>

                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>35</td>
                                <td>17</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image147.jpeg')}}"></td>
                                <td>LB6517</td>
                                <td>3-6517B41A</td>
                                <td>Blue 41A NDM</td>
                                <td></td>
                                <td></td>

                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>14</td>
                                <td>09</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image296.jpeg')}}"></td>
                                <td>LB6577X</td>
                                <td>3-6577XBRN</td>
                                <td>Brown NDM</td>
                                <td>5060615065905</td>
                                <td>5060615065905</td>

                                <td>£79.99</td>
                                <td>£225.00</td>
                                <td>47</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>

                                <td><img width="80px" height="80px" src="{{url('public/image/image124.jpeg')}}"></td>
                                <td>LB1232</td>
                                <td>01-1232BLK</td>
                                <td>BLACK</td>
                                <td>5060615064342</td>
                                <td>5060615064342</td>

                                <td>£79.99</td>
                                <td>£125.00</td>
                                <td>7</td>
                                <td>15</td>
                                <td><input type="number" max="6"></td>

                            </tr>

                            </tbody>
                        </table>


                    </div>

                    <div class="form-group col-md-12">
                        <button class="btn btn-group-lg btn-success ">Submit</button>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Insert Stock</label>
                            <input type="file" class="form-control" placeholder="insert excel report">
                        </div>
                        <div class="form-group col-md-6">

                            <button class="btn btn-sm btn-success " style="margin-top: 35px">Submit</button>
                        </div>





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

            } );


//            $().DataTable();
        } );

        function editNationality(x) {


            $("#RangePlan").val(x);


            $('#editModalNationality').modal();



        }

        $('#closemodal').click(function() {
            $('#editModalNationality').modal('hide');
        });

    </script>

@endsection