<!DOCTYPE html>
<html lang="en">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Hero Section Start -->
    <div class="container-m-1 py-1 bg-white hero-header mb-4">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-dark animated slideInLeft"><?=$jenis?> Desa Tempurharjo</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Card Section Start -->
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px;
        margin-bottom: 150px; 
    }
    
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    .container {
        padding: 2px 16px;
    }
</style>

<div class="container my-4">
        <?php foreach($keuangan as $a):?>
            
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title"><?=$a['jenis_keuangan']?></h4>
                        <h4 class="card-title">Tahun <?=$a['tahun']?></h4>
                        <iframe src="<?=base_url($a['link'])?>" width="100%" height="600" allow="autoplay"></iframe>
                    </div>
                </div>
            
        <?php endforeach?>
</div>

<!-- Card Section End -->

</html>
