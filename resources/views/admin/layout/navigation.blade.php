<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="header_bar">
                <div class="logo_box">
                    <div class="logo">
                        <img src="admin/assets/images/logo.png">
                    </div>
                </div>
                <div class="right_section">
                    <div class="admin_info">
                        <div class="admin_name">Welcome <span> {{ Session::get('username') }}</span></div>
                        <div class="last_login">
                            last login on <span>{{ date('d-M-Y H:i', strtotime(Session::get('last_login'))) }}</span>
                        </div>
                    </div>
                    <!-- <div class="purple_hollow_btn">
                        <a>My Roles</a>
                    </div> -->
                    <!-- <div class="blue_hollow_btn">
                        <a>Sign Out</a>
                    </div> -->

                    <ul class="nav navbar-top-links navbar-right">
                        
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <!-- <li><a><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                                <li class="divider"></li> -->
                                <li><a href="{{ url('wm/change-password') }}"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a></li>
                                <li><a href="{{ url('wm/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><img src="admin/assets/images/logo_admin.png"></a>
                    </div>
                    <!-- /.navbar-header -->
                    
                </div>
            </div>

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="menu_header">
                            <!-- <div class="user_profile">
                                <span class="user_icon"><img src="admin/assets/images/user.png" width="40"></span>
                                <span class="user_name">Welcome Admin</span>
                            </div> -->
                            <div>Menu</div>
                        </li>
                        <li><a href="{{ url('wm/dashboard'); }}" class="active"><i class="fa fa-line-chart" aria-hidden="true"></i> Dashboard</a></li>

                        <li>
                            <a><i class="fa fa-list-ul" aria-hidden="true"></i> Blogs Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('wm/blogs-categories'); }}">All Categories</a></li>
                                <li><a href="{{ url('wm/blogs-categories/create'); }}">Add New</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a><i class="fa fa-medkit" aria-hidden="true"></i> Blog Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('wm/blog-posts'); }}">All Posts</a></li>
                                <li><a href="{{ url('wm/blog-posts/create'); }}">Add New</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                    
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>