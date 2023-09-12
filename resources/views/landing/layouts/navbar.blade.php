<nav class="navbar main-nav navbar-expand-lg shadow sticky-top px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="../../landing/images/Logo-Sidanda-Dark-Only.png" height="38" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @@about">
                    <a class="nav-link" href="{{ route('home.index') }}">Beranda</a>
                </li>
                <li class="nav-item @@contact">
                    <a class="nav-link" href="{{ route('getdasar') }}">Data Dasar</a>
                </li>
                <li class="nav-item dropdown @@contact">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Terpilah
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('getPendidikantable') }}">Bid. Pendidikan</a>
                        <!-- <a class="dropdown-item" href="#">Siswa Putus Sekolah</a>
                        <a class="dropdown-item" href="#">Angka Partisipasi Sekolah</a> -->
                        <!-- Tambahkan submenu lainnya sesuai kebutuhan -->
                    </div>
                </li>
                <li class="nav-item @@contact">
                    @auth
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
