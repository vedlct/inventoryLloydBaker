
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
                        <h5 class="title">Add Stock</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Brand Name</label>
                                <div class="col-md-8 custom-input-style">
                                    <select  class="form-control" >
                                        <option value="">Select Brand Name</option>
                                        <option value="">PAUL COSTELLOE</option>
                                        <option value="">LLOYD BAKER</option>
                                        <option value="">AMANDA WAKELEY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Style No.</label>
                                <div class="col-md-8 custom-input-style">
                                    <select  class="form-control" >
                                        <option value="">Select STYLE No.</option>
                                        <option value="">PC001</option>
                                        <option value="">LB002</option>
                                        <option value="">AW003</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Sale Location</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Sale Location" >
                            </div>




                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style" for="exampleInputEmail1">In Stock</label>
                                <!--                                <input type="text"  class="col-md-8 custom-input-style form-control" placeholder="Brand Name">-->
                                <div class="radiobox col-md-8 custom-input-style">
                                    <label><input type="radio" name="radio" value=""> Yes</label>
                                    <label><input type="radio" name="radio" value=""> No</label>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Stock Qty</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Stock Qty" value="">
                            </div>



                            <div class="form-group">

                                <label class="control-label col-md-2 custom-label-style">Stock Stored Location</label>

                                <!--                                <input type="text" class="col-md-8 custom-input-style form-control" placeholder="Location" value="">-->

                                <select class="form-control col-md-8 custom-input-style" >
                                    <option value="">Select Stock Location</option>
                                    <option value="">Pallet-1</option>
                                    <option value="">Pallet-2</option>
                                    <option value="">Pallet-3</option>
                                    <option value="">Pallet-4</option>
                                </select>


                            </div>






                            <div class="form-group">

                                <label class="control-label col-md-2 custom-label-style">Image</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="file" name="image2Pic" class="form-control" accept=".jpg, .jpeg" id="image2Pic">
                                </div>
                            </div>






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
    <script>

        $(document).ready(function() {

            $("#stockManagement").click();
        } );

    </script>
