<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="index" class="logo">
            <span>
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="logo-large"
                    class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="widgets"><i data-feather="grid"
                    class="align-self-center menu-icon"></i><span>Dashboard</span></a>
            </li>

            {{-- <li>
                <a href="javascript: void(0);"><i data-feather="lock"
                        class="align-self-center menu-icon"></i><span>Authentication</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="auth-login"><i class="ti-control-record"></i>Log
                            in</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-register"><i
                                class="ti-control-record"></i>Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-recover-pw"><i
                                class="ti-control-record"></i>Recover Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-lock-screen"><i
                                class="ti-control-record"></i>Lock Screen</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-404"><i class="ti-control-record"></i>Error
                            404</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-500"><i class="ti-control-record"></i>Error
                            500</a></li>
                </ul>
            </li> --}}

            {{-- <li>
                <a href="widgets"><i data-feather="layers"
                        class="align-self-center menu-icon"></i><span>Widgets</span><span
                        class="badge badge-soft-success menu-arrow">New</span></a>
            </li> --}}
        </ul>
    </div>
</div>
