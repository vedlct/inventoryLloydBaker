<!-- MENU Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="{{route('mainsreen')}}"><i class="ti-home"></i>MAIN SCREEN</a>
                </li>

                <li class="has-submenu">
                    <a href="{{route('goods-in.goodsin')}}"><i class="ti-light-bulb"></i>GOODS IN</a>
                    {{--<ul class="submenu">--}}
                        {{--<li><a href="{{route('goods-in.add')}}">Add Individual Product</a></li>--}}
                        {{--<li><a href="{{route('goods-in.bulk')}}"> Insert Bulk Products </a></li>--}}
                        {{--<li><a href="{{route('goods-in.show')}}">Edit/Delete Product </a></li>--}}
                    {{--</ul>--}}
                </li>

                <li class="has-submenu">
                    <a href="{{route('stocktransfer.show')}}"><i class="ti-light-bulb"></i>STOCK TRANSFER</a>
                    {{--<ul class="submenu">--}}
                        {{--<li> <a href="{{route('stocktransfer.show')}}">Stock Transfer</a></li>--}}
                        {{--<li><a href="">Stock Transfer in Bulk</a></li>--}}
                    {{--</ul>--}}

                </li>


                <li class="has-submenu">
                    <a href="{{route('stock.out')}}"><i class="ti-bookmark-alt"></i>STOCK OUT</a>
                    {{--<ul class="submenu">--}}
                        {{--<li><a href="{{route('goods-in.bulk')}}">Import Sales</a></li>--}}
                        {{--<li><a href="{{route('stock.out')}}">Show Sales</a></li>--}}
                    {{--</ul>--}}
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-bookmark-alt"></i>Reporting</a>
                    <ul class="submenu">
                        <li class="has-submenu"><a href="#">Profit</a>
                            <ul class="submenu">
                                <li><a href="{{route('profit.profitCalculation')}}">Profit Calculation</a></li>
                                <li><a href="{{route('profit.mostProfitableProduct')}}">Most Profitable Product</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('report.sellData')}}">Stock Valuation</a></li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-bookmark-alt"></i>Settings</a>
                    <ul class="submenu">
                        <li><a href="{{route('settings.productCategory')}}">Product Category</a></li>
                        <li><a href="{{route('settings.location')}}">Shop</a></li>
                        {{--<li><a href="{{route('settings.color')}}">Color</a></li>--}}
                        {{--<li><a href="{{route('settings.size')}}">Size</a></li>--}}
                        {{--<li><a href="{{route('settings.brand')}}">Brand</a></li>--}}
                        {{--<li><a href="{{route('settings.style')}}">Style</a></li>--}}
                        <li><a href="{{route('settings.user')}}">User</a></li>

                    </ul>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->