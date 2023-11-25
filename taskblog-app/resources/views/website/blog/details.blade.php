@extends('website.master')
@section('title','Blog Detail Page')
@section('body')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Blog Details</h2>
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
    <p class="text-center text-success my-2">{{session('message')}}</p>
    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{asset($blog->image)}}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a href="#">{{$blog->author}}</a> </li>
                                    <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments {{count($blog->comments)}} </li>
                                    <li><i class="fi flaticon-calendar"></i> 24 Jun 2022</li>
                                </ul>
                            </div>
                            <h2>{{$blog->name}}</h2>
                            <p>{!! $blog->long_description !!}</p>
                        </div>

                        <div class="tag-share clearfix">
                            <div class="tag">
                                <span>Share: </span>
                                <ul>
                                    <li><a href="#">Travels</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Food</a></li>
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->
                        <div class="tag-share-s2 clearfix">
                            <div class="tag">
                                <span>Share: </span>
                                <ul>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">linkedin</a></li>
                                    <li><a href="#">pinterest</a></li>
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->

                        <div class="author-box">
                            <div class="author-avatar">
                                <a href="#" target="_blank"><img src="{{asset('/')}}website/assets/images/blog-details/author.jpg"
                                                                 alt></a>
                            </div>
                            <div class="author-content">
                                <a href="#" class="author-name">Author: {{$blog->author}}</a>
                                <p></p>
                                <div class="socials">
                                    <ul class="social-link">
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end author-box -->

                        <div class="more-posts">
                            <div class="previous-post">
                                <a href="#">
                                    <span class="post-control-link">Previous Post</span>
                                </a>
                            </div>
                            <div class="next-post">
                                <a href="0.html">
                                    <span class="post-control-link">Next Post</span>
                                </a>
                            </div>
                        </div>

                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">{{count($comments)}} Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        @foreach($comments as $comment)
                                        <div id="div-comment-1">
                                            <div class="comment-theme">
                                                <div class="comment-image"><img
                                                        src="{{asset('/')}}website/assets/images/blog-details/comments-author/img-1.jpg"
                                                        alt></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>{{$comment->name}} <span class="comments-date">says {{$comment->date}}</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>{{$comment->comment}}</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link"
                                                               href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
{{--                                        <ul class="children">--}}
{{--                                            <li class="comment">--}}
{{--                                                <div>--}}
{{--                                                    <div class="comment-theme">--}}
{{--                                                        <div class="comment-image"><img--}}
{{--                                                                src="{{asset('/')}}website/assets/images/blog-details/comments-author/img-2.jpg"--}}
{{--                                                                alt></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-main-area">--}}
{{--                                                        <div class="comment-wrapper">--}}
{{--                                                            <div class="comments-meta">--}}
{{--                                                                <h4>John Abraham <span class="comments-date">says--}}
{{--                                                                            Jul 21, 2022 at 10:00am</span></h4>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-area">--}}
{{--                                                                <p>I must explain to you how all this mistaken idea--}}
{{--                                                                    of denouncing pleasure and praising pain was--}}
{{--                                                                    born and I will give you a complete account of--}}
{{--                                                                    the system</p>--}}
{{--                                                                <div class="comments-reply">--}}
{{--                                                                    <a class="comment-reply-link"--}}
{{--                                                                       href="#"><span>Reply</span></a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <ul>--}}
{{--                                                    <li class="comment">--}}
{{--                                                        <div>--}}
{{--                                                            <div class="comment-theme">--}}
{{--                                                                <div class="comment-image"><img--}}
{{--                                                                        src="{{asset('/')}}website/assets/images/blog-details/comments-author/img-3.jpg"--}}
{{--                                                                        alt></div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-main-area">--}}
{{--                                                                <div class="comment-wrapper">--}}
{{--                                                                    <div class="comments-meta">--}}
{{--                                                                        <h4>Robert Sonny <span--}}
{{--                                                                                class="comments-date">says Jul 21,--}}
{{--                                                                                    2022 at 10:00am</span></h4>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-area">--}}
{{--                                                                        <p>I must explain to you how all this--}}
{{--                                                                            mistaken idea of denouncing pleasure and--}}
{{--                                                                            praising pain was born and I will give--}}
{{--                                                                            you a complete account of the system</p>--}}
{{--                                                                        <div class="comments-reply">--}}
{{--                                                                            <a class="comment-reply-link"--}}
{{--                                                                               href="#"><span>Reply</span></a>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->

                            @if(Session::get('user_id'))
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a reply</h3>
                                <form action="{{route('comment.store')}}" method="post" class="comment-form">
                                    @csrf
                                    <div class="form-inputs" hidden>
                                        <input placeholder="{{Session::get('user_name')}}" value="{{Session::get('user_name')}}" name="name" type="text" readonly>
                                        <input placeholder="{{Session::get('user_email')}}" value="{{Session::get('user_email')}}" name="email" type="email" readonly>
                                        <input placeholder="" value="{{$blog->id}}" type="email" name="blog_id" readonly>
                                    </div>
                                    <div class="form-textarea">
                                        <textarea id="comment" placeholder="Write Your Comments..." name="comment"></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                            @else
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title"><a href="{{route('user.login')}}">Login here for Leave a reply</a></h3>
                                </div>
                            @endif
                        </div> <!-- end comments-area -->
                    </div>
                </div>
                <div class="col col-lg-4 col-12">
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
                                <li><a href="">{{$category->name}}<span>({{count($category->blog)}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Related Posts</h3>
                            <div class="posts">
                                @foreach($blog8 as $blog)
                                <div class="post">
                                    <div class="row">
                                        <div class="img-holder col-md-6">
                                            <img class="img-fluid p-0" src="{{asset($blog->image)}}" alt>
                                        </div>
                                        <div class="details col-md-6">
                                            <span class="date">{{$blog->created_at}} </span>
                                            <h4><a href="blog-single.html">{{$blog->name}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->

@endsection
