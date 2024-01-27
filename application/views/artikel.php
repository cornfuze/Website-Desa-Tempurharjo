    <!-- Hero Section Start -->
    <?php foreach($artikel as $a):?>
    <div class="container-m-1 py-1 bg-white hero-header mb-4">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-lg-start gambarberita">
                    <h1 class="display-3 text-dark animated slideInLeft">
                        <h1 class="display-3 text-dark animated slideInLeft">
                            <a class="judulberita" href="<?=base_url('home/berita')?>" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Klik Untuk Kembali"><?=$a['keterangan']?></a>
                        </h1>
                    </h1>
                    <h6 class="lead fw-normal text-dark mb-5 animated slideInLeft text-muted"><a href="kegiatan.html" style="color: #6c757d;">#<?=$a['jenis_kegiatan']?></a></h6>
                    <p><small>Updated <?=$a['tanggal']?> </small></p>
                    <figure class="figure" style="background-image:url();">
                        <img src="<?=base_url($a['gambar'])?>" class="figure-img img-fluid rounded mx-auto d-block cropped-ofp" alt="...">
                    </figure>
                    
                    <br><br><div class="pberita"><p></p><?=$a['isiartikel']?></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <?php endforeach?>

    <style>
    .pberita {
        text-align: justify;
        }
    .judulberita {
        color: #000000;
        text-decoration: none;
        }
    .judulberita:hover {
        color: #FEA116;
        text-decoration: none;
        }

        @media (min-width: 992px) {
    .gambarberita {
        flex: 0 0 auto;
        width: 70%;
    }
    
}
</style>