
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
                        <h5 class="title">Edit Size</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Product Category</label>
                                <div class="col-md-8 custom-input-style">
                                    <select class="form-control" >
                                        <option value="">Select Product Category</option>
                                        <option value="">Men->Pant</option>
                                        <option value="">Women->Gown</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Size Name:</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="text" class="form-control" placeholder="Size name" >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Description:</label>
                                <div class="col-md-8 custom-input-style" >
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" ></textarea>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Status</label>
                                <div class="col-md-8 custom-input-style">
                                    <select class="form-control">
                                        <option selected >Select Status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-8 custom-input-style" >
                                    <button class="btn btn-info">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ("footer.php"); ?>
