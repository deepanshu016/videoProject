@extends("frontend.includes.layout")
@section('title','Event Organizer | Video List')
@section('content')
    <!--Main Content Area-->
    <section class="mt-40">
        <div class="container-fluid">
            <div class="row">
                @include("frontend.includes.categories")
                <div class="col-xl-10 col-lg-10 col-md-6 col-sm-12">
                    <div class="main-content-1">
                        <div class="section-title cl-white">
                            <h2>New Videos</h2>
                        </div>
                        <div class="row">
                            @if(!empty($videoList))
                                @foreach($videoList as $video)
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-30">
                                <div class="content">
                                    <a href="{{ route('video',['video_id'=>$video->video_id,'video_slug'=>$video->slug]) }}">
                                        <div class="thumb">
                                            <img src="{{ $video->video_futured_image }}" alt="{{ $video->video_title }}">
                                        </div>
                                        <div class="text">
                                            <h4>{{ $video->video_title }} <span>5:48 min</span></h4>
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
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Main Content Area-->
    <!--Section-->
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


@endsection

