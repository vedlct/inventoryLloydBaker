<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>LLoyd Baker | Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
<!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        .table thead tr th{
            font-size: 14px;
        }
    </style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="stockinfo.php" class="simple-text logo-normal">
                    LLoyd Baker
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="">
<!--                        <a href="stockinfo.php">-->
<!--                            <i class="now-ui-icons design_app"></i>-->
<!--                            <p>Stock info</p>-->
<!--                        </a>-->
                        <a data-toggle="collapse" href="#stocInfo">
                            <i class="now-ui-icons design_app"></i>
                            <p>Stock info<b class="caret"></b></p>
                        </a>

                        <div class="collapse " id="stocInfo">
                            <ul class="nav">

                                <li>
                                    <a href="recentlyAddedProducts.php">

                                        <span class="sidebar-normal"> Recently Added Products </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="minimumStocksAlert.php">

                                        <span class="sidebar-normal"> Minimum Stocks Alert</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="stockByChannels.php">

                                        <span class="sidebar-normal"> Stock by Channels </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="allProducts.php">

                                        <span class="sidebar-normal"> All Products </span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </li>

                    <li>
                        <a data-toggle="collapse" href="#productManagement">
                            <i class="now-ui-icons design_app"></i>
                            <p>Products Management<b class="caret"></b></p>
                        </a>

                        <div class="collapse " id="productManagement">
                            <ul class="nav">

                                <li>
                                    <a href="addproduct.php">

                                        <span class="sidebar-normal"> Enter Products </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="stocksBulkUpdate.php">

                                        <span class="sidebar-normal"> Update Stocks in bulk</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </li>
<!--                    <li>-->
<!--                        <a href="product.php">-->
<!--                            <i class="now-ui-icons design_app"></i>-->
<!--                            <p>Product list</p>-->
<!--                        </a>-->
<!--                    </li>-->

<!--                    <li>-->
<!--                        <a href="user.php">-->
<!--                            <i class="now-ui-icons design_app"></i>-->
<!--                            <p>User list</p>-->
<!--                        </a>-->
<!--                    </li>-->
                    <li>
                        <a data-toggle="collapse" href="#userManagement">
                            <i class="now-ui-icons design_app"></i>
                            <p>User Management<b class="caret"></b></p>
                        </a>

                        <div class="collapse " id="userManagement">
                            <ul class="nav">

                                <li>
                                    <a href="user.php">

                                        <span class="sidebar-normal"> User List </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="addUser.php">

                                        <span class="sidebar-normal"> Add New user</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="userRoles.php">

                                        <span class="sidebar-normal"> User roles</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </li>
                    <li>
                        <a data-toggle="collapse" href="#channelManagement">
                            <i class="now-ui-icons design_app"></i>
                            <p>Channel Management<b class="caret"></b></p>
                        </a>

                        <div class="collapse " id="channelManagement">
                            <ul class="nav">

                                <li>
                                    <a href="channelList.php">

                                        <span class="sidebar-normal"> Channel List </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="addNewChannels.php">

                                        <span class="sidebar-normal"> Add new Channels</span>
                                    </a>
                                </li>


                            </ul>
                        </div>

                    </li>
                    <li>
                        <a data-toggle="collapse" href="#supplierManagement">
                            <i class="now-ui-icons design_app"></i>
                            <p>Supplier/Manufacturer<b class="caret"></b></p>
                        </a>

                        <div class="collapse " id="supplierManagement">
                            <ul class="nav">

                                <li>
                                    <a href="supplierList.php">

                                        <span class="sidebar-normal"> Supplier List </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="addNewSupplier.php">

                                        <span class="sidebar-normal"> Add new Supplier</span>
                                    </a>
                                </li>


                            </ul>
                        </div>

                    </li>
                    <li>
                        <a data-toggle="collapse" href="#Settings">
                            <i class="now-ui-icons design_app"></i>
                            <p>Settings<b class="caret"></b></p>
                        </a>

                        <div class="collapse " id="Settings">
                            <ul class="nav">

                                <li>
                                    <a href="productCategory.php">

                                        <span class="sidebar-normal"> Product Category </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="location.php">

                                        <span class="sidebar-normal"> Location</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="colour.php">

                                        <span class="sidebar-normal"> Colour</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="size.php">

                                        <span class="sidebar-normal"> Size</span>
                                    </a>
                                </li>


                            </ul>
                        </div>

                    </li>




                   
<!--                    <li>-->
<!--                        <a href="forms.php">-->
<!--                            <i class="now-ui-icons location_map-big"></i>-->
<!--                            <p>Forms</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="tables.php">-->
<!--                            <i class="now-ui-icons design_bullet-list-67"></i>-->
<!--                            <p>Table</p>-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                var url = window.location;
                $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
                $('ul.nav a').filter(function() {
                    return this.href == url;
                }).parent().addClass('active');
            });
        </script>