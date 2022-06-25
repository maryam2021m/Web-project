<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-dark"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <span class="badge me-1 bg-primary px-3 py-2 flex"> <i class='bx bxs-user-pin mr-2'></i> Staff</span>
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="/assets/img/avatars/profile.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-dark">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="/assets/img/avatars/profile.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">Staff</span>
                                    <small class="text-muted">staff</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <form class="cursor-pointer" method="POST" action="{{ route('logout') }}">
                            <a class="dropdown-item" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                @csrf
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">
                                    {{ __('Log Out') }}
                                </span>
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
