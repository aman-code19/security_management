<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
                </a>
            </li>
            
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
       
        <!--begin::Fullscreen Toggle-->
        <li class="nav-item">
            <a class="nav-link" href="#" data-lte-toggle="fullscreen">
            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
            </a>
        </li>
        <!--end::Fullscreen Toggle-->
        <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link">
                <img
                    src="{{asset('dist/assets/img/user2-160x160.jpg')}}"
                    class="user-image rounded-circle shadow"
                    alt="User Image"
                />
                <span class="d-none d-md-inline">{{auth()->user()->name}}</span>
            </a>
            
        </li>
        <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>