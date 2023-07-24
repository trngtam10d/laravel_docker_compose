<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin/img/signature.png') }}" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/admin/img/signature.png') }}" alt="" height="50">
                    </span>
                </a>
                <a href="/admin" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin/img/signature.png') }}" alt=""
                            height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/admin/img/signature.png') }}" alt=""
                            height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm btn-lg px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            {{-- <div class="d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-target="#search-wrap">
                    <i class="mdi mdi-airplane me-2 font-size-16"></i>Đồng bộ
                </button>
            </div> --}}
        </div>

        <!-- Search input -->
        <div class="d-flex">
            <!-- Notification -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect notification-step"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge bg-danger rounded-pill">2</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <h6 class="m-0">Notifications(258) </h6>
                    </div>

                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1 font-size-15">Tin nhắn mới</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-12">You have 87 unread messages</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex align-items-start">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-help"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1 font-size-15">Đơn hàng của bạn đã được đặt</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-12">It is a long established fact that a reader will
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> View all
                        </a>
                    </div>
                </div>
            </div>

            <!-- full-screen -->
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect user-step" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/admin/img/users/user-1.jpg') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Yotrip</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="dripicons-user d-inline-block text-muted me-2"></i>Profile</a>
                    <a class="dropdown-item d-block" href="{{ url('/settings') }}"><i class="dripicons-gear d-inline-block text-muted me-2"></i>Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="dripicons-exit d-inline-block text-muted me-2"></i>Logout</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-spin mdi-cog"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Primary</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-bus-multiple"></i>
                        <span class="badge rounded-pill bg-danger float-end">9+</span>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Products</a></li>
                    </ul>
                </li>
                <!-- Calender -->
                <li class="menu-title">The components</li>

                <!-- Table -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Board</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manufactures</a></li>
                        <li><a href="#">Categories</a></li>
                    </ul>
                </li>
                <!-- Banner -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-atom-variant"></i>
                        <span>Screen</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Banners</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Areas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Locations</a></li>
                    </ul>
                </li>
                <!-- Users -->

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-account-supervisor-circle"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">User</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map"></i>
                        <span>Coupons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Coupon code</a></li>
                        <li><a href="#">Add coupon code</a></li>
                    </ul>
                </li>


                <li class="menu-title">Than</li>
                <!-- Pages -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Client</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Favourites</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-briefcase"></i>
                        <span>Bookings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Bookings</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span class="badge bg-success float-end">Hot</span>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Bills</a></li>
                        <li><a href="#">Comments</a></li>
                        <li><a href="#">Histories</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
