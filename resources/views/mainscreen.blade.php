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

        <div class="col-md-12">


            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Main Screen</h4>

                    <div class="row">

                        <div class="col-md-4"style="margin-left: 15px">
                            <div class="form-group">
                                <label>Select Shop</label>
                                <div>
                                    <input type="checkbox"> Shop-1
                                    <input type="checkbox"> Shop-2
                                    <input type="checkbox"> Shop-3
                                    <input type="checkbox"> Shop-4
                                    <input type="checkbox"> Shop-5
                                    <input type="checkbox"> Shop-6
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="margin-left: -100px">
                            <div class="form-group">
                                <label>Period</label>
                                <div>
                                    <select class="form-control">
                                        <option>Select A period</option>
                                        <option selected>Current(LIVE)</option>
                                        <option>Last 30 days</option>
                                        <option> Last 7 Days</option>
                                        <option>Last 60 days</option>
                                        <option>Last 90 days</option>
                                        <option>Last 120 days</option>
                                        <option>Last 150 days</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Date From</label>
                                <input type="date" class="form-control"  placeholder="Type something"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Date To</label>
                                <input type="date" class="form-control"  placeholder="Type something"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div style="margin-top: 30px;" class="form-group">

                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>

                            </div>
                        </div>
                    </div>

                    <div class="table table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="font-weight: bold">BR</th>
                                <th style="font-weight: bold">FT</th>
                                <th style="font-weight: bold">CATEGORY</th>
                                <th style="font-weight: bold">PHOTO</th>
                                <th style="font-weight: bold">NAME</th>
                                <th style="font-weight: bold">FT CODE</th>
                                <th style="font-weight: bold">COLOUR</th>
                                <th style="font-weight: bold">EAN 13</th>
                                <th style="font-weight: bold">CP</th>
                                <th style="font-weight: bold">SP</th>
                                <th style="font-weight: bold">RRP</th>
                                <th style="font-weight: bold">QTY WH</th>
                                <th style="font-weight: bold">WEB</th>
                                <th style="font-weight: bold; text-align: center" width="25%">SHOP STOCK
                                <table>
                                    <thead>
                                    <th style="font-weight: bold" width="20%">Shop </th>
                                    <th style="font-weight: bold" width="20%">RP</th>
                                    <th style="font-weight: bold" width="20%">QTY STK</th>
                                    <th style="font-weight: bold" width="20%">DAYS IN STK</th>
                                    <th style="font-weight: bold" width="20%">QTY SOLD</th>
                                    </thead>
                                </table>
                                </th>

                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>LADIES</td>
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
                                <td>

                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">2</a></td>
                                            <td width="20%">5</td>
                                            <td width="20%">15</td>
                                            <td width="20%">3</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">12</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">18</td>
                                            <td width="20%">14</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">6</a></td>
                                            <td width="20%">7</td>
                                            <td width="20%">11</td>
                                            <td width="20%">8</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">17</td>
                                            <td width="20%">4</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>



                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>LADIES</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image2.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>01-61484A</td>
                                <td>NAVY</td>
                                <td></td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">6</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">14</td>
                                            <td width="20%">13</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">9</a></td>
                                            <td width="20%">1</td>
                                            <td width="20%">8</td>
                                            <td width="20%">4</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">12</td>
                                            <td width="20%">17</td>
                                            <td width="20%">8</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">17</td>
                                            <td width="20%">4</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>

                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>LADIES</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image3.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">6</td>
                                            <td width="20%">7</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">54</a></td>
                                            <td width="20%">19</td>
                                            <td width="20%">27</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image5.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>01-61481BQ</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td></td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>10</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">9</td>
                                            <td width="20%">1</td>
                                            <td width="20%">23</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">64</a></td>
                                            <td width="20%">39</td>
                                            <td width="20%">45</td>
                                            <td width="20%">14</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">2</a></td>
                                            <td width="20%">4</td>
                                            <td width="20%">5</td>
                                            <td width="20%">6</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">22</td>
                                            <td width="20%">17</td>
                                            <td width="20%">38</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">16</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">5</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">19</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image155.jpeg')}}"></td>
                                <td>LB6421X</td>
                                <td>3-6421XTAN</td>
                                <td>TAUPE BROWN 1BQ</td>
                                <td>5060615065394</td>
                                <td></td>
                                <td>£69.99</td>
                                <td>£230.00</td>
                                <td>7</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">60</a></td>
                                            <td width="20%">81</td>
                                            <td width="20%">84</td>
                                            <td width="20%">33</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">10</td>
                                            <td width="20%">68</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">12</td>
                                            <td width="20%">17</td>
                                            <td width="20%">8</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">6</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">17</td>
                                            <td width="20%">4</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image155.jpeg')}}"></td>
                                <td>THE AURORA PC6148</td>
                                <td>3-6421XTAN</td>
                                <td>A.Tan NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£225.00</td>
                                <td>25</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">36</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">24</td>
                                            <td width="20%">13</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">13</td>
                                            <td width="20%">14</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">34</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">37</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>

                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image158.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">9</td>
                                            <td width="20%">1</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">11</td>
                                            <td width="20%">18</td>
                                            <td width="20%">44</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">12</td>
                                            <td width="20%">18</td>
                                            <td width="20%">54</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">12</td>
                                            <td width="20%">17</td>
                                            <td width="20%">8</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">17</td>
                                            <td width="20%">4</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image178.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">58</td>
                                            <td width="20%">34</td>
                                            <td width="20%">43</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">11</td>
                                            <td width="20%">48</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">9</td>
                                            <td width="20%">40</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">34</a></td>
                                            <td width="20%">28</td>
                                            <td width="20%">37</td>
                                            <td width="20%">41</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image180.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">38</td>
                                            <td width="20%">24</td>
                                            <td width="20%">43</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">21</td>
                                            <td width="20%">48</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">12</a></td>
                                            <td width="20%">30</td>
                                            <td width="20%">14</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">13</td>
                                            <td width="20%">19</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">7</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>LADIES</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image181.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">36</a></td>
                                            <td width="20%">14</td>
                                            <td width="20%">16</td>
                                            <td width="20%">13</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">26</td>
                                            <td width="20%">58</td>
                                            <td width="20%">24</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">20</td>
                                            <td width="20%">64</td>
                                            <td width="20%">79</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">20</a></td>
                                            <td width="20%">33</td>
                                            <td width="20%">49</td>
                                            <td width="20%">28</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">19</td>
                                            <td width="20%">52</td>
                                            <td width="20%">17</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">52</a></td>
                                            <td width="20%">32</td>
                                            <td width="20%">17</td>
                                            <td width="20%">44</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>LADIES</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image220.jpeg')}}"></td>
                                <td>LB5873</td>
                                <td>3-5873BK</td>
                                <td>Black Floater</td>
                                <td>5060615065707</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£179.00</td>
                                <td>58</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">38</td>
                                            <td width="20%">24</td>
                                            <td width="20%">43</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">21</td>
                                            <td width="20%">48</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">12</a></td>
                                            <td width="20%">30</td>
                                            <td width="20%">14</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">13</td>
                                            <td width="20%">19</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">7</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>LADIES</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image310.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">38</td>
                                            <td width="20%">24</td>
                                            <td width="20%">43</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">21</td>
                                            <td width="20%">48</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">12</a></td>
                                            <td width="20%">30</td>
                                            <td width="20%">14</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">13</td>
                                            <td width="20%">19</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">7</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image350.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">9</td>
                                            <td width="20%">1</td>
                                            <td width="20%">23</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">64</a></td>
                                            <td width="20%">39</td>
                                            <td width="20%">45</td>
                                            <td width="20%">14</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">2</a></td>
                                            <td width="20%">4</td>
                                            <td width="20%">5</td>
                                            <td width="20%">6</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">22</td>
                                            <td width="20%">17</td>
                                            <td width="20%">38</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">16</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">5</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">19</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image340.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">38</td>
                                            <td width="20%">24</td>
                                            <td width="20%">43</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">21</td>
                                            <td width="20%">48</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">12</a></td>
                                            <td width="20%">30</td>
                                            <td width="20%">14</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">13</td>
                                            <td width="20%">19</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">7</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image258.jpeg')}}"></td>
                                <td>LB6115A</td>
                                <td>3-6115AB1Y</td>
                                <td>Brown 1Y NDM</td>
                                <td>5060615065875</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>17</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">36</a></td>
                                            <td width="20%">24</td>
                                            <td width="20%">38</td>
                                            <td width="20%">12</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">17</a></td>
                                            <td width="20%">19</td>
                                            <td width="20%">15</td>
                                            <td width="20%">16</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">17</a></td>
                                            <td width="20%">18</td>
                                            <td width="20%">19</td>
                                            <td width="20%">20</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">15</a></td>
                                            <td width="20%">16</td>
                                            <td width="20%">17</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">16</td>
                                            <td width="20%">18</td>
                                            <td width="20%">19</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">34</a></td>
                                            <td width="20%">28</td>
                                            <td width="20%">37</td>
                                            <td width="20%">41</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>

                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image158.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">16</a></td>
                                            <td width="20%">58</td>
                                            <td width="20%">34</td>
                                            <td width="20%">43</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">19</a></td>
                                            <td width="20%">11</td>
                                            <td width="20%">48</td>
                                            <td width="20%">34</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">9</td>
                                            <td width="20%">40</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">34</a></td>
                                            <td width="20%">28</td>
                                            <td width="20%">37</td>
                                            <td width="20%">41</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image179.jpeg')}}"></td>
                                <td>LB6517</td>
                                <td>3-6514TAN</td>
                                <td>A.Tan NDM</td>
                                <td></td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£175.00</td>
                                <td>35</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">59</td>
                                            <td width="20%">31</td>
                                            <td width="20%">13</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">29</td>
                                            <td width="20%">45</td>
                                            <td width="20%">15</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">2</a></td>
                                            <td width="20%">4</td>
                                            <td width="20%">5</td>
                                            <td width="20%">6</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">22</td>
                                            <td width="20%">17</td>
                                            <td width="20%">38</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">16</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">5</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">19</td>
                                            <td width="20%">14</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image147.jpeg')}}"></td>
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
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">6</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">14</td>
                                            <td width="20%">13</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">9</a></td>
                                            <td width="20%">1</td>
                                            <td width="20%">8</td>
                                            <td width="20%">4</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">12</td>
                                            <td width="20%">17</td>
                                            <td width="20%">8</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)"></a></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                            <td width="20%"></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">17</td>
                                            <td width="20%">4</td>
                                        </tr>


                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image296.jpeg')}}"></td>
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
                                    <table class="table table-striped">

                                        <thead>
                                        <th style="font-weight: bold">Shop </th>
                                        <th style="font-weight: bold">RP</th>
                                        <th style="font-weight: bold">QTY ST</th>
                                        <th style="font-weight: bold">DAYS IN ST</th>
                                        <th style="font-weight: bold">QTY SOLD</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Shop 1</td>
                                            <td><a href="#" id="RP" onclick="editNationality(this.text)">2</a></td>
                                            <td>5</td>
                                            <td>15</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Shop 2</td>
                                            <td><a href="#" id="RP" onclick="editNationality(this.text)">3</a></td>
                                            <td>5</td>
                                            <td>18</td>
                                            <td>4</td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </td>


                            </tr>
                            <tr>
                                <td>PC</td>
                                <td></td>
                                <td>F- SLG</td>
                                <td><img width="80px" height="80px" src="{{url('public/image/image124.jpeg')}}"></td>
                                <td>LB1232</td>
                                <td>01-1232BLK</td>
                                <td>BLACK</td>
                                <td>5060615064342</td>
                                <td></td>
                                <td>£79.99</td>
                                <td>£125.00</td>
                                <td>7</td>
                                <td>YES</td>
                                <td>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="20%">Shop-1</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">4</a></td>
                                            <td width="20%">9</td>
                                            <td width="20%">1</td>
                                            <td width="20%">23</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-2</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">64</a></td>
                                            <td width="20%">39</td>
                                            <td width="20%">45</td>
                                            <td width="20%">14</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-3</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">2</a></td>
                                            <td width="20%">4</td>
                                            <td width="20%">5</td>
                                            <td width="20%">6</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-4</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">40</a></td>
                                            <td width="20%">22</td>
                                            <td width="20%">17</td>
                                            <td width="20%">38</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-5</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">14</a></td>
                                            <td width="20%">15</td>
                                            <td width="20%">16</td>
                                            <td width="20%">18</td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Shop-6</td>
                                            <td width="20%"><a href="#" id="RP" onclick="editNationality(this.text)">5</a></td>
                                            <td width="20%">8</td>
                                            <td width="20%">19</td>
                                            <td width="20%">14</td>
                                        </tr>


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
            $('#datatable').DataTable({
                "columnDefs": [
                    { "orderable": false, "targets": 13 }
                ]
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