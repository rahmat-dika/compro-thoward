<!-- ========== Menu ========== -->
<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{ url('product') }}" class="logo-light">
            <img src="{{ asset('assets/images/Sternics-logo.png') }}" alt="logo" class="logo-lg"  style="height: 60px">
            <img src="{{ asset('assets/images/Sternics-sm.png') }}" alt="small logo" class="logo-sm" style="height: 40px" >
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{ url('product') }}" class="logo-dark">
            <img src="{{ asset('assets/images/Sternics-logo-black.png') }}" alt="dark logo" class="logo-lg" style="height: 60px">
            <img src="{{ asset('assets/images/Sternics-sm-black.png') }}" alt="small logo" class="logo-sm" style="height: 40px">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="text-center user-box">
            <img src="{{ asset('assets/images/users/profile-user.jpg"') }} alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="mb-1 dropdown-toggle h5 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="mb-0 text-muted">Admin Head</p>
        </div>

        <!--- Menu Sidebar -->
        <ul class="menu">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ url('prod') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="briefcase"></i></span>
                    <span class="menu-text"> Products </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('certificate') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="folder-plus"></i></span>
                    <span class="menu-text"> Generate Certificate </span>
                </a>
            </li>
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left menu End ========== -->
