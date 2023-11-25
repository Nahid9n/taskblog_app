@extends('website.master')
@section('title','Category Page')
@section('body')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Blog By Category</h2>
                        <ul>
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li><span>Blog By Category</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <p class="my-2">-> {{count($blogs)}} out of {{count($blogs)}}</p>
                <div class="col col-xs-12">
                    <div class="shop-grids clearfix">
                        @foreach($blogs as $blog)
                        <div class="grid">
                            <div class="img-holder">
                                <a href="{{route('blog.details',['id'=>$blog->id])}}"><img src="{{asset($blog->image)}}" alt></a>
                            </div>
                            <div class="details">
                                <h3><a href="{{route('blog.details',['id'=>$blog->id])}}"> {{$blog->name}}</a></h3>
                                <span>{{$blog->author}}</span>
                                <div class="add-to-cart">
                                    <a href="{{route('blog.details',['id'=>$blog->id])}}">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper pagination-wrapper-center">
                        <ul class="pg-pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-shop-section -->

@endsection
