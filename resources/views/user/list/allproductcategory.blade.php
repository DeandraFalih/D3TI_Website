@extends('user.layout')
@section('content')
<head>
    <title>{{ $category_name }}</title>
    <link rel="stylesheet" href="{{ url ('user/css/box.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .page-item.active .page-link {
            color: #fd7e14 !important;
        }

         @media (max-width: 767px) {
            .pagination-mobile-only {
              display: none;
            }
          }
    </style>
</head>

    <section class="blog_area section-padding">
        <div class="container">
            <h1 class="mb-3 text-primary font-weight-bold">{{ $category_name }}</h1>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($data_product as $data)
                        @php
                            $dateString = $data->product_date;

                            $date = new DateTime($dateString);
                            $date = $date->format('d');

                            $month = new DateTime($dateString);
                            $month = $month->format('M');

                            $productUrl = getSelectedProductUrl($data->product_id);
                            $productUrl = $productUrl->first();
                        @endphp
                        <article class="blog_item">
                            <div class="blog_item_img">

                                <a href="{{ url('/'.$productUrl->product_categories_url.'/'.$data->product_link) }}"><img class="card-img rounded-0" src="{{ url ('storage/featured_images/'.$data->product_featured_image) }}" alt="featured-image"></a>
                                <a class="blog_item_date">
                                    <h3>{{ $date }}</h3>
                                    <p>{{ $month }}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ url('/'.$productUrl->product_categories_url.'/'.$data->product_link) }}">
                                    <h2>{{ $data->product_title }}</h2>
                                </a>
                                <p>{{ $data->product_excerpt }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $data->product_author }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                            @if ($data_product->currentPage() > 2)
                              <li class="page-item pagination-mobile-only">
                                <a class="page-link" href="{{ $data_product->url(1) }}">
                                    <i class="fa fa-angle-double-left"></i>
                                </a>
                              </li>
                            @endif

                            @if ($data_product->currentPage() > 1)
                              <li class="page-item">
                                <a class="page-link" href="{{ $data_product->previousPageUrl() }}" aria-label="Previous">
                                  <i class="fa fa-angle-left"></i>
                                </a>
                              </li>
                            @endif

                            @for ($i = max(1, $data_product->currentPage() - 1); $i <= min($data_product->lastPage(), $data_product->currentPage() + 2); $i++)
                              <li class="page-item {{ ($data_product->currentPage() == $i) ? 'active' : '' }}">
                                <a class="page-link" href="{{ $data_product->url($i) }}">{{ $i }}</a>
                              </li>
                            @endfor

                            @if ($data_product->hasMorePages())
                              <li class="page-item">
                                <a class="page-link" href="{{ $data_product->nextPageUrl() }}" aria-label="Next">
                                  <i class="fa fa-angle-right"></i>
                                </a>
                              </li>
                            @endif

                            @if ($data_product->currentPage() < $data_product->lastPage() - 2)
                              <li class="page-item pagination-mobile-only">
                                <a class="page-link" href="{{ $data_product->url($data_product->lastPage()) }}">
                                    <i class="fa fa-angle-double-right"></i>
                                </a>
                              </li>
                            @endif
                          </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button button-contactForm btn_1 boxed-btn w-100" type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget product_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        
                      <aside class="single_sidebar_widget popular_product_widget">
                         <h3 class="widget_title">Recent product</h3>
                         @foreach($recent_product as $recent)
                            @php
                                $dateString = $recent->product_date;
                                $date = new DateTime($dateString);
                                $formattedDate = $date->format('F j, Y');

                                $categories = getproductCategories($recent->product_id);

                                $productUrl = getSelectedproductUrl($recent->product_id);
                                $productUrl = $productUrl->first();
                            @endphp
                         <div class="media product_item">
                            <img src="{{ url('storage/featured_images/'.$recent->product_featured_image) }}" alt="featured-image" style="height: 80px; width: 80px; object-fit: cover;">

                            <div class="media-body">
                               <a href="{{ url('/'.$productUrl->product_categories_url.'/'.$recent->product_link) }}">
                                  <h3>{{ $recent->product_title }}</h3>
                               </a>
                               <p>{{ $formattedDate }}</p>
                            </div>
                         </div>
                         @endforeach
                      </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection