<!-- Start header -->
<header id="header" class="wpo-site-header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-lg-7 col-md-9 col-sm-12 col-12">
                    <div class="contact-intro">
                        <ul>
                            <li class="update"><span>New Update</span></li>
                            <li>Betting against meme stocks could get you seriously burned</li>
                        </ul>
                    </div>
                </div>
                <div class="col  col-lg-5 col-md-3 col-sm-12 col-12">
                    <div class="contact-info">
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end topbar -->
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1 col-md-3 col-2 d-lg-none dl-block p-0 m-0">
                    <div class="mobail-menu">
                        <button type="button" class="navbar-toggler open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar first-angle"></span>
                            <span class="icon-bar middle-angle"></span>
                            <span class="icon-bar last-angle"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6 p-0 m-0">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('/')}}website/assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-1 col-1 p-0 m-0">
                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                        <button class="menu-close"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav mb-2 mb-lg-0">
                            <li class="menu-item-has-children"><a class="active" href="{{route('home')}}">Home</a></li>
                            <li class="menu-item-has-children">
                                <a href="">Categories</a>

                                <ul class="sub-menu">
                                    @foreach($categories as $category)
                                    <li><a href="{{route('category',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('blogs')}}">Blogs</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            @if(Session::get('user_id'))
                                <li class="menu-item-has-children">
                                    <a href="">
                                        <h4 class="bg-info bg-opacity-25 p-2 rounded-4">{{Session::get('user_name')}} <i class="ti-arrow-circle-down"></i></h4>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('user-dashboard')}}">Dashboard</a></li>
                                        <li><a href="">Profile</a></li>
                                        <li>
                                            <a href="" onclick="confirm('are you sure to logout');event.preventDefault(); document.getElementById('logout').submit();">Logout </a>
                                                <form action="{{route('logout')}}" id="logout" method="POST">
                                                    @csrf
                                                </form>

                                        </li>
                                    </ul>

                                </li>
                            @else
                            <li><a href="{{route('user.login')}}">Login</a></li>
                            <li><a href="{{route('user.register')}}">Register</a></li>
                            @endif

                        </ul>
                    </div><!-- end of nav-collapse -->
                </div>
                <div class="col-lg-1 col-md-2 col-2 p-0 m-0">
                    <div class="header-right">
                        <div class="header-search-form-wrapper">
                            <div class="cart-search-contact">
                                <button class="search-toggle-btn"><i
                                        class="fi flaticon-magnifiying-glass"></i></button>
                                <div class="header-search-form">
                                    <form>
                                        <div>
                                            <input type="text" class="form-control"
                                                   placeholder="Search here...">
                                            <button type="submit"><i
                                                    class="fi flaticon-magnifiying-glass"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="header-right-menu-wrapper">
                            <div class="header-right-menu">
                                <div class="right-menu-toggle-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="header-right-menu-wrap">
                                    <button class="right-menu-close"><i class="ti-close"></i></button>
                                    <div class="logo"><img src="{{asset('/')}}website/assets/images/logo2.png" alt=""></div>
                                    <div class="header-right-sec">
                                        <div class="project-widget widget">
                                            <h3>Our Latest News</h3>
                                            <div class="posts">
                                                @foreach($blog3 as $blog)
                                                <div class="post">
                                                    <div class="img-holder">
                                                        <img class="img-fluid" src="{{asset($blog->image)}}" alt>
                                                    </div>
                                                    <div class="details">
                                                        <span class="date">{{$blog->created_at}} </span>
                                                        <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h4>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="widget wpo-contact-widget">
                                            <div class="widget-title">
                                                <h3>Contact Us</h3>
                                            </div>
                                            <div class="contact-ft">
                                                <ul>
                                                    <li><i class="fi flaticon-location"></i>68D, Belsion Town
                                                        2365 <br> Fna city, LH 3656, USA</li>
                                                    <li><i class="fi flaticon-telephone"></i>+ 8 (123) 123 456
                                                        789 <br>
                                                        + 8 (123) 123 456 789</li>
                                                    <li><i class="fi flaticon-email"></i>Bloggar@gmail.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->
