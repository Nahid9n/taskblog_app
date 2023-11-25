<!-- start of wpo-site-footer-section -->
<footer class="wpo-site-footer">
    <div class="wpo-upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <img src="{{asset('/')}}website/assets/images/logo2.png" alt="blog">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which
                            don't look even slightly believable.
                        </p>

                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Important Link</h3>
                        </div>
                        <ul>
                            <li><a href="blog.html">News</a></li>
                            <li><a href="blog.html">Career </a></li>
                            <li><a href="blog.html">Technology</a></li>
                            <li><a href="blog.html">Startups</a></li>
                            <li><a href="blog.html">Gadgets</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="widget tag-widget">
                        <div class="widget-title">
                            <h3>Browse by Tag </h3>
                        </div>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="{{route('category',['id'=>$category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="widget social-widget">
                        <div class="widget-title">
                            <h3>Social Media</h3>
                        </div>
                        <ul>
                            <li><a href="#"><i><img src="{{asset('/')}}website/assets/images/ft-icon/1.png" alt=""></i> Facebook</a>
                            </li>
                            <li><a href="#"><i><img src="{{asset('/')}}website/assets/images/ft-icon/2.png" alt=""></i> Twitter</a>
                            </li>
                            <li><a href="#"><i><img src="{{asset('/')}}website/assets/images/ft-icon/3.png" alt=""></i> Instagram</a>
                            </li>
                            <li><a href="#"><i><img src="{{asset('/')}}website/assets/images/ft-icon/4.png" alt=""></i> Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
    <div class="wpo-lower-footer">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <p class="copyright"> Copyright &copy; 2022 Bloggar by <a href="{{route('dashboard')}}">wpOceans</a>.
                        All
                        Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end of wpo-site-footer-section -->
