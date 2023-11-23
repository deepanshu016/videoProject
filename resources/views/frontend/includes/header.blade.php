<!--Header Area-->
<header class="header-area mint-bg">
    <nav class="navbar navbar-expand-xl main-menu">
        <div class="container-fluid">
            <a href="index.html" class="footer-logo"><img src="{{ asset('public/frontend/images/logo.png') }}" alt="" style="width: 99px;"></a>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/images/logo.png" class="d-inline-block align-top" alt=""></a>
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
            <ul style="display: flex;">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about.us') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Terms & Privacy</a></li>
               
            </ul>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button> -->

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
                </ul>
            </div>
        </div>
    </nav>
</header>
