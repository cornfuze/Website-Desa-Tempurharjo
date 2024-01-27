<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success px-4 px-lg-5 py-3 py-lg-0">
    <a href="<?=base_url('home')?>" class="navbar-brand p-0">
        <img src="<?=base_url('asset/img/logo.png')?>" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="<?=base_url('home')?>" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu m-0">
                    <a href="<?=base_url('home/profil')?>" class="dropdown-item">Profil</a>
                    <a href="<?=base_url('home/visimisi')?>" class="dropdown-item">Visi Misi</a>
                </div>
            </div>
            <a href="<?=base_url('home/organisasi')?>" class="nav-item nav-link">Organisasi</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Keuangan</a>
                <div class="dropdown-menu m-0">
                    <a href="<?=base_url('home/RPJM')?>" class="dropdown-item">RPJM Desa</a>
                    <a href="<?=base_url('home/RKP')?>" class="dropdown-item">RKP Desa</a>
                    <a href="<?=base_url('home/APBD')?>" class="dropdown-item">APB Desa</a>
                    <a href="<?=base_url('home/LRA')?>" class="dropdown-item">Laporan Realisasi Anggaran</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                <div class="dropdown-menu m-0">
                    <a href="<?=base_url('home/kesehatan')?>" class="dropdown-item">Kesehatan</a>
                    <a href="<?=base_url('home/pkk')?>" class="dropdown-item">PKK</a>
                    <a href="<?=base_url('home/pemuda')?>" class="dropdown-item">Pemuda</a>
                    <a href="<?=base_url('home/pembangunan')?>" class="dropdown-item">Pembangunan</a>
                    <a href="<?=base_url('home/kegiatanlain')?>" class="dropdown-item">Kegiatan Lain</a>
                </div>
            </div>
            <a href="<?=base_url('home/berita')?>" class="nav-item nav-link">Berita Terkini</a>
        </div>
        <!--<div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
        </div> -->
    </div>
</nav>
<!-- Navbar End -->