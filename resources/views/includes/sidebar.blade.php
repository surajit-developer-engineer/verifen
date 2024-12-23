@php
    $controller_arr = explode('\\', request()->route()->getAction()['controller']);
    $controllerArr = explode('@', end($controller_arr));
    $controller_name = $controllerArr[0];
@endphp

<!-- ===================== Main Sidebar Section Start ===================== -->

<div class="bodyLeftPanel">
    <nav>
        <ul class="nav nav-list">
            <li><a class="{{ $controller_name == 'DashboardController' ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li><a class="{{ $controller_name == 'LeadPartnerController' ? 'active' : '' }}"
                    href="{{ route('admin.lead.partner') }}"><i class="fa fa-user-o"></i> <span>Partners</span></a></li>
        </ul>
    </nav>
</div>

<!-- ===================== Main Sidebar Section End ===================== -->
