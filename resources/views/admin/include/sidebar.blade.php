




            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Dashboard</li>

                            <li>
                                <a href="{{route('admin.dashboard')}}">
                                    <i data-feather="airplay"></i>
                                    <span> Dashboards </span>
                                </a>
                            </li>

                            <li>
                                <a href="#categories" data-toggle="collapse">
                                    <i data-feather="list"></i>

                                    <span> categories </span>
                                </a>
                                <div class="collapse" id="categories">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('add.category')}}">Add</a>
                                        </li>
                                        <li>
                                            <a href="{{route('manage.categories')}}">Manage</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>


                            <li>
                                <a href="#Blog" data-toggle="collapse">
                                    <i data-feather="activity"></i>

                                    <span> Blog </span>
                                </a>
                                <div class="collapse" id="Blog">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('Addblog')}}">Add</a>
                                        </li>
                                        <li>
                                            <a href="{{route('ManageBlogs')}}">Manage</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
