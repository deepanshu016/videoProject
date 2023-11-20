@extends('frontend.includes.layout')
@section('title','About Us')
@section('content')
    <section class="mt-40">
        <div class="container-fluid">
            <div class="row">
                @include("frontend.includes.categories")
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                    <div class="content-center cl-white">
                        <div class="section-title">
                            <h2>About us</h2>
                        </div>
                        <img src="{{ asset('public/frontend/images/about.jpg') }}" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptate a minus quasi qui iure laboriosam nisi labore eligendi. Corporis nesciunt, praesentium qui necessitatibus deleniti sequi tempore harum aut ex? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas minus necessitatibus qui libero repellendus, aliquid quam perferendis at molestias fugit atque omnis dolorem nisi vel earum, nihil sint repudiandae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit recusandae quasi consequatur cupiditate pariatur officia fugiat deleniti ad, magnam, odit modi maxime minima laborum dolore obcaecati a optio harum dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptate a minus quasi qui iure laboriosam nisi labore eligendi. Corporis nesciunt, praesentium qui necessitatibus deleniti sequi tempore harum aut ex? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas minus necessitatibus qui libero repellendus, aliquid quam perferendis at molestias fugit atque omnis dolorem nisi vel earum, nihil sint repudiandae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit recusandae quasi consequatur cupiditate pariatur officia fugiat deleniti ad, magnam, odit modi maxime minima laborum dolore obcaecati a optio harum dignissimos!</p>
                        <div class="section-title">
                            <h2>Mission</h2>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, necessitatibus. Quod cupiditate nisi ipsum consectetur error dolores placeat molestiae exercitationem officia, accusantium a, eaque perferendis velit vitae pariatur voluptatibus commodi! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime distinctio provident sapiente consequatur inventore ipsam voluptatum esse? Sequi beatae optio nam animi impedit, minus quas quo, quasi asperiores est tempora.</p>
                        <div class="section-title">
                            <h2>Vission</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ex voluptate recusandae necessitatibus eveniet praesentium, cumque deleniti iure possimus. Fuga, tempora velit explicabo laboriosam aspernatur molestias! Officia veniam quidem laudantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem tempore dicta harum error, ea ullam facere eaque maiores voluptatem magni, quae repellendus similique iure ex temporibus fuga quia sint iste.</p>
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
