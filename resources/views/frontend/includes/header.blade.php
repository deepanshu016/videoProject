<!--Header Area-->
<header class="header-area mint-bg">
    <nav class="navbar navbar-expand-xl main-menu">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" class="d-inline-block align-top" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav m-auto menu-search">
                    <form action="#">
                        <input type="text" placeholder="Search Video..." required>
                        <select name="category">
                            <option value="">Category</option>
                            <option value="">Trending Topic</option>
                            <option value="">Awesome Ideas</option>
                            <option value="">Natural Beauty</option>
                            <option value="">Inhouse</option>
                            <option value="">Outside of wall</option>
                            <option value="">In a hill</option>
                        </select>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <ul class="navbar-nav m-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Homepage 1</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Homepage 2</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Homepage 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="new-videos.html">New Videos <span>New</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="featured.html">Featured</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="single-video.html">Single Video</a></li>
                            <li><a class="dropdown-item" href="upload.html">Upload</a></li>
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                            <li><a class="dropdown-item" href="about.html">About us</a></li>
                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                            <li><a class="dropdown-item" href="register.html">Registration</a></li>
                            <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                            <li><a class="dropdown-item" href="404.html">Error</a></li>
                            <li><a class="dropdown-item" href="privacy.html">Privacy</a></li>
                            <li><a class="dropdown-item" href="tos.html">Terms and Condition</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog.html">News</a></li>
                            <li><a class="dropdown-item" href="blog-details.html">News Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
                <div class="header-btn justify-content-end">
                    <a href="upload.html" class="bttn-small btn-fill"><i class="fa fa-upload"></i>Upload</a>
                    <button type="button" class="account-btn bttn-small btn-fill ml-2"><i class="fa fa-lock"></i>Account</button>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--/Header Area-->
<!--Account Full-->
<div class="account-full">
    <button type="submit" class="account-close"><i class="flaticon-cancel"></i></button>
    <div class="account-full--inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="account-login-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email" required>
                                    <input type="password" placeholder="Enter Password" required>
                                    <button type="submit" class="bttn-small btn-fill">Login</button>
                                </form>
                                <a href="">Forget Password</a>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email" required>
                                    <input type="text" placeholder="Enter your name" required>
                                    <input type="password" placeholder="Enter Password" required>
                                    <button type="submit" class="bttn-small btn-fill">Subscribe now</button>
                                </form>
                                <a href="">Forget Password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="or h-100 justify-content-center d-flex">
                        or
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="social-account-login">
                        <a href="" class="facebook-bg">Signup with facebook</a>
                        <a href="" class="google-plus-bg">Signup with Google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Account Full-->
