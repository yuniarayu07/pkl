<?php $__env->startSection('content'); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
 <!-- About Start -->
 <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="<?php echo e(url('builzer')); ?>/img/logo.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="section-header text-left">
                                <p><h1>Welcome to Mejórate</h1></p>
                                <h2>7 Years Applied</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Mejórate Web Yang Dibuat Oleh Seorang Pelajar Boarding School Rekayasa Perangkat Lunak, Untuk Memudahkan Para Pasien Untuk Mendaftarkan Secara Online. 
                                </p>
                                <p>
                                    Mejórate Dibuat Pada Tahun 2013 Tepatnya Pada Tanggal 27 Juni, Yang Berawal Dari Sebuah Lomba Yang Mendidik Peserta Agar Membuat Web Karena Web Ini Memudahkan Para Pengguna,Web Ini DiPakai Oleh Rumah Sakit Sekitar Lebak-Banten. 
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our HOSPITAL</p>
                        <h2>We Provide Services</h2>
                    </div>
                   
                        <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?php echo e(url('builzer')); ?>/img/mlngpng.jpg" alt="Image" float='right'>
                                    <div class="service-overlay">
                                    <p class="justify"> RSUD Malingping kabupaten lebak merupakan salah satu
                                             perangkat dari pemerintah daerah secara terus menerus 
                                             berupaya meningkatkan mutu pelayanan dengan menerapkan 
                                             standart pelayanan rumah sakit dan standart pelayanan 
                                             medis, keperawatan maupun penunjang medis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
                        
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>