<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> --}}
            <div class="info">
                <a href="#" class="d-block">E-SSDL Main Menu</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <p>
                            News And Announcement
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <p>
                            Lookup Table
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Company and Staff
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                            <a href="{{ url('/search_company') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search Company</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/search_staff') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/area') }} " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search Area Monitor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/status') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search Company By Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search All by User ID</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('/register_new') }}" class="nav-link">
                        <p>
                            Register New Company
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        OSL Handling
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/search_company') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search OSL</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/search_staff') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register OSL To Be Sent</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/area') }} " class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register OSL Receieved</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/status') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Print Report OSL Receieved</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upload Background(BG) OSL</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        OSL Reading
                        <i class="right fas fa-angle-left"></i>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <p>
                            Generate PIN Code
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <p>
                            Change Password
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
