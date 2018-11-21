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
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                    <div class="table table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">BRAND</th>
                                <th style="font-weight: bold">CATEGORY</th>
                                <th style="font-weight: bold">NAME</th>
                                <th style="font-weight: bold">FACTORY CODE</th>
                                <th style="font-weight: bold">COLOUR</th>
                                <th style="font-weight: bold">EAN 13 BARCODES</th>
                                <th style="font-weight: bold">CP</th>
                                <th style="font-weight: bold">SP</th>
                                <th style="font-weight: bold">RRP</th>
                                <th style="font-weight: bold">QTY IN WAREHOUSE</th>
                                <th style="font-weight: bold">WEB</th>
                                <th style="font-weight: bold">shop-1</th>
                                <th style="font-weight: bold">shop-2</th>
                                <th style="font-weight: bold">shop-3</th>


                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>PC</td>

                                <td>LADIES</td>

                                <td>THE AURORA PC6148</td>
                                <td>01-61481BQ</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td></td>
                                <td></td>
                                <td>6</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>LADIES</td>

                                <td>THE AURORA PC6148</td>
                                <td>01-61484A</td>
                                <td>NAVY</td>
                                <td></td>
                                <td></td>
                                <td>6</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>LADIES</td>

                                <td>THE MARIELLE KEYRING PC3151</td>
                                <td>02-3151BLK</td>
                                <td>BLACK</td>
                                <td>5060615064915</td>
                                <td></td>
                                <td>£12.99</td>
                                <td>£34.99</td>
                                <td>4</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>5</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>THE AURORA PC6148</td>
                                <td>01-61481BQ</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td></td>
                                <td></td>
                                <td>6</td>
                                <td>£230.00</td>
                                <td>10</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6421X</td>
                                <td>3-6421XTAN</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td>5060615065394</td>
                                <td></td>
                                <td>6</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>THE AURORA PC6148</td>
                                <td>3-6421XTAN</td>
                                <td>A.Tan NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£225.00</td>
                                <td>25</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>

                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>THE ETICHETTA SIGNAGE  PC5161</td>
                                <td>3-5161P32D</td>
                                <td>Rose Pink 32DA</td>
                                <td>5060615066018</td>
                                <td></td>
                                <td>£39.99</td>
                                <td>£150.00</td>
                                <td>14</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB5203</td>
                                <td>3-5203BL</td>
                                <td>Blue VT Flat</td>
                                <td>5060615065462</td>
                                <td></td>
                                <td>£49.99</td>
                                <td>£200.00</td>
                                <td>14</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB5754</td>
                                <td>3-5754OW</td>
                                <td>Off White NDM</td>
                                <td>5060615065653</td>
                                <td></td>
                                <td>£89.99</td>
                                <td>£225.00</td>
                                <td>80</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>LADIES</td>

                                <td>LB5860</td>
                                <td>3-5865AXBK</td>
                                <td>Black RJ Croc</td>
                                <td>5060615065660</td>
                                <td></td>
                                <td>£59.99</td>
                                <td>£175.00</td>
                                <td>25</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>LADIES</td>

                                <td>LB5873</td>
                                <td>3-5873BK</td>
                                <td>Black Floater</td>
                                <td>5060615065707</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£179.00</td>
                                <td>58</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>LADIES</td>

                                <td>LB5876AY</td>
                                <td>3-5876AYTAN</td>
                                <td>A.Tan NDM</td>
                                <td>5060615065721</td>
                                <td></td>
                                <td>£59.99</td>
                                <td>£175.00</td>
                                <td>14</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6103A</td>
                                <td>3-6103A931D</td>
                                <td>Pink 31DC NDM</td>
                                <td>5060615065844</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>24</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6115A</td>
                                <td>3-6115AB40</td>
                                <td>Blue 40RA NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>17</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6115A</td>
                                <td>3-6115AB1Y</td>
                                <td>Brown 1Y NDM</td>
                                <td>5060615065875</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>17</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>

                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6256AX</td>
                                <td>3-6256AXG103</td>
                                <td>Gunmetal 103Y RJ Metalic Foil</td>
                                <td>5060615065882</td>
                                <td></td>
                                <td>£49.99</td>
                                <td>£200.00</td>
                                <td>27</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6517</td>
                                <td>3-6514TAN</td>
                                <td>A.Tan NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>35</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6517</td>
                                <td>3-6517B41A</td>
                                <td>Blue 41A NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>14</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB6577X</td>
                                <td>3-6577XBRN</td>
                                <td>Brown NDM</td>
                                <td>5060615065905</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£225.00</td>
                                <td>47</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>

                                <td>F- SLG</td>

                                <td>LB1232</td>
                                <td>01-1232BLK</td>
                                <td>BLACK</td>
                                <td>5060615064342</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£125.00</td>
                                <td>7</td>
                                <td>NO</td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>QTY SOLD</th>
                                        <th>DAYS IN STOCK</th>
                                        </thead>
                                        <tbody>
                                        <td>7</td>
                                        <td>6</td>
                                        </tbody>
                                    </table>
                                </td>

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