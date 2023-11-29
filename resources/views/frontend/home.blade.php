@extends("frontend.includes.layout")
@section('title','Event Organizer | Home Page')
@section('content')
<!--Main Content Area-->
<section class="mt-40">
    <div class="container-fluid">
        <div class="row">
            @include("frontend.includes.categories")
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="main-content-slider owl-carousel mb-40">
                        @if(!empty($videoList))
                            @foreach($videoList as $video)
                                <div class="content">
                                    <a href="#">
                                        <div class="thumb">
                                            <img src="{{ $video->video_futured_image }}" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>{{ $video->video_title }}</h4>
                                        </div>
                                        <div class="play">
                                            <i class="jam jam-play"></i>
                                        </div>
                                    </a>
                                </div>  
                            @endforeach
                        @endif
                        </div>
                    </div>
                </div>
                <div class="mb-40">
                    <div class="section-title cl-white">
                        <h2>Best Items</h2>
                    </div>
                    <div class="popular-items owl-carousel">
                        @if(!empty($videoList))
                            @foreach($videoList as $video)
                                <a href="#" class="single-item">
                                    <img src="{{ $video->video_futured_image }}" alt="">
                                    <h4>{{ $video->video_title }}</h4>
                                    <div class="special-item">New item</div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="main-content-1">
                    <div class="section-title cl-white">
                        <h2>New Videos</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-30">
                            <div class="content">
                                <a href="single-video.html">
                                    <div class="thumb">
                                        <img src="{{ asset('public/frontend/images/items/new/1') }}.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Pquidem in expedita <span>5:48 min</span></h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                    <div class="play">
                                        <i class="jam jam-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-30">
                            <div class="content">
                                <a href="single-video.html">
                                    <div class="thumb">
                                        <img src="{{ asset('public/frontend/images/items/new/2') }}.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>It is a long established <span>5:48 min</span></h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                    <div class="play">
                                        <i class="jam jam-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-30">
                            <div class="content">
                                <a href="single-video.html">
                                    <div class="thumb">
                                        <img src="{{ asset('public/frontend/images/items/new/3') }}.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Dummy text for fun <span>5:48 min</span></h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                    <div class="play">
                                        <i class="jam jam-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-20">
                            <div class="content">
                                <a href="single-video.html">
                                    <div class="thumb">
                                        <img src="{{ asset('public/frontend/images/items/new/4') }}.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Litter of love <span>5:48 min</span></h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                    <div class="play">
                                        <i class="jam jam-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-20">
                            <div class="content">
                                <a href="single-video.html">
                                    <div class="thumb">
                                        <img src="{{ asset('public/frontend/images/items/new/5') }}.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Litter of love <span>5:48 min</span></h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                    <div class="play">
                                        <i class="jam jam-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-20">
                            <div class="content">
                                <a href="single-video.html">
                                    <div class="thumb">
                                        <img src="{{ asset('public/frontend/images/items/new/7') }}.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Litter of love <span>5:48 min</span></h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                    <div class="play">
                                        <i class="jam jam-play"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                <div class="web-sidebar-widget mb-40">
                    <div class="widget-head">
                        <h3>Weekly Best</h3>
                    </div>
                    <div class="widget-body p-3 sidebar-cat-height">
                        @if(!empty($videoList))
                            @foreach($videoList as $video)
                                <a href="" class="video mb-20">
                                    <div class="thumb">
                                        <img src="{{ $video->video_futured_image }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{ $video->video_title }}</h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="web-sidebar-widget mb-40">
                    <div class="widget-body">
                        <a href=""><img class="w-100" src="{{ asset('public/frontend/images/ads-2.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="web-sidebar-widget">
                    <div class="widget-head">
                        <h3>All time Best</h3>
                    </div>
                    <div class="widget-body p-3 sidebar-cat-height">
                         @if(!empty($videoList))
                            @foreach($videoList as $videos)
                                <a href="" class="video mb-20">
                                    <div class="thumb">
                                        <img src="{{ $videos->video_futured_image }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{ $videos->video_title }}</h4>
                                        <div class="metas">
                                            <span><i class="fa fa-user"></i>Robbin</span>
                                            <span><i class="fa fa-comment"></i>05</span>
                                            <span><i class="fa fa-eye"></i>23M</span>
                                            <span><i class="fa fa-thumbs-up"></i>21K</span>
                                            <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Main Content Area-->
<!--Section-->
<section class="section-padding-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title cl-white">
                    <h2>Featured Videos</h2>
                </div>
            </div>
        </div>
        <div class="popular-item-2 owl-carousel">
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/5.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/6.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
                <div class="special-item">New item</div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/7.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/8.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
                <div class="special-item">New item</div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/6.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
                <div class="special-item">New item</div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/7.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/8.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
                <div class="special-item">New item</div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/6.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
                <div class="special-item">New item</div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/7.jpg') }}" alt="">
                <h4>Hampden Sydney College <span>13:05</span></h4>
            </a>
        </div>
    </div>
</section><!--Section-->

<!--Section-->
<section class="section-padding-2 pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title cl-white">
                    <h2>Base Items</h2>
                </div>
            </div>
        </div>
        <div class="base-items">
            <div class=" row">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/1.jpg') }}" alt="">
                        <h4>Consectetur adipisicing elit <span>21:11</span></h4>
                        <div class="special-item">New item</div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/3.jpg') }}" alt="">
                        <div class="special-item">New item</div>
                        <h4>Iusto nesciunt incidunt <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/4.jpg') }}" alt="">
                        <h4>Hampden Sydney College <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/3.jpg') }}" alt="">
                        <div class="special-item">New item</div>
                        <h4>Iusto nesciunt incidunt <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/4.jpg') }}" alt="">
                        <h4>Hampden Sydney College <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/1.jpg') }}" alt="">
                        <h4>Consectetur adipisicing elit <span>21:11</span></h4>
                        <div class="special-item">New item</div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/3.jpg') }}" alt="">
                        <div class="special-item">New item</div>
                        <h4>Iusto nesciunt incidunt <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/4.jpg') }}" alt="">
                        <h4>Hampden Sydney College <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!--/Section-->

<!--Section-->
<section class="section-padding-2 pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title cl-white">
                    <h2>Featured Videos</h2>
                </div>
            </div>
        </div>
        <div class="popular-items-hover owl-carousel">
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/10.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>
                    <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/11.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>                                 <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/12.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>                                 <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/10.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>                                 <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/11.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>                                 <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/12.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>
                    <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/13.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>
                    <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/14.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>
                    <p><i class="jam jam-play"></i></p>
                </div>
            </a>
            <a href="single-video.html" class="single-item">
                <img src="{{ asset('public/frontend/images/items/15.jp') }}g" alt="">
                <h4>Hampden Sydney College</h4>
                <div class="single-item-content">
                    <h5>Sed ut perspiciatis</h5>
                    <div class="item-content-meta">
                        <span>12 mins</span>
                    </div>
                    <p><i class="jam jam-play"></i></p>
                </div>
            </a>
        </div>
    </div>
</section><!--/Section-->

<!--Trending items-->
<section class="section-padding-2 main-content-1 pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <div class="section-title cl-white">
                    <h2>Top Trending</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/1') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Pquidem in expedita <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/2') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>It is a long established <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/3') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Dummy text for fun <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/4') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Litter of love <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/5') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Litter of love <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/7') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Litter of love <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/6') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Litter of love <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="content">
                    <a href="single-video.html">
                        <div class="thumb">
                            <img src="{{ asset('public/frontend/images/items/new/1') }}.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Litter of love <span>5:48 min</span></h4>
                            <div class="metas">
                                <span><i class="fa fa-user"></i>Robbin</span>
                                <span><i class="fa fa-comment"></i>05</span>
                                <span><i class="fa fa-eye"></i>23M</span>
                                <span><i class="fa fa-thumbs-up"></i>21K</span>
                                <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                            </div>
                        </div>
                        <div class="play">
                            <i class="jam jam-play"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!--/Trending items-->


<!--Section-->
<section class="section-padding-2 pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title cl-white">
                    <h2>Base Items</h2>
                </div>
            </div>
        </div>
        <div class="base-items">
            <div class=" row">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/1.jpg') }}" alt="">
                        <h4>Consectetur adipisicing elit <span>21:11</span></h4>
                        <div class="special-item">New item</div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/3.jpg') }}" alt="">
                        <div class="special-item">New item</div>
                        <h4>Iusto nesciunt incidunt <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/4.jpg') }}" alt="">
                        <h4>Hampden Sydney College <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/3.jpg') }}" alt="">
                        <div class="special-item">New item</div>
                        <h4>Iusto nesciunt incidunt <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/4.jpg') }}" alt="">
                        <h4>Hampden Sydney College <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/1.jpg') }}" alt="">
                        <h4>Consectetur adipisicing elit <span>21:11</span></h4>
                        <div class="special-item">New item</div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/3.jpg') }}" alt="">
                        <div class="special-item">New item</div>
                        <h4>Iusto nesciunt incidunt <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/4.jpg') }}" alt="">
                        <h4>Hampden Sydney College <span>21:11</span></h4>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="single-video.html" class="single-item">
                        <img src="{{ asset('public/frontend/images/items/2.jpg') }}" alt="">
                        <h4>Ipsum dolor sit amet <span>21:11</span></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!--/Section-->
@endsection

