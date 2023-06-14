<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
           
        </div>
        <div class="sidebar-brand mx-3">NextEducation <sup>V 0.01</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __("Panel") }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>{{ __("Mensajes") }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Gestion de cursos') }}
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('myCourse') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>{{ __("Mi curso") }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    @can('menu.education')
    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Educacion') }}
    </div>

    @can('mentor.list')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#MentorsCollapse" aria-expanded="true" aria-controls="ACLCollapse">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Aprendices</span>
        </a>
        <div id="MentorsCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('myLearners') }}">{{ __('Estudiantes') }}</a>

            </div>

        </div>

    </li>
    @endcan

    @can('course.index')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminMenuCourse') }}">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>{{ __("Centro educativo") }}</span></a>
    </li>
    @endcan

    @endcan


    @can('menu.education')




    @role('Super-Admin')

    <div class="sidebar-heading">
        {{ __('Financiamiento') }}
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Financial" aria-expanded="true" aria-controls="ACLCollapse">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>{{ __('Pagos') }}</span>
        </a>
        <div id="Financial" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('plan.index') }}">{{ __('Plan') }}</a>

            </div>
        </div>
    </li>


    <div class="sidebar-heading">
        {{ __('Admin') }}
    </div>
    <!-- Nav Item - Admin Setup LMS -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ACLCollapse" aria-expanded="true" aria-controls="ACLCollapse">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>ACL</span>
        </a>
        <div id="ACLCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user.index') }}">{{ __('usuario') }}</a>
                <a class="collapse-item" href="{{ route('role.index') }}">{{ __('roles') }}</a>
                <a class="collapse-item" href="{{ route('permission.index') }}">{{ __('Permisos') }}</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('configuration.index') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>{{ __("Configuracion") }}</span></a>
    </li>

    @endrole

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endcan
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->