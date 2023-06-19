@extends('user.layout')
@section('content')

    <head>
        <title>D3 Teknik Informatika</title>
        <link rel="stylesheet" href="{{ url('user/css/box.css') }}">
        <link rel="stylesheet" href="{{ url('user/css/mobile.css') }}">
        <meta name="description" content="">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#header-carousel').carousel({
                    interval: 5000,
                    pause: false
                });
            });
        </script>

        <style>
            .slick-dots {
                display: none !important;
            }

            .slick-arrow {
                display: none !important;
            }

            @media (max-width: 767px) {
                .weekly2-more-btn {
                    display: none;
                }

                #my-row {
                    margin-top: 0px !important;
                }
            }

            @media (max-width: 1204px) {
                .facts {
                    display: none !important;
                }

                .custom-tittle-size {
                    font-size: 2.5rem !important;
                    margin-bottom: 10;
                    padding-bottom: 9.25rem !important;
                }
            }


            @media (max-width: 576px) {
                .facts {
                    display: none !important;
                }

                .custom-tittle-size {
                    font-size: 2.0rem !important;
                    margin-bottom: 10;
                    padding-bottom: 9.25rem !important;
                }

                .carousel-item img {
                    max-height: 200px !important;
                }
            }

            .carousel-caption {
                z-index: 1;
            }
        </style>

    </head>

    <main>
        <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 image-filter" src="{{ url('user/img/vokasi.jpg') }}" height="600"
                            style="object-fit: cover;" alt="sekolah vokasi">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 image-filter" src="{{ url('user/img/vokasi.jpg') }}" height="600"
                            style="object-fit: cover;" alt="sekolah vokasi">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 image-filter" src="{{ url('user/img/vokasi.jpg') }}" height="600"
                            style="object-fit: cover;" alt="sekolah vokasi">
                    </div>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center mb-5">
                                <div class="col-lg-9">
                                    <h1
                                        class="display-4 text-light mb-8 animated slideInDown font-weight-bold custom-tittle-size">
                                        Selamat Datang di D3 Teknik Informatika UNS</h1>
                                </div>
                            </div>
                            <div class="container-fluid facts py-5 pt-lg-0 text-worksans">
                                <div class="container py-5 pt-lg-0">
                                    <div class="row gx-0">
                                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                            <div class="bg-white shadow d-flex align-items-center h-100 p-4"
                                                style="min-height: 150px;">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 btn-lg-square bg-primary">
                                                        <i class="fa fa-car text-white"></i>
                                                    </div>
                                                    <div class="ps-4 text-white">
                                                        <h5 class="text-white"> Kampus Mesen </h5>
                                                        <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                            <div class="bg-white shadow d-flex align-items-center h-100 p-4"
                                                style="min-height: 150px;">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 btn-lg-square bg-primary">
                                                        <i class="fa fa-users text-white"></i>
                                                    </div>
                                                    <div class="ps-4">
                                                        <h5 class="text-white">Kampus Sekolah Vokasi</h5>
                                                        <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                            <div class="bg-white shadow d-flex align-items-center h-100 p-4"
                                                style="min-height: 150px;">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 btn-lg-square bg-primary">
                                                        <i class="fa fa-file-alt text-white"></i>
                                                    </div>
                                                    <div class="ps-4">
                                                        <h5 class="text-white">Kampus Utama</h5>
                                                        <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                                            <div class="bg-white d-flex align-items-center p-2"
                                                style="max-height: 2px; background-color: #FFFF00 !important;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="weekly2-news-area weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row" id="my-row" style="margin-top: -50px;">
                        <div class="col-lg-6">
                            <div class="section-tittle mb-30">
                                <h3>Berita Seputar D3TI</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="weekly2-more-btn text-lg-right">
                                <p><a href="{{ url('/p/category/news') }}" class="view-more" style="color: #1A237E;"><b>View
                                            More</b></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                @foreach ($data_post as $data)
                                    @php
                                        $dateString = $data->post_date;
                                        $date = new DateTime($dateString);
                                        $formattedDate = $date->format('F j, Y');
                                        
                                        $categories = getPostCategories($data->post_id);
                                        
                                        $postUrl = getSelectedPostUrl($data->post_id);
                                        $postUrl = $postUrl->first();
                                    @endphp
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <a
                                                href="{{ url('/' . $postUrl->post_categories_url . '/' . $data->post_link) }}"><img
                                                    src="{{ url('storage/featured_images/' . '(thumbnail)' . $data->post_featured_image) }}"
                                                    alt="featured-image" style="height: 170px; object-fit: cover;"></a>
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">{{ $categories }}</span>
                                            <ul class="blog-info-link mt-1 mb-1">
                                                <li><i class="fa fa-user"></i><a href="#">{{ $data->post_author }}</a>
                                                </li>
                                                <li><i class="fa fa-calendar"></i> {{ $formattedDate }}</li>
                                            </ul>
                                            <h4><a
                                                    href="{{ url('/' . $postUrl->post_categories_url . '/' . $data->post_link) }}">{{ $data->post_title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- layout tambahan 27 mei --}}
        <div class="weekly2-news-area weekly2-pading primary-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                                <div class="row">
                                    <div class="col-12">
                                        <aside class="single_sidebar_widget popular_post_widget">
                                            {{-- tambahke recent --}}
                                            <div class="col-12">
                                                <div class="weekly2-news mb-3">
                                                    <div class="weekly2-single">
                                                        <div class="weekly2-img">
                                                            <img src="{{ url('user/img/post/cek.jpeg') }}"
                                                                alt="featured-image"
                                                                style="height: 170px; object-fit: cover;">
                                                        </div>
                                                        <div class="weekly2-caption">
                                                            <span class="color1">Category</span>
                                                            <ul class="blog-info-link mt-1 mb-1">
                                                                <li><i class="fa fa-user"></i><a href="#">Author</a>
                                                                </li>
                                                                <li><i class="fa fa-calendar"></i> Date</li>
                                                            </ul>
                                                            <h4><a href="#">Post Title</a></h4>
                                                        </div>
                                                    </div>

                                                    <!-- Repeat the above structure for each post -->

                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_1.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>From life was you fish...</h3>
                                                    </a>
                                                    <p>January 12, 2019</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_2.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>The Amazing Hubble</h3>
                                                    </a>
                                                    <p>02 Hours ago</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_3.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>Astronomy Or Astrology</h3>
                                                    </a>
                                                    <p>03 Hours ago</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_4.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>Asteroids telescope</h3>
                                                    </a>
                                                    <p>01 Hours ago</p>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                                <div class="row">
                                    <div class="col-12">
                                        <aside class="single_sidebar_widget popular_post_widget">
                                            <div class="weekly2-news mb-3">
                                                <div class="weekly2-single">
                                                    <div class="weekly2-img">
                                                        <img src="{{ url('user/img/post/cek.jpeg') }}"
                                                            alt="featured-image"
                                                            style="height: 170px; object-fit: cover;">
                                                    </div>
                                                    <div class="weekly2-caption">
                                                        <span class="color1">Category</span>
                                                        <ul class="blog-info-link mt-1 mb-1">
                                                            <li><i class="fa fa-user"></i><a href="#">Author</a>
                                                            </li>
                                                            <li><i class="fa fa-calendar"></i> Date</li>
                                                        </ul>
                                                        <h4><a href="#">Post Title</a></h4>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_1.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>From life was you fish...</h3>
                                                    </a>
                                                    <p>January 12, 2019</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_2.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>The Amazing Hubble</h3>
                                                    </a>
                                                    <p>02 Hours ago</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_3.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>Astronomy Or Astrology</h3>
                                                    </a>
                                                    <p>03 Hours ago</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_4.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>Asteroids telescope</h3>
                                                    </a>
                                                    <p>01 Hours ago</p>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                                <div class="row">
                                    <div class="col-12">
                                        <aside class="single_sidebar_widget popular_post_widget">
                                            <div class="weekly2-news mb-3">
                                                <div class="weekly2-single">
                                                    <div class="weekly2-img">
                                                        <img src="{{ url('user/img/post/cek.jpeg') }}"
                                                            alt="featured-image"
                                                            style="height: 170px; object-fit: cover;">
                                                    </div>
                                                    <div class="weekly2-caption">
                                                        <span class="color1">Category</span>
                                                        <ul class="blog-info-link mt-1 mb-1">
                                                            <li><i class="fa fa-user"></i><a href="#">Author</a>
                                                            </li>
                                                            <li><i class="fa fa-calendar"></i> Date</li>
                                                        </ul>
                                                        <h4><a href="#">Post Title</a></h4>
                                                    </div>
                                                </div>

                                                <!-- Repeat the above structure for each post -->

                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_1.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>From life was you fish...</h3>
                                                    </a>
                                                    <p>January 12, 2019</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_2.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>The Amazing Hubble</h3>
                                                    </a>
                                                    <p>02 Hours ago</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_3.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>Astronomy Or Astrology</h3>
                                                    </a>
                                                    <p>03 Hours ago</p>
                                                </div>
                                            </div>
                                            <div class="media post_item">
                                                <img src="{{ url('user/img/post/post_4.png') }}" alt="post">
                                                <div class="media-body">
                                                    <a href="single-blog.html">
                                                        <h3>Asteroids telescope</h3>
                                                    </a>
                                                    <p>01 Hours ago</p>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </div>
        </div>


        {{-- <div class="weekly2-news-area weekly2-pading">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row" id="my-row" style="margin-top: -50px;">
                        <div class="col-lg-6">
                            <div class="section-tittle mb-30">
                                <h3>Video Youtube Terbaru</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                @foreach ($data_youtube as $video)
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <a href="https://www.youtube.com/watch?v={{ $video->youtube_video_id }}"
                                                target="_blank">
                                                <img src="https://img.youtube.com/vi/{{ $video->youtube_video_id }}/hqdefault.jpg"
                                                    style="height: 160px; object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color3">Click to Watch the Video</span>
                                            <h4><a href="https://www.youtube.com/watch?v={{ $video->youtube_video_id }}"
                                                    target="_blank">{{ $video->youtube_title }}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="weekly2-news-area weekly2-pading">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row" id="my-row" style="margin-top: -50px;">
                        <div class="col-lg-6">
                            <div class="section-tittle mb-30">
                                <h3>Mitra Kerjasama D3 Teknik Informatika</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style" id="mitra-kerjasama-slider">
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ url('user/img/redhat.jpg') }}" alt="featured-image"
                                            style="height: 136px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Gallery -->
        <div class="container box_1170">
            <div class="section-top-border">
                <h3>Image Gallery</h3>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="assets/img/elements/g1.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g1.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/elements/g2.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/elements/g3.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g3.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="assets/img/elements/g4.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g4.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="assets/img/elements/g5.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g5.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/elements/g6.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g6.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/elements/g7.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g7.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/elements/g8.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(user/img/elements/g8.jpg);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Gallery -->

        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </main>
    <script src="{{ url('/user/js/slickdashboard.js') }}"></script>
@endsection
