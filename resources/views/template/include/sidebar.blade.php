@include('template.include.css')               
@include('template.include.script')

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 <!-- Sidebar - Brand -->
<div class="d-flex align-items-center justify-content-between">
    <a class="sidebar-brand" href="index.html">
        <div class="d-flex align-items-center">
            <div class="sidebar-brand-icon mr-2">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text ml-2">INVENTORY</div>
        </div>
    </a>
    <button id="sidebarToggleTop" class="btn btn-link text-white">
        <i class="fa fa-bars"></i>
    </button>
</div>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ 'template/home' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('template/barang') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Barang</span></a>
    </li>


    <!-- Nav Item - Kategori -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('template/kategori') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Kategori</span></a>
    </li>

     <!-- Nav Item - Ruangan -->
     <li class="nav-item">
        <a class="nav-link" href="{{ url('template/ruangan') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Ruangan</span></a>
    </li>

         <!-- Nav Item - Laporan -->
         <li class="nav-item">
            <a class="nav-link" href="{{ url('template/laporan') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Laporan</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


</ul>
<!-- End of Sidebar -->