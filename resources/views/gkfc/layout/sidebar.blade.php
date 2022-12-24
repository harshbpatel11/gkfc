<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GKFC</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}"
                        class="nav-link {{ request()->segment(1) == 'category' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}"
                        class="nav-link {{ request()->segment(1) == 'product' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallary.index') }}"
                        class="nav-link {{ request()->segment(1) == 'gallary' ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>Gallary</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inquiry.index') }}"
                        class="nav-link {{ request()->segment(1) == 'inquiry' ? 'active' : '' }}">                        
                        <i class="nav-icon fas fa-user"></i>
                        <p>Inquiry</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                            class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Logout</p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
