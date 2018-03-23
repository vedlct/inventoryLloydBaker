	
		<?php include ("header.php"); ?>
    
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">User Profile</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Forms</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                	<div class="form-group ">
                                    	<label class="control-label col-md-2 custom-label-style">First Name:</label>
                                        	<div class="col-md-8 custom-input-style">
                                            	<input type="text" class="form-control" placeholder="Home Address" value="Shamser">
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label col-md-2 custom-label-style">Last Name:</label>
                                        	<div class="col-md-8 custom-input-style">
                                            	<input type="text" class="form-control" placeholder="Home Address" value="Suzon">
                                            </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                    	<label class="control-label col-md-2 custom-label-style">Email:</label>
                                        	<div class="col-md-8 custom-input-style" >
                                            	<input type="email" class="form-control" placeholder="Home Address" value="shamser.suzon@gmail.com">
                                            </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                    	<label class="control-label col-md-2 custom-label-style">Checkbox:</label>
                                        	<div class="checkbox col-md-8 custom-input-style">
                                              <label><input type="checkbox" value=""> Option 1</label>
                                              <label><input type="checkbox" value=""> Option 2</label>
                                              <label><input type="checkbox" value=""> Option 3</label>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                    	<label class="control-label col-md-2 custom-label-style">Nationality:</label>
                                        	<div class="col-md-8 custom-input-style">
                                            	<select class="form-control">
                                                	<option selected disabled>Select Option</option>
                                                	<option>Bangladeshi</option>
                                                    <option>Rajakar</option>
                                                    <option>Rohingya</option>
                                                </select>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                    	<label class="control-label col-md-2 custom-label-style">Textarea:</label>
                                        	<div class="col-md-8 custom-input-style" >
                                            	<textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
      <?php include ("footer.php"); ?>
