<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
            src="{{asset('dist/assets/img/AdminLTELogo.png')}}"
            alt="AdminLTE Logo"
            class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">{{ env('APP_NAME') }}</span>
        <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false"
        >
            <li class="nav-item">
                <a href="{{route('adminDashboard')}}" class="nav-link {{ $elementName == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('changePassword')}}" class="nav-link {{ $elementName == 'changePassword' ? 'active' : '' }}">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>Change Password</p>
                </a>
            </li>
            
            
            <li class="nav-item">
                <a href="{{route('staffTable')}}" class="nav-link {{ $elementName == 'staff' ? 'active' : '' }}">
                <i class="nav-icon bi bi-palette"></i>
                <p>Staff</p></a>
            </li>
            <li class="nav-item">
                <a href="{{route('companyTable')}}" class="nav-link {{ $elementName == 'company' ? 'active' : '' }}">
                <i class="nav-icon bi bi-palette"></i>
                <p>Companies</p></a>
            </li>
            <li class="nav-item">
                <a href="{{route('companysiteTable')}}" class="nav-link {{ $elementName == 'companysite' ? 'active' : '' }}">
                <i class="nav-icon bi bi-palette"></i>
                <p>Company Site</p></a>
            </li>
            <li class="nav-item">
                <a href="{{route('securityTable')}}" class="nav-link {{ $elementName == 'security' ? 'active' : '' }}">
                <i class="nav-icon bi bi-palette"></i>
                <p>Security</p></a>
            </li>
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>Log out</p>
                </a>
            </li>
          
        </ul>
        <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>