<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\SponsoredBlog;
use Illuminate\Http\Request;
use function Nette\Utils\first;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'blogs'=>Blog::where('status',1)->take(1)->get(),
            'blog1'=>Blog::where('status',1)->skip(1)->take(1)->get(),
            'blog2'=>Blog::where('status',1)->skip(2)->take(2)->get(),
            'blog3'=>Blog::where('status',1)->latest()->take(3)->get(),
            'blog4'=>Blog::where('status',1)->latest()->take(2)->get(),
            'blog5'=>Blog::where('status',1)->latest()->take(4)->get(),
            'blog8'=>Blog::where('status',1)->latest()->take(8)->get(),
            'sponsoredBlogs'=>SponsoredBlog::where('status',1)->latest()->take(4)->get(),
            'categories'=>Category::where('status', 1)->get()

        ]);
    }
    public function category($id){
        return view('website.category.index',[
            'blogs'=>Blog::where('status',1)->where('category_id',$id)->latest()->get(),
            'categories'=>Category::where('status', 1)->get()
        ]);
    }
    public function blog(){
        return view('website.blog.index',[
            'blogs'=>Blog::where('status',1)->latest()->get(),
            'categories'=>Category::where('status',1)->latest()->get(),
        ]);
    }
    public function blogDetails($id){
        return view('website.blog.details',[
            'blog'=>Blog::find($id),
            'sponsoredBlog'=>SponsoredBlog::find($id),
            'categories'=>Category::where('status', 1)->get(),
            'blog8'=>Blog::where('status',1)->latest()->take(8)->get(),
            'comments'=>Comment::where('status',0)->where('blog_id',$id)->latest()->get(),
        ]);
    }
    public function about(){
        return view('website.about.index');
    }
    public function contact(){
        return view('website.contact.index');
    }
}
