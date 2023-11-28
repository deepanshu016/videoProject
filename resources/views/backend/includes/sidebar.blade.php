
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('public/backend/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('public/backend/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('public/backend/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('public/backend/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="mdi mdi-form-select"></i> <span data-key="t-forms">Videos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('video.upload')  }}" class="nav-link" data-key="t-basic-elements">Upload Videos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('video.list') }}" class="nav-link" data-key="t-form-select">Videos List</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCms">
                        <i class="mdi mdi-form-select"></i> <span data-key="t-forms">CMS</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.contact.us')  }}" class="nav-link" data-key="t-basic-elements">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.about.us') }}" class="nav-link" data-key="t-form-select">About us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.privacy.policy') }}" class="nav-link" data-key="t-form-select">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.terms.condition') }}" class="nav-link" data-key="t-form-select">Terms and Condition</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
