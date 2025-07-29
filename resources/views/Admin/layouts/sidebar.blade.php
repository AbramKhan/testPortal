<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_dashboard') }}">admin panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Route::is('admin_dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_dashboard') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>



            <li class="{{ Route::is('admin_profile') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_profile') }}"><i class="fas fa-hand-point-right"></i> <span>profile</span></a>
            </li>


            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin_profile') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('category.index') }}"><i class="fas fa-hand-point-right"></i> <span>category
                                list</span></a></li>
                    <li class="{{ Route::is('admin_profile') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('category.create') }}"><i class="fas fa-hand-point-right"></i>
                            <span>create</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Location</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('locations.index') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('locations.index') }}"><i class="fas fa-hand-point-right"></i>
                            <span>locations list</span></a></li>
                     <li class="{{ Route::is('locations.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('locations.create') }}"><i class="fas fa-hand-point-right"></i>
                            <span>location create</span></a></li>
                    {{-- <li class="{{ Route::is('admin_profile') ? 'active' : '' }}"><a class="nav-link" href="{{ route('category.create') }}"><i class="fas fa-hand-point-right"></i> <span>create</span></a></li> --}}
                </ul>
            </li>
            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>
