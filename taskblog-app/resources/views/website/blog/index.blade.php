@extends('website.master')
@section('title','Blog Page')
@section('body')

    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->


    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-blog-content">
                        @foreach($blogs as $blog)
                        <div class="post">
                            <div class="text-center">
                                <img class="w-50" src="{{asset($blog->image)}}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a href="#">{{$blog->author}}</a> </li>
                                    <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                    <li><i class="fi flaticon-calendar"></i> 24 Jun 2022</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$blog->name}}</a></h4>
                                <p>{{$blog->short_description}}</p>
                                <a href="#" class="read-more">READ MORE...</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fi ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fi ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="{{asset('/')}}website/assets/images/blog/about-widget.jpg" alt>
                            </div>
                            <h4>Jenny Watson</h4>
                            <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="aw-shape">
                                <img src="{{asset('/')}}website/assets/images/blog/ab.png" alt="">
                            </div>
                        </div>
                        <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="{{route('blog.details',['id'=>$blog->id])}}">{{$category->name}}<span>({{count($category->blog)}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Related Posts</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{asset('/')}}website/assets/images/recent-posts/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">19 Jun 2022 </span>
                                        <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">Perfect Photo Clicking Idea You Must
                                                Know.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{asset('/')}}website/assets/images/recent-posts/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">22 May 2022 </span>
                                        <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">Best tourism site all over the world.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{asset('/')}}website/assets/images/recent-posts/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">Whats In Trend in Now Woman Fashion.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{asset('/')}}website/assets/images/recent-posts/img-4.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="{{route('blog.details',['id'=>$blog->id])}}">Top 10 Healthy Food of Your Menu.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget wpo-instagram-widget">
                            <div class="widget-title">
                                <h3>Instagram</h3>
                            </div>
                            <ul class="d-flex">
                                <li><a href="#"><img src="{{asset('/')}}website/assets/images/instragram/13.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('/')}}website/assets/images/instragram/14.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('/')}}website/assets/images/instragram/15.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('/')}}website/assets/images/instragram/16.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('/')}}website/assets/images/instragram/17.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('/')}}website/assets/images/instragram/18.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="widget tag-widget">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Idea</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Gym</a></li>
                            </ul>
                        </div>
                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->

@endsection
