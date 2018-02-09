<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Subway</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('home')}}"><i class="fa  fa-home"></i> Home</a></li>
                    <li><a><i class="fa fa-user"></i> Users Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin_users_list')}}">Users Record</a></li>
                            <li><a href="{{route('admin_create')}}">Create User </a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-cogs"></i> Profile Management </a></li>
                    <li><a><i class="fa fa-shopping-cart"></i>Order Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('order_list')}}">Order Record</a></li>
                            <li><a href="{{route('order_create')}}">Create Order </a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-truck"></i>Delivery  Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="general_elements.html">Delivery Record</a></li>
                            <li><a href="media_gallery.html">Delivery Assign</a></li>
                            <li><a href="typography.html">Delivery  Status</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-heart"></i> Customer Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="tables.html">Customer Record</a></li>
                            <li><a href="tables.html">Create Customer</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-database"></i> Masters Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('menu_create')}}">Item Menus</a></li>
                            <li><a href="form_advanced.html">Create Order </a></li>

                        </ul>
                    </li>

                    <li><a href="javascript:void(0)"><i class="fa fa-bell"></i> Notifications Management </a></li>

                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
