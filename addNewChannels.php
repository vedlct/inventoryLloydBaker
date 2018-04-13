
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
                        <h5 class="title">Add Channels</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Name:</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="text" class="form-control" placeholder="name" >
                                </div>
                            </div>


                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Description</label>
                                <div class="col-md-8 custom-input-style" >
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Chanel Address</label>
                                <div class="col-md-8 custom-input-style" >
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Address" ></textarea>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Phone:</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="text" class="form-control" placeholder="Phone Number" >
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Status</label>
                                <div class="col-md-8 custom-input-style">
                                    <select class="form-control">
                                        <option selected >Select Status</option>
                                        <option>Active</option>
                                        <option>InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-8 custom-input-style" >
                                    <button class="btn btn-info">Create</button>
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
            $("#channelManagementDrop").click();
        });
    </script>

