<!-- MENU Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="{{route('main')}}"><i class="ti-home"></i>MAIN SCREEN</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-light-bulb"></i>GOODS IN</a>
                    <ul class="submenu">
                        <li><a href="ui-buttons.html">Information</a></li>
                        <li><a href="ui-cards.html">Pending Job</a></li>



                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="ti-light-bulb"></i>STOCK TRANSFER</a>
                    <ul class="submenu">
                        <li><a href="ui-buttons.html">Information</a></li>
                        <li><a href="ui-cards.html">Pending Job</a></li>



                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-bookmark-alt"></i>STOCK OUT</a>
                    <ul class="submenu">
                        <li><a href="{{route('stock.out')}}">SALES</a></li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-bookmark-alt"></i>Reporting</a>
                    <ul class="submenu">
                        <li class="has-submenu"><a href="#">Profit</a>
                            <ul class="submenu">
                                <li><a href="{{route('profit.profitCalculation')}}">Profit Calculation</a></li>
                                <li><a href="advanced-animation.html">Most Profitable Product</a></li>
                            </ul>
                        </li>
                        <li><a href="advanced-highlight.html">Sell data</a></li>
                        <li><a href="advanced-highlight.html">Product per Shop</a></li>

                    </ul>
                </li>















            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->