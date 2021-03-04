<li class="nav-item {{ request()->is('admin/blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('backend.blogs.index') }}">
        <i class="fas fa-users"></i>
        <span>Users</span>
    </a>
</li>