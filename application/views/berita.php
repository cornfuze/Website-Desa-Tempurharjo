<!--Berita Section-->

<section data-bs-version="5.1" class="beatm5 article6 cid-tz8BZvclXW2" id="about" style="<?php if(isset($test)) echo $test ?>;">
    <div class="container">
    
    <section id="focus" class="focus-section">
        <div class="container-lg py-5">
            <div class="container px-0">
                <div class="row">
                    <div class="col">
                        <h2 class="title-section invers animated slideInLeft" style="<?php if(isset($putih)) echo $putih ?>;">Berita <b>Terkini</b></h2>
                        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($berita as $a): ?>
                <div class="col">
                    <div class="card shadow-sm h-100 invers">
                        <div class="card-image">
                            <div class="hover-text">
                                <img src="<?=base_url($a['gambar'])?>" class="card-img-top cropped-ofp" alt="..." style="height:225px; width:100%; object-fit: cover;">
                                <div class="bottom-right-tag text-uppercase"><a href="<?=base_url('home/'.str_replace(" ", "", $a['jenis_kegiatan']))?>">#<?=$a['jenis_kegiatan']?></a></div>
                            </div>
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="<?=base_url('home/artikel/'.$a['id_berita'])?>"><?=$a['keterangan']?>.</a></h3>
                            <div class="text-left my-2">
                                <div class="sub-cat text-truncate">
                                    <span class="badge rounded-pill bg-category text-uppercase">Hot News</span>
                                </div>
                            </div>
                            <!--<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                        </div>
    
                        <div class="card-footer py-3">
                            <div class="card-footer__info">
                                <?php
                                    $dateTime = new DateTime($a['tanggal']);
                                    $dateOnly = $dateTime->format('Y-m-d');
                                ?>
                                <span><i class="far fa-calendar-alt"></i> <?=$dateOnly?></span>
                                <span class="read-more">
                                    <a class="text-uppercase read-more-1" href="<?=base_url('home/artikel/'.$a['id_berita'])?>">Selengkapnya </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
    
            </div>
        </div>

    </div>
</section>
