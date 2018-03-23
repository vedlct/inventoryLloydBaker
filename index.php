
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
                        <h4 class="card-title"> Stock Info</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>SKU</th>
                                    <th>Color</th>
                                    <th>Location</th>
                                    <th>RRP</th>
                                    <th>Stock Quantity</th>
                                    <th>Min Qty Alert</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr style="color: red;">
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-123-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>pallet-1</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td><span>2</span></td>
                                </tr>
                                <tr>
                                    <td>Bordeaux low-back satin gown</td>
                                    <td>WW Accessories Mirakl / Bags / Shoulder Bags</td>
                                    <td>ABCD-124-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>pallet-2</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                </tr>
                                <tr style="color: red;">
                                    <td>Bordeaux low-back satin gown</td>
                                    <td>WW Accessories Mirakl / Bags / Shoulder Bags</td>
                                    <td>ABCD-125-BLS</td>
                                    <td>Black</td>
                                    <td>pallet-3</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td><span>5</span></td>
                                </tr>
                                <tr>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-126-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>pallet-4</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-127-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>pallet-5</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                </tr>
                                <tr style="color: red;">
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-223-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>pallet-6</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td><span>4</span></td>
                                </tr>
                                <tr>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-423-BLS</td>
                                    <td>Blue</td>
                                    <td>pallet-7</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-123-BLS</td>
                                    <td>Brown</td>
                                    <td>pallet-8</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Cobalt low-back satin gown</td>
                                    <td>Womenswear>Gowns</td>
                                    <td>ABCD-332-BLS</td>
                                    <td>Yellow Croc</td>
                                    <td>pallet-9</td>
                                    <td>90</td>
                                    <td>123</td>
                                    <td>10</td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include ("footer.php"); ?>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>


