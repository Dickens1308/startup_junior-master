<div id="header" class="page-header ">


    <!-- Navbar collapse -->
    <div class="page-content page-container" id="page-content">
        <div class="card">
            <div class="navbar navbar-expand-lg col-lg-12">

                <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
                    <ul class="navbar-nav mt-lg-0 mx-0 mx-lg-2 ">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Create New
                            </a>
                            <div class="dropdown-menu mt-3" role="menu">
                                <a class="dropdown-item">
                                    Startup Junior Event
                                </a>
                                <a class="dropdown-item">
                                    Register Mentor
                                </a>
                                <a class="dropdown-item">
                                    Startup Junior Launch
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item">
                                    Separated link
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-menu order-1 order-lg-2">


                    <!-- User dropdown menu -->
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center px-2 text-color">
                            <span class=" mx-2 d-none l-h-1x d-lg-block text-right">
                                Admin</span>
                            <span class="avatar w-40" style="margin: -2px;"><img
                                    src="{{ asset('admin_style/assets/img/a3.jpg') }}" alt="..."></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn">
                            <a class="dropdown-item" href="page.profile.html">
                                <span>Startup junior</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span>Profile</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <span>Account Settings</span>
                            </a>
                            <a class="dropdown-item" href="{{ route('login') }}"><i data-feather=" log-out"></i>Sign
                                out</a>

                        </div>
                    </li>
                    <!-- Navarbar toggle btn -->

                    <li class="nav-item d-lg-none"
                        style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                        <a class="nav-link px-1 p-4 text-primary" data-toggle="modal" data-target="#aside">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>
