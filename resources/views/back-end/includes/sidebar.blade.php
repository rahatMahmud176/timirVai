<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('/dashbord') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ladiz <sup>Gallary</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('/dashbord') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Add</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Item Add Here :</h6>
                <a class="collapse-item" href="{{ route('add-category-page') }}">Category</a>
                <a class="collapse-item" href="{{ route('add-brand-page') }}">Brand</a>
                <a class="collapse-item" href="{{ route('add-color-page') }}">color</a>
                <a class="collapse-item" href="{{ route('add-size-page') }}">Size</a>
                <a class="collapse-item" href="{{ route('add-product-page') }}">Product</a> 
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Manage</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Item Manage Here :</h6>
                <a class="collapse-item" href="{{ route('manage-category-page') }}">Category</a>
                <a class="collapse-item" href="{{ route('manage-brand-page') }}">Brand</a>
                <a class="collapse-item" href="{{ route('manage-color-page') }}">color</a>
                <a class="collapse-item" href="{{ route('manage-size-page') }}">Size</a>
                <a class="collapse-item" href="{{ route('manage-product-page') }}">Product</a>  
                <a class="collapse-item" href="{{ route('add-distric-page') }}">District</a> 
                <a class="collapse-item" href="{{ route('addAndManageAreaPage') }}">Area</a> 
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sliders
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sliders</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sliders control:</h6>
                <a class="collapse-item" href="{{ route('addSlidersPage') }}">Add Slider</a>
                <a class="collapse-item" href="{{ route('manageSlider') }}">Manage Slider</a> 
            </div>
        </div>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
        Menu's
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemenu"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu's</span>
        </a>
        <div id="collapsemenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sliders control:</h6>
                <a class="collapse-item" href="{{ route('addMenuPage') }}">Manage Menu</a> 
                <a class="collapse-item" href="{{ route('addDropdownPage') }}">Dropdown's</a> 
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ordersShow') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Orders</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('reSellerManage') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Re-Seller</span></a>
    </li>
<li class="nav-item">
        <a class="nav-link" href="{{ route('userManage') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('/') }}back-end/img/undraw_rocket.svg" alt="">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>