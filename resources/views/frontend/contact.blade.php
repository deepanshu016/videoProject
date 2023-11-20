@extends('frontend.includes.layout')
@section('title','Contact Us')
@section('content')
    <section class="mt-40">
        <div class="container-fluid">
            <div class="row">
                @include("frontend.includes.categories")
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                    <div class="content-center cl-white">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-12">
                                <div class="account-form">
                                    <div class="title">
                                        <h3>Message us!</h3>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="First Name" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Last Name" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Phone number" required>
                                            </div>
                                            <div class="col-xl-12">
                                                <textarea name="msg" rows="4" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-xl-12">
                                                <button type="submit" class="bttn-small btn-fill w-100">Send it</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                            <a href="" class="video mb-20">
                                <div class="thumb">
                                    <img src="{{ asset('public/frontend/images/items/5.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Ad magnam perspiciatis</h4>
                                    <div class="metas">
                                        <span><i class="fa fa-user"></i>Robbin</span>
                                        <span><i class="fa fa-comment"></i>05</span>
                                        <span><i class="fa fa-eye"></i>23M</span>
                                        <span><i class="fa fa-thumbs-up"></i>21K</span>
                                        <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="video mb-20">
                                <div class="thumb">
                                    <img src="{{ asset('public/frontend/images/items/6.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Latin literature from 45</h4>
                                    <div class="metas">
                                        <span><i class="fa fa-user"></i>Robbin</span>
                                        <span><i class="fa fa-comment"></i>05</span>
                                        <span><i class="fa fa-eye"></i>23M</span>
                                        <span><i class="fa fa-thumbs-up"></i>21K</span>
                                        <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="video mb-20">
                                <div class="thumb">
                                    <img src="{{ asset('public/frontend/images/items/7.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>It is a long established fact that</h4>
                                    <div class="metas">
                                        <span><i class="fa fa-user"></i>Robbin</span>
                                        <span><i class="fa fa-comment"></i>05</span>
                                        <span><i class="fa fa-eye"></i>23M</span>
                                        <span><i class="fa fa-thumbs-up"></i>21K</span>
                                        <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="video">
                                <div class="thumb">
                                    <img src="{{ asset('public/frontend/images/items/8.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4>There are many variations of passages of Lorem</h4>
                                    <div class="metas">
                                        <span><i class="fa fa-user"></i>Robbin</span>
                                        <span><i class="fa fa-comment"></i>05</span>
                                        <span><i class="fa fa-eye"></i>23M</span>
                                        <span><i class="fa fa-thumbs-up"></i>21K</span>
                                        <span><i class="fa fa-thumbs-down"></i>2.3K</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
