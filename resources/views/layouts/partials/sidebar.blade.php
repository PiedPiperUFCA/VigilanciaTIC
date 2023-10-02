<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-brain"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VIGEP <sup>ADMIN</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fa-solid fa-fw fa-tachometer-alt"></i>
            <span>Início</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        VIGEP
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fa-solid fa-fw fa-chart-area"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-hospital-user"></i>
            <span>Notificações</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Ações para notificações</h6>
                <a class="collapse-item" href="{{route('forms.index')}}">Cadastrar ficha</a>
                <a class="collapse-item" href="cards.html">Editar ficha</a>
                <a class="collapse-item" href="cards.html">Histórico de fichas</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Transferir dados</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Sair</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->