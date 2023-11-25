@extends('website.master')
@section('title','Home Page')
@section('body')
    <!-- start of wpo-blog-hero -->
    <div class="wpo-blog-hero-area">
        <div class="container">
            <div class="sortable-gallery">
                <div class="gallery-filters"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wpo-blog-grids gallery-container clearfix">
                            @foreach($blogs as $blog)
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset($blog->image)}}" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <div class="thumb">{{$blog->category->name}}</div>
                                        <h2><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h2>
                                        <p>{{$blog->short_description}} </p>
                                        <ul>
                                            <li><img src="{{asset($blog->image)}}" alt=""></li>
                                            <li>By <a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->author}}</a></li>
                                            <li>{{$blog->created_at}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @foreach($blog1 as $blog)
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset($blog->image)}}" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <div class="thumb">{{$blog->category->name}}</div>
                                        <h2><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h2>
                                        <ul>
                                            <li>By <a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->author}}</a></li>
                                            <li>{{$blog->created_at}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="grid s2">
                                @foreach($blog2 as $blog)
                                <div class="img-holder">
                                    <img src="{{asset($blog->image)}}" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <div class="thumb">{{$blog->category->name}}</div>
                                        <h2><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h2>
                                        <ul>
                                            <li>By <a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->author}}</a></li>
                                            <li>{{$blog->created_at}}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end of wpo-blog-hero -->

    <!-- start of wpo-breacking-news -->
    <div class="wpo-breacking-news section-padding">
        <div class="container">
            <div class="row">
                <div class="b-title"><span>Breaking News</span></div>
                <div class="wpo-breacking-wrap owl-carousel">
                    @foreach($blog4 as $blog)
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img class="img-fluid" src="{{asset($blog->image)}}" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <span>{{$blog->created_at}}</span>
                            <h3><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a>
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breacking-news -->
    <!-- start wpo-blog-highlights-section -->
    <section class="wpo-blog-highlights-section">
        <div class="container">
            <div class="wpo-section-title">
                <h2>Today's Top Highlights</h2>
            </div>
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <!-- start wpo-blog-section -->
                    <div class="wpo-blog-highlights-wrap">
                        <div class="wpo-blog-items">
                            <div class="row">
                                @foreach($blog8 as $blog)
                                <div class="col col-lg-6 col-md-6 col-12">
                                    <div class="wpo-blog-item">
                                        <div class="wpo-blog-img">
                                            <img src="{{asset($blog->image)}}" alt="">
                                            <div class="thumb">{{$blog->category->name}}</div>
                                        </div>
                                        <div class="wpo-blog-content">
                                            <h2><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h2>
                                            <ul>
                                                <li><img src="{{asset($blog->image)}}" alt="">
                                                </li>
                                                <li>By <a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->author}}</a></li>
                                                <li>{{$blog->created_at}}</li>
                                            </ul>
                                            <p>{{$blog->short_description}} </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end wpo-blog-section -->
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">
                        <div class="widget category-widget">
                            <h3>Trending Topics</h3>
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="{{route('category',['id'=>$category->id])}}">{{$category->name}}<span>{{count($category->blog)}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Popular Post</h3>
                            <div class="posts">
                                @foreach($blog5 as $blog)
                                <div class="post">
                                    <div class="row">
                                        <div class="col-lg-4 ">
                                            <img class="img-fluid" src="{{asset($blog->image)}}" alt>
                                        </div>
                                        <div class=" col-lg-8">
                                            <span class="date">{{$blog->created_at}} </span>
                                            <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h4>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="wpo-add-widget">
                            <a href="#"><img src="{{asset('/')}}website/assets/images/add.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-highlights-section -->
    <!-- start wpo-blog-sponsored-section -->
    <section class="wpo-blog-sponsored-section section-padding">
        <div class="container">
            <div class="wpo-section-title">
                <h2>sponsored news</h2>
            </div>
            <div class="row">
                <div class="wpo-blog-sponsored-wrap">
                    <div class="wpo-blog-items">
                        <div class="row">
                            @foreach($sponsoredBlogs as $sponsoredBlog)
                            <div class="col col-xl-3 col-lg-6 col-md-6 col-12">
                                <div class="wpo-blog-item">
                                    <div class="wpo-blog-img">
                                        <img height="300" src="{{asset($sponsoredBlog->image)}}" alt="">
                                        <div class="thumb">{{$sponsoredBlog->category->name}}</div>
                                    </div>
                                    <div class="wpo-blog-content">
                                        <h2><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$sponsoredBlog->name}}</a>
                                        </h2>
                                        <ul>
                                            <li><img src="{{asset($sponsoredBlog->image)}}" alt=""></li>
                                            <li>By <a href="{{route('blog.details',['id'=>$blog->id])}}">{{$sponsoredBlog->author}}</a></li>
                                            <li>{{$sponsoredBlog->created_at}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-sponsored-section -->
    <!-- start wpo-subscribe-section -->
    <section class="wpo-subscribe-section section-padding">
        <div class="container">
            <div class="wpo-subscribe-wrap">
                <div class="subscribe-text">
                    <h3>Never miss any Update!</h3>
                    <p>Get the freshest headlines and updates sent uninterrupted to your inbox.</p>
                </div>
                <div class="subscribe-form">
                    <form action="#">
                        <div class="input-field">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end subscribe-section -->
@endsection
