@extends('main')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Product</label>
                <input type="text" class="form-control" placeholder="product name">
            </div>

            <div class="form-group col-md-6">
                <label>Product Category</label>
                <select class="form-control">
                    <option>Select Category</option>
                    <option>Womenswear>Gowns</option>
                    <option>Womenswear Accessories.Bags.Cross-body Bags</option>
                    <option>Women.Accessories.Purses</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Style Code</label>
                <input type="text" class="form-control" placeholder="STYLE CODE">
            </div>

            <div class="form-group col-md-6">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Description">
            </div>

            <div class="form-group col-md-6">
                <label>Cost Price</label>
                <input type="text" class="form-control" placeholder="COST PRICE">
            </div>
            <div class="form-group col-md-6">
                <label>Unit</label>
                <input type="text" class="form-control" placeholder="unit">
            </div>
            <div class="form-group col-md-12">
               <button class="btn btn-sm btn-success pull-right">Insert</button>
            </div>




        </div>
    </div>
</div>


@endsection