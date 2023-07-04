@extends('landing.layouts.app')
@section('content')
<!--====================================
    =            Hero Section            =
    =====================================-->
<section class="section gradient-banner">
    <div class="shapes-container">
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
        <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                <h1 class="text-white font-weight-bold mb-4">SISTEM INFORMASI DATA GENDER DAN ANAK</h1>
                <p class="text-white mb-5">data terpilah berdasarkan jenis kelamin menjadi inti dalam 
                    menghasilkan Statistik Gender yang didalamnya mengandung informasi isu gender.</p>
                {{-- <a href="#" class="btn btn-main-md">Download</a> --}}
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <img class="img-fluid" src="../../landing/images/mobile.png" alt="screenshot">
            </div>
        </div>
    </div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
    <div class="container">
        <div class="rounded shadow p-5 bg-white">
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <i class="ti-view-list text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 "><a href="{{ route('home.index') }}">Data Dasar</a></h3>
                    <p class="regular text-muted">Meliputi data dasar berdasarkan jenis kelamin, 
                        misalnya jumlah penduduk, dan lain-lain.</p>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <i class="ti-folder text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 "><a href="{{ route('home.index') }}">Data Terpilah</a></h3>
                    <p class="regular text-muted">Meliputi data terpilah yang terdiri dari data 
                        bidang-bidang, misalnya bidang pendidikan, dan lain-lain.</p>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                    <i class="ti-server text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 "><a href="{{ route('home.index') }}">Data Kelembagaan</a></h3>
                    <p class="regular text-muted">Meliputi data Kelembagaan Pengarusutamaan 
                        Gender dan Pengarusutamaan Hak Anak.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!--================================
=            BERITA Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="heading-block col-sm-8 m-auto">
				<!-- Page Title -->
				<h2>SEPUTAR NGANJUK</h2>
			</div>
		</div>
	</div>
</section>
<!--=================================
    =            BERITA SIDANDA            =
    ==================================-->
    <section class="post-grid section pt-0">
        <div class="container">
            <div class="row">
                <?php foreach($kabar as $val){ 
                  if($val['imgpath']){
                    $url_image = $val['imgpath'];
                  } else {
                    $url_image = base_url().'assets/img/no-image.jpg' ;
                  }
                  ?>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
                    <article class="post-sm">
                        <!-- Post Image -->
                        <div class="post-thumb">
                            <a href="<?= 'https://www.nganjukkab.go.id/home/detail-kabar/'.$val['slug'];?>"><img class="w-100" src="<?=  $url_image;?>" alt="Post-Image"></a>		
                        </div>
                        <!-- Post Title -->
                        <div class="post-title">
                            <h3><a href="<?= 'https://www.nganjukkab.go.id/home/detail-kabar/'.$val['slug'];?>"><?=  $val['judul'];?></a></h3>
                        </div>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <ul class="list-inline post-tag">
                                <li class="list-inline-item">
                                    <a href="#"><?=  $val['nama'];?></a>
                                </li>
                                <li class="list-inline-item">
                                    <?=  $val['tanggal'];?>
                                </li>
                            </ul>
                        </div>
                        <!-- Post Details -->
                        <div class="post-details">
                            <p><?= substr(preg_replace("/\r?\n$/", "", strip_tags($val['isi'])), 0, 200) ;?> ....</p>
                        </div>
                    </article>
                </div>
                <?php }?>               
            </div>
        </div>
    </section>

@endsection
