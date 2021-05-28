<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('admin.settings') }}"><i class="fa fa-cog fa-lg"></i> Settings</a>
        </li>
        <li>
          <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}"
            href="{{ route('admin.categories.index') }}">
            <i class="app-menu__icon fa fa-tags"></i>
            <span class="app-menu__label">Categories</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item {{ Route::currentRouteName() == 'admin.attributes.index' ? 'active' : '' }}" href="{{ route('admin.attributes.index') }}">
            <i class="app-menu__icon fa fa-th"></i>
            <span class="app-menu__label">Attributes</span>
          </a>
        </li>
    </ul>
</aside>