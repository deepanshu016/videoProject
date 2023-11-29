@extends('frontend.includes.layout')
@section('title','Terms & Conditions')
@section('content')
    <section class="mt-40">
        <div class="container-fluid">
            <div class="row">
                @include("frontend.includes.categories")
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                    <div class="content-center cl-white">
                        <div class="section-title">
                            <h2>Terms & Conditions</h2>
                        </div>
                       
                        <p>{!! @$cms->terms_conditions_content !!}</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                    <div class="web-sidebar-widget mb-40">
                        <div class="widget-body">
                            <a href=""><img class="w-100" src="{{ asset('public/frontend/images/ads.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="web-sidebar-widget mb-40">
                        <div class="widget-head">
                            <h3>All time Best</h3>
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
                </div>
            </div>
        </div>
    </section>
    @endsection
