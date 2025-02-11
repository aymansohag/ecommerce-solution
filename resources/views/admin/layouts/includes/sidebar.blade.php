@php
    $route = Route::current()->getName();
    $prefix = Request::route()->getPrefix();
@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('dashboard') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/') }}/images//logo-dark.png" alt="">
                        <h3><b>E</b> Solution</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('/admin/dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('brand*') ? 'active' : '' }}">
                <a href="{{ route('brand') }}">
                    <i data-feather="bold"></i>
                    <span>Brand</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('category*') ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="list"></i> 
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'category' ? 'active' : '' }}"><a href="{{ route('category') }}"><i class="ti-more"></i>Manage Category</a></li>
                    <li class="{{ $route == 'sub.category' ? 'active' : '' }}"><a href="{{ route('sub.category') }}"><i class="ti-more"></i>Manage Sub Category</a></li>
                    <li class="{{ $route == 'sub.sub.category' ? 'active' : '' }}"><a href="{{ route('sub.sub.category') }}"><i class="ti-more"></i>Manage Sub Sub Category</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('product*') ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="list"></i> 
                    <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'product.add' ? 'active' : '' }}"><a href="{{ route('product.create') }}"><i class="ti-more"></i>Add Product</a></li>
                    <li class="{{ $route == 'product' ? 'active' : '' }}"><a href="{{ route('product') }}"><i class="ti-more"></i>Manage Product</a></li>
                </ul>
            </li>

            <li class="{{ Request::is('slider*') ? 'active' : '' }}">
                <a href="{{ route('slider') }}">
                    <i data-feather="bold"></i>
                    <span>Slider</span>
                </a>
            </li>

            <li class="{{ Request::is('coupon*') ? 'active' : '' }}">
                <a href="{{ route('coupon') }}">
                    <i data-feather="bold"></i>
                    <span>Coupons</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('shipping*') ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="list"></i> 
                    <span>Shipping Area</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'division' ? 'active' : '' }}"><a href="{{ route('division') }}"><i class="ti-more"></i>Manage Division</a></li>
                    <li class="{{ Request::is('shipping/manage-district*') ? 'active' : '' }}"><a href="{{ route('disctirct') }}"><i class="ti-more"></i>Manage District</a></li>
                    <li class="{{ Request::is('shipping/manage-state*') ? 'active' : '' }}"><a href="{{ route('state') }}"><i class="ti-more"></i>Manage State</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="mail"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                    <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                    <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Pages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
                    <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
                    <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
                    <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
                    <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">User Interface</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Components</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
                    <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
                    <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
                    <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
                    <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
                    <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
                    <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
                    <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span>Cards</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
                    <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
                    <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
                </ul>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="ti-email"></i></a>
        <!-- item-->
        <a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title=""
            data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>