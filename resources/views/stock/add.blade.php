@extends('main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Excel File</label>
                    <input type="file" class="form-control" placeholder="insert excel report">
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-sm btn-success pull-right">Submit</button>
                </div>

            </div>

        </div>
        <div class="card-body">
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

                <div class="form-group col-md-6">
                    <label>DATE</label>
                    <input type="text" placeholder="date" class="form-control">

                </div>

                <div class="form-group col-md-6">
                    <label>TIME OF SALE</label>
                    <input type="text" placeholder="TIME OF SALE" class="form-control">

                </div>



                <div class="form-group col-md-6">
                    <label>TILL NO/label>
                    <input type="text" placeholder="TILL NO" class="form-control">

                </div>


                <div class="form-group col-md-6">
                    <label>RECEIPT NO</label>
                    <input type="text" placeholder="RECEIPT NO" class="form-control">

                </div>



                <div class="form-group col-md-6">
                    <label>STAFF NO</label>
                    <input type="text" placeholder="STAFF NO" class="form-control">

                </div>


                <div class="form-group col-md-6">
                    <label>BARCODE</label>
                    <input type="text" placeholder="BARCODE" class="form-control">

                </div>


                <div class="form-group col-md-6">
                    <label>STK (SALE/ REFUND)</label>
                    <input type="number" placeholder="STK (SALE/ REFUND)" class="form-control">

                </div>


                <div class="form-group col-md-6">
                    <label>ACTUAL PRICE</label>
                    <input type="number" placeholder="ACTUAL PRICE" class="form-control">

                </div>


                <div class="form-group col-md-6">
                    <label>SALE PRICE (DISCOUNTED)</label>
                    <input type="number" placeholder="SALE PRICE (DISCOUNTED)" class="form-control">

                </div>

                <div class="form-group col-md-12">
                    <button class="btn btn-sm btn-success pull-right">Submit</button>

                </div>



            </div>

        </div>
    </div>

</div>


@endsection