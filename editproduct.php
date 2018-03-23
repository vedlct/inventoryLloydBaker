
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
                        <form>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Product Category</label>
                                        <select class="form-control" >
                                            <option value="">Select Product Category</option>
                                            <option value="">Men->Pant</option>
                                            <option value="">Women->Gown</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" placeholder="Product Name" value="AMANDAW MP">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brand Name</label>
                                        <input type="text" class="form-control" placeholder="Brand Name">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>SKU</label>
                                        <input type="text" class="form-control" placeholder="SKU" value="SKU">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="form-control" placeholder="Color" value="Color">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea  class="form-control" placeholder="Product Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Cost price(£)</label>
                                        <input type="text" class="form-control" placeholder="Cost price(£)" value="Cost price(£)">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Whole sale price(£)</label>
                                        <input type="text" class="form-control" placeholder="Whole sale price(£)" value="Whole sale price(£)">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>RRP(£)</label>
                                        <input type="text" class="form-control" placeholder="RRP(£)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Stock Qty</label>
                                        <input type="text" class="form-control" placeholder="Stock Qty" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Min Qty Alert</label>
                                        <input type="text" class="form-control" placeholder="Min Qty Alert" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">

                                    <label>product Image</label>
                                    <br>
                                    <input type="file" name="image2Pic"  accept=".jpg, .jpeg" id="image2Pic">

                                </div>
                            </div>
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <label>Product Stored Location</label>
                                    <textarea  class="form-control" placeholder="Product Stored Location" ></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
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
