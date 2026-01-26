<h5 class="text-primary mb-4">
    <i class="fa fa-user-cog me-2"></i> ADMIN
</h5>

<ul class="nav flex-column">

    <li class="nav-item">
        <a href="/admin" class="nav-link nav-link-admin {{ Request::is('admin') ? 'active' : '' }}">
            <i class="fa fa-tachometer-alt me-2"></i> Dashboard
        </a>
    </li>

    <li class="nav-item">
        <a href="/admin/categories" class="nav-link nav-link-admin {{ Request::is('admin/categories*') ? 'active' : '' }}">
            <i class="fa fa-list me-2"></i> Danh mục tour
        </a>
    </li>

    <li class="nav-item">
        <a href="/admin/tours" class="nav-link nav-link-admin {{ Request::is('admin/tours*') ? 'active' : '' }}">
            <i class="fa fa-map-marker-alt me-2"></i> Quản lý tour
        </a>
    </li>

    <li class="nav-item">
        <a href="/admin/guides" class="nav-link nav-link-admin {{ Request::is('admin/guides*') ? 'active' : '' }}">
            <i class="fa fa-user-tie me-2"></i> Hướng dẫn viên
        </a>
    </li>

    <li class="nav-item">
        <a href="/admin/bookings" class="nav-link nav-link-admin {{ Request::is('admin/bookings*') ? 'active' : '' }}">
            <i class="fa fa-clipboard-list me-2"></i> Đơn đặt tour
        </a>
    </li>

    <li class="nav-item">
        <a href="/admin/users" class="nav-link nav-link-admin {{ Request::is('admin/users*') ? 'active' : '' }}">
            <i class="fa fa-users me-2"></i> Người dùng
        </a>
    </li>

    <li class="nav-item mt-3">
        <hr>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit"
                class="nav-link text-danger p-2 border-0 bg-transparent text-start w-100">
                <i class="fa fa-sign-out-alt me-2"></i> Đăng xuất
            </button>
        </form>
    </li>

</ul>
