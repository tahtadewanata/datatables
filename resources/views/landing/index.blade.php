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
                    <i class="ti-paint-bucket text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 ">themes made easy</h3>
                    <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non,
                        recusandae
                        tempore ipsam dignissimos molestias.</p>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <i class="ti-shine text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 ">powerful design</h3>
                    <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non,
                        recusandae
                        tempore ipsam dignissimos molestias.</p>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                    <i class="ti-thought text-primary h1"></i>
                    <h3 class="mt-4 text-capitalize h5 ">creative content</h3>
                    <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non,
                        recusandae
                        tempore ipsam dignissimos molestias.</p>
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
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h2>BERITA SIDANDA</h2>
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
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-01.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-02.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-03.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-01.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-02.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-03.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-12">
                    <!-- Call to action Community -->
    <div class="cta-community shadow">
        <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left">
                <div class="content">
                    <!-- Title -->
                    <h2>Ready To Join Our Community?</h2>
                    <!-- Description -->
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-right mt-4 mt-lg-0">
                <div class="action-button">
                    <!-- Call Button -->
                    <a href="contact.html" class="btn btn-main-sm">Join now</a>
                </div>
            </div>
        </div>
    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-01.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-02.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post -->
    <article class="post-sm">
        <!-- Post Image -->
        <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="images/blog/post-03.jpg" alt="Post-Image"></a>		
        </div>
        <!-- Post Title -->
        <div class="post-title">
            <h3><a href="blog-single.html">Design is not just what it looks like and feels like. Design is how it works.</a></h3>
        </div>
        <!-- Post Meta -->
        <div class="post-meta">
            <ul class="list-inline post-tag">
                <li class="list-inline-item">
                    <img src="images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
                </li>
                <li class="list-inline-item">
                    <a href="#">Thomas Johnson</a>
                </li>
                <li class="list-inline-item">
                    August 8, 2017
                </li>
            </ul>
        </div>
        <!-- Post Details -->
        <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        </div>
    </article>
                </div>
                <div class="col-12">
                    <!-- Pagination -->
                    <nav class="pagination-nav">
                      <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="ti-angle-right"></i></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<!--====  End of Testimonial  ====-->


@endsection
