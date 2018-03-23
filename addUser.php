
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
                        <h5 class="title">Add User</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">First Name:</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="text" class="form-control" placeholder="first name" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 custom-label-style">Last Name:</label>
                                <div class="col-md-8 custom-input-style">
                                    <input type="text" class="form-control" placeholder="last name">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Email:</label>
                                <div class="col-md-8 custom-input-style" >
                                    <input type="email" class="form-control" placeholder="email" >
                                </div>
                            </div>


                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Role</label>
                                <div class="col-md-8 custom-input-style">
                                    <select class="form-control">
                                        <option selected disabled>Select Option</option>
                                        <option>Admin</option>
                                        <option>SuperAdmin</option>
                                        <option>Editor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2 custom-label-style">Address:</label>
                                <div class="col-md-8 custom-input-style" >
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike"></textarea>
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
