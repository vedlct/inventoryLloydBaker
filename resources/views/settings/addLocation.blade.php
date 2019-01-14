@extends('main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Add Shop</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post">
                            @csrf

                            <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Name:</label>
                                        <div class="custom-input-style">
                                            <input type="text" required name="name" class="form-control" placeholder="name" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Email:</label>
                                        <div class="custom-input-style">
                                            <input type="email" required name="email" class="form-control" placeholder="email" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Phone:</label>
                                        <div class="custom-input-style">
                                            <input type="tel" required name="phone" class="form-control" placeholder="phone" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Shop Contact Person:</label>
                                        <div class="custom-input-style">
                                            <input type="text" required name="contactPerson" class="form-control" placeholder="shop contact person" >
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Location:</label>
                                        <div class="custom-input-style" >
                                            <textarea name="location" rows="4" cols="80" class="form-control" placeholder="Put your shop location here"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Description:</label>
                                        <div class="custom-input-style" >
                                            <textarea name="desc" rows="4" cols="80" class="form-control" placeholder="Here can be your shop description"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="control-label custom-label-style">Status</label>
                                        <div class="custom-input-style">
                                            <select class="form-control" name="status" required>
                                                <option selected value="">Select Status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="custom-input-style" >
                                            <button class="btn btn-info">Create</button>
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
