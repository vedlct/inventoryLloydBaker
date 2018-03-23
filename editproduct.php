
<?php include ("header.php"); ?>

<div class="main-panel">
    <!-- Navbar -->
    <?php include ('navigation.php');?>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Product</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Product Category</label>
                                <div class="col-md-8 custom-input-style">
                                    <select  class="form-control" >
                                        <option value="">Select Product Category</option>
                                        <option value="">Men->Pant</option>
                                        <option value="">Women->Gown</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Product Name</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Product Name" >
                            </div>




                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style" for="exampleInputEmail1">Brand Name</label>
                                <input type="text"  class="col-md-8 custom-input-style form-control" placeholder="Brand Name">
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">SKU</label>
                                <input type="text" class="col-md-8 custom-input-style form-control"  placeholder="SKU" >
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Color</label>
                                <input type="text"  class="col-md-8 custom-input-style form-control" placeholder="Color" >
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Product Description</label>
                                <div class="col-md-8 custom-input-style">
                                    <textarea  class="form-control" placeholder="Product Description"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Cost price(£)</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Cost price(£)" >
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Whole sale price(£)</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Whole sale price(£)" >
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">RRP(£)</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="RRP(£)">
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Stock Qty</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Stock Qty" value="">
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Min Qty Alert</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Min Qty Alert" value="">
                            </div>

                            <div class="form-group">

                                <label class="control-label col-md-2 custom-label-style">Product Stored Location</label>

                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Location" value="">


                            </div>

                            <div class="form-group">

                                <label class="control-label col-md-2 custom-label-style">product Image</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="file" name="image2Pic" class="form-control" accept=".jpg, .jpeg" id="image2Pic">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <div style="margin-left: 14%" class="col-md-8 custom-input-style">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ("footer.php"); ?>
