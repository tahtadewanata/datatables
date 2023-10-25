<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            <li><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="{{ route('datatable.index') }}"><i class="fas fa-table"></i> <span>Datatable</span></a></li>
            <li><a class="nav-link" href="{{ route('chartjs.index') }}"><i class="fas fa-desktop"></i> <span>ChartJs</span></a></li>
            <li><a class="nav-link" href="{{ route('kecamatan.index') }}"><i class="fas fa-desktop"></i> <span>Kecamatan</span></a></li>
            <li><a class="nav-link" href="{{ route('datadisdik.index') }}"><i class="fas fa-graduation-cap"></i> <span>Data Disdik</span></a></li>
            <li class="menu-header">Akses</li>
            <li><a class="nav-link" href="{{ route('pengguna.index') }}"><i class="fas fa-user"></i> <span>Pengguna</span></a></li>
    </aside>
</div>
