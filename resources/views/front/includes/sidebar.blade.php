<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('front.marketingdogovor.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Договора маркетинга
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('front.invoice.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Заявки на счета
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('front.accruals.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Сопоставление начислений
                    </p>
                </a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
