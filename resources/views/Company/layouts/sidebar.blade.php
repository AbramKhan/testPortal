<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">company panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href=""></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Route::is('admin_dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_dashboard') }}"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>



            <li class="{{ Route::is('admin_profile') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_profile') }}"><i class="fas fa-hand-point-right"></i> <span>profile</span></a>
            </li>

            <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                    <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                    <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Jobs</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('job-posts.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('job-posts.create') }}"><i class="fas fa-hand-point-right"></i>
                            <span>job create</span></a></li>
                     <li class="{{ Route::is('job-posts.create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('job-posts.index') }}"><i class="fas fa-hand-point-right"></i>
                            <span>jobs list</span></a></li>
                    {{-- <li class="{{ Route::is('admin_profile') ? 'active' : '' }}"><a class="nav-link" href="{{ route('category.create') }}"><i class="fas fa-hand-point-right"></i> <span>create</span></a></li> --}}
                </ul>
            </li>

        </ul>
    </aside>
</div>
